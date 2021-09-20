<?php
/**
 * The cpt plugin class.
 *
 * This is used to define the custom post type that will be used for galleries
 *
 * @since      1.0.0
 */
class Photo_Gallery_CPT {
    
	private $labels    = array();
	private $args      = array();
	private $metaboxes = array();
	private $cpt_name;
    private $builder;
    
    
	public function __construct() {

        $this->labels = apply_filters('photo_gallery_cpt_labels', array(
            'singular_name'         => esc_html__( 'Photo Gallery', 'photo-gallery-builder' ),
			'menu_name'             => esc_html__( 'Photo Gallery', 'photo-gallery-builder' ),
			'name_admin_bar'        => esc_html__( 'Photo Gallery', 'photo-gallery-builder' ),
			'archives'              => esc_html__( 'Item Archives', 'photo-gallery-builder' ),
			'attributes'            => esc_html__( 'Item Attributes', 'photo-gallery-builder' ),
			'parent_item_colon'     => esc_html__( 'Parent Item:', 'photo-gallery-builder' ),
			'all_items'             => esc_html__( 'Galleries', 'photo-gallery-builder' ),
			'add_new_item'          => esc_html__( 'Add New Item', 'photo-gallery-builder' ),
			'add_new'               => esc_html__( 'Add New', 'photo-gallery-builder' ),
			'new_item'              => esc_html__( 'New Item', 'photo-gallery-builder' ),
			'edit_item'             => esc_html__( 'Edit Item', 'photo-gallery-builder' ),
			'update_item'           => esc_html__( 'Update Item', 'photo-gallery-builder' ),
			'view_item'             => esc_html__( 'View Item', 'photo-gallery-builder' ),
			'view_items'            => esc_html__( 'View Items', 'photo-gallery-builder' ),
			'search_items'          => esc_html__( 'Search Item', 'photo-gallery-builder' ),
			'not_found'             => esc_html__( 'Not found', 'photo-gallery-builder' ),
			'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'photo-gallery-builder' ),
			'featured_image'        => esc_html__( 'Featured Image', 'photo-gallery-builder' ),
			'set_featured_image'    => esc_html__( 'Set featured image', 'photo-gallery-builder' ),
			'remove_featured_image' => esc_html__( 'Remove featured image', 'photo-gallery-builder' ),
			'use_featured_image'    => esc_html__( 'Use as featured image', 'photo-gallery-builder' ),
			'insert_into_item'      => esc_html__( 'Insert into item', 'photo-gallery-builder' ),
			'uploaded_to_this_item' => esc_html__( 'Uploaded to this item', 'photo-gallery-builder' ),
			'items_list'            => esc_html__( 'Items list', 'photo-gallery-builder' ),
			'items_list_navigation' => esc_html__( 'Items list navigation', 'photo-gallery-builder' ),
			'filter_items_list'     => esc_html__( 'Filter items list', 'photo-gallery-builder' ),
        ));

        $this->args = apply_filters( 'photo_gallery_cpt_args', array(
			'label'                 => esc_html__( 'Photo Gallery', 'photo-gallery-builder' ),
			'description'           => esc_html__( 'Photo Gallery Post Type Description.', 'photo-gallery-builder' ),
			'supports'              => array( 'title' ),
			'public'                => false,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-format-gallery',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => false,
			'can_export'            => true,
			'has_archive'           => false,
			'exclude_from_search'   => true,
			'rewrite'               => false,
			'show_in_rest'          => true,
        ) );
        
        $this->metaboxes = apply_filters( 'photo_gallery_wp_cpt_metaboxes', array(
			'photo-gallery-builder' => array(
				'title' => esc_html__( 'Gallery Images', 'photo-gallery-builder' ),
				'callback' => 'output_photo_gallery_builder',
				'context' => 'normal',
			),
			'photo-gallery-settings' => array(
				'title' => esc_html__( 'Settings', 'photo-gallery-builder' ),
				'callback' => 'output_gallery_settings',
				'context' => 'normal',
			),
			 'photo-gallery-shortcode' => array(
				'title' => esc_html__( 'Shortcode', 'photo-gallery-builder' ),
			 	'callback' => 'output_gallery_shortcode',
			 	'context' => 'side',
			 	'priority' => 'default',
			 ),
        ) );
        
		$this->cpt_name = apply_filters( 'photo_gallery_cpt_name', 'pg_builder' );

        add_action( 'init', array( $this, 'register_cpt' ) );

        /* Fire our meta box setup function on the post editor screen. */
		add_action( 'load-post.php', array( $this, 'meta_boxes_setup' ) );
        add_action( 'load-post-new.php', array( $this, 'meta_boxes_setup' ) );
        
        
		// Post Table Columns
		add_filter( "manage_{$this->cpt_name}_posts_columns", array( $this, 'add_columns' ) );
		add_action( "manage_{$this->cpt_name}_posts_custom_column" , array( $this, 'output_column' ), 10, 2 );

		/* Load Fields Helper */
		require_once PHOTO_GALLERY_BUILDER_ADMIN . 'class-photo-gallery-cpt-fields-helper.php';

		/* Load Builder */
		require_once PHOTO_GALLERY_BUILDER_ADMIN . 'class-photo-gallery-field-builder.php';
		$this->builder = Photo_Gallery_Field_Builder::get_instance();

			}
    
	public function register_cpt() {

		$args = $this->args;
		$args['labels'] = $this->labels;
		register_post_type( $this->cpt_name, $args );

    }
    public function meta_boxes_setup() {
		/* Add meta boxes on the 'add_meta_boxes' hook. */
  		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
  		/* Save post meta on the 'save_post' hook. */
		add_action( 'save_post', array( $this, 'save_meta_boxes' ), 10, 2 );
    }
    
    
	public function add_meta_boxes() {

		global $post;

		foreach ( $this->metaboxes as $metabox_id => $metabox ) {
            
            if ( 'photo-gallery-shortcode' == $metabox_id && 'auto-draft' == $post->post_status ) {
				break;
			}
            
			add_meta_box(
                $metabox_id,      // Unique ID
			    $metabox['title'],    // Title
			    array( $this, $metabox['callback'] ),   // Callback function
			    'pg_builder',         // Admin page (or post type)
			    $metabox['context'],         // Context
			    'high'         // Priority
			);
		}

    }
    
    public function output_photo_gallery_builder() {
 		 $this->builder->render( 'gallery' );
	}

	public function output_gallery_settings() {
        $this->builder->render( 'settings' );
	}

	public function output_gallery_shortcode( $post ) {
		$this->builder->render( 'shortcode', $post );
	}

    
	public function save_meta_boxes( $post_id, $post ) {

		/* Get the post type object. */
		$post_type = get_post_type_object( $post->post_type );

		/* Check if the current user has permission to edit the post. */
		if ( !current_user_can( $post_type->cap->edit_post, $post_id ) || 'pg_builder' != $post_type->name ) {
			return $post_id;
		}

		// We need to resize our images
		$images = get_post_meta( $post_id, 'photo-gallery-images', true );
		if ( $images && is_array( $images ) ) {
			if ( isset( $_POST['photo-gallery-settings']['img_size'] ) && apply_filters( 'photo_gallery_resize_images', true, $_POST['photo-gallery-settings'] ) ) {

				$gallery_type = isset( $_POST['photo-gallery-settings']['type'] ) ? sanitize_text_field($_POST['photo-gallery-settings']['type']) : 'creative-gallery';
				$img_size = absint( $_POST['photo-gallery-settings']['img_size'] );
				
				foreach ( $images as $image ) {
					$grid_sizes = array(
						'width' => isset( $image['width'] ) ? absint( $image['width'] ) : 1,
						'height' => isset( $image['height'] ) ? absint( $image['height'] ) : 1,
					);
					
				}

			}
		}

		if ( isset( $_POST['photo-gallery-settings'] ) ) {

			
			$fields_with_tabs = Photo_Gallery_CPT_Fields_Helper::get_fields( 'all' );

			// Here we will save all our settings
			$photo_gallery_settings = array();

			// We will save only our settings.
			foreach ( $fields_with_tabs as $tab => $fields ) {

			    // We will iterate throught all fields of current tab
				foreach ( $fields as $field_id => $field ) {

					if ( isset( $_POST['photo-gallery-settings'][ $field_id ] ) ) {

						switch ( $field_id ) {
							case 'description':
								$photo_gallery_settings[ $field_id ] = wp_filter_post_kses( $_POST['photo-gallery-settings'][ $field_id ] );
								break;
	
							case 'shadowSize':
								$photo_gallery_settings[ $field_id ] = absint( $_POST['photo-gallery-settings'][ $field_id ] );
								break;
							
							case 'shadowColor':
								$photo_gallery_settings[ $field_id ] = sanitize_hex_color( $_POST['photo-gallery-settings'][ $field_id ] );
								break;
							
							default:
								if( is_array( $_POST['photo-gallery-settings'][ $field_id ] ) ){

									$sanitized = array_map( 'sanitize_text_field', $_POST['photo-gallery-settings'][ $field_id ] );
									$photo_gallery_settings[ $field_id ] = apply_filters( 'photo_gallery_settings_field_sanitization', $sanitized, $field_id, $field );

								}else{

									$photo_gallery_settings[ $field_id ] = apply_filters( 'photo_gallery_settings_field_sanitization', sanitize_text_field( $_POST['photo-gallery-settings'][ $field_id ] ), $field_id, $field );

								}

								break;
						}

					}else{
						if ( 'toggle' == $field['type'] ) {
							$photo_gallery_settings[ $field_id ] = '0';
						}else{
							$photo_gallery_settings[ $field_id ] = '';
						}
					}

				}

			}

						
			// Add settings to gallery meta
			update_post_meta( $post_id, 'photo-gallery-settings', $photo_gallery_settings );

		}

	}

    

    public function add_columns( $columns ){

		$date = $columns['date'];
		unset( $columns['date'] );
		$columns['shortcode'] = esc_html__( 'Shortcode', 'photo-gallery-builder' );
		$columns['date'] = $date;
		return $columns;

	}

	public function output_column( $column, $post_id ){

		if ( 'shortcode' == $column ) {
			$shortcode = '[photo-gallery id="' . $post_id . '"]';
			echo '<input type="text" value="' . esc_attr( $shortcode ) . '"  onclick="select()" readonly style="width:32%;">';
            /*echo '<a href="#" class="copy-photo-gallery-shortcode button button-primary" style="margin-left:15px;">'.esc_html__('Copy shortcode','photo-gallery-builder').'</a><span style="margin-left:15px;"></span>';*/
		}

	}

}

