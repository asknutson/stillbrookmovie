<?php
      /*
      Plugin Name: Poll
      Plugin URI: https://total-soft.com/wp-poll/
      Description: Best Add a powerful poll on your site. WordPress Poll plugin is a responsive and customizable for WordPress. Poll plugin will help you more easily create powerful poll.
      Author: totalsoft
      Version: 1.6.0
      Author URI: https://total-soft.com
      License: GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
      */

require_once( dirname( __FILE__ ) . '/Includes/Total-Soft-Poll-Widget.php' );
require_once( dirname( __FILE__ ) . '/Includes/Total-Soft-Poll-Ajax.php' );
add_action( 'wp_enqueue_scripts', 'T_S_P_Widget_Style' );

function T_S_P_Widget_Style() {
	wp_register_style( 'Total_Soft_Poll', plugins_url( '/CSS/Total-Soft-Poll-Widget.css', __FILE__ ) );
	wp_enqueue_style( 'Total_Soft_Poll' );
	wp_register_script( 'Total_Soft_Poll', plugins_url( '/JS/Total-Soft-Poll-Widget.js', __FILE__ ), array(
		'jquery',
		'jquery-ui-core'
	) );
	// wp_register_script('Total_Soft_Poll','jquery');
	// wp_register_script('Total_Soft_Poll','jquery-ui-core');
	wp_localize_script( 'Total_Soft_Poll', 'objectpoll', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'nonce-for-polll' )
	) );
	wp_enqueue_script( 'Total_Soft_Poll' );
	wp_enqueue_script( "jquery" );
	wp_enqueue_script( "jquery-ui-core" );

	wp_register_style( 'fontawesome-css', plugins_url( '/CSS/totalsoft.css', __FILE__ ) );
	wp_enqueue_style( 'fontawesome-css' );
}

add_action( 'widgets_init', 'T_S_P_Widget_Reg' );

function T_S_P_Widget_Reg() {
	register_widget( 'Total_Soft_Poll' );
}

add_action( "admin_menu", 'T_S_P_Admin_Menu' );

function T_S_P_Admin_Menu() {
	$complete_url = wp_nonce_url( '', 'edit-menu_', 'TS_Poll_Nonce' );
	add_menu_page( 'Admin Menu', 'Poll Options', 'manage_options', 'Total_Soft_Poll' . $complete_url, 'Add_New_T_S_P', plugins_url( '/Images/admin.png', __FILE__ ) );
	add_submenu_page( 'Total_Soft_Poll' . $complete_url, 'Admin Menu', 'Poll Manager', 'manage_options', 'Total_Soft_Poll' . $complete_url, 'Add_New_T_S_P' );
	add_submenu_page( 'Total_Soft_Poll' . $complete_url, 'Admin Menu', 'Settings', 'manage_options', 'Total_Soft_Setting' . $complete_url, 'T_S_P_Settings' );
	add_submenu_page( 'Total_Soft_Poll' . $complete_url, 'Admin Menu', 'Themes', 'manage_options', 'Total_Soft_Theme' . $complete_url, 'T_S_P_Themes' );
	add_submenu_page( 'Total_Soft_Poll' . $complete_url, 'Admin Menu', 'Results', 'manage_options', 'Total_Soft_Result' . $complete_url, 'T_S_P_Results' );
	add_submenu_page( 'Total_Soft_Poll' . $complete_url, 'Admin Menu', 'Info', 'manage_options', 'Total_Soft_Info' . $complete_url, 'T_S_P_Infos' );
	add_submenu_page( 'Total_Soft_Poll' . $complete_url, 'Admin Menu', '<span id="TS_Poll_Sup">Support Forum</span>', 'manage_options', 'Total_Soft_Poll_Support', 'TS_Poll_Support' );
	add_submenu_page( 'Total_Soft_Poll' . $complete_url, 'Admin Menu', 'Total Products', 'manage_options', 'Total_Soft_Products' . $complete_url, 'T_S_Product_P' );
}

add_action( 'admin_init', 'T_S_P_Admin_Style' );

function T_S_P_Admin_Style() {
	wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_script( 'wp-color-picker' );

	wp_register_style( 'Total_Soft_Poll', plugins_url( '/CSS/Total-Soft-Poll-Admin.css', __FILE__ ) );
	wp_enqueue_style( 'Total_Soft_Poll' );
	wp_register_script( 'Total_Soft_Poll', plugins_url( '/JS/Total-Soft-Poll-Admin.js', __FILE__ ), array(
		'jquery',
		'jquery-ui-core'
	) );
	wp_localize_script( 'Total_Soft_Poll', 'objectpoll', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'nonce-for-polll' )
	) );
	wp_enqueue_script( 'Total_Soft_Poll' );
	wp_enqueue_script( "jquery" );
	wp_enqueue_script( 'jquery-ui-core' );
	wp_enqueue_script( 'jquery-ui-sortable' );

	wp_register_style( 'fontawesome-css', plugins_url( '/CSS/totalsoft.css', __FILE__ ) );
	wp_enqueue_style( 'fontawesome-css' );
}

add_action( 'wp_loaded', 'T_S_P_Support' );

function T_S_P_Support() {
	$get;
	isset( $_GET['page'] ) ? $get = sanitize_text_field($_GET['page']) : $get = "";
	if ( $get != 'Total_Soft_Poll_Support' ) {
		return;
	}
	$url = 'https://wordpress.org/support/plugin/poll-wp';
	wp_redirect( $url );
	exit;
}

add_action( 'admin_footer', 'T_S_P_Support_Blank' );
function T_S_P_Support_Blank() {
	?>
    <script type="text/javascript">
      jQuery(document).ready(function () {
        jQuery('#TS_Poll_Sup').parent().attr('target', '_blank');
      });
    </script>
	<?php
}

function Add_New_T_S_P() {
	require_once( dirname( __FILE__ ) . '/Includes/Total-Soft-Poll-New.php' );
}

function T_S_P_Settings() {
	require_once( dirname( __FILE__ ) . '/Includes/Total-Soft-Poll-Settings.php' );
}

function T_S_P_Themes() {
	require_once( dirname( __FILE__ ) . '/Includes/Total-Soft-Poll-Options.php' );
}

function T_S_P_Results() {
	require_once( dirname( __FILE__ ) . '/Includes/Total-Soft-Poll-Results.php' );
}

function T_S_P_Infos() {
	require_once( dirname( __FILE__ ) . '/Includes/Total-Soft-Poll-Info.php' );
}

function Total_Soft_Poll() {
}

function T_S_Product_P() {
	require_once( dirname( __FILE__ ) . '/Includes/Total-Soft-Products.php' );
}

function T_S_P_Install() {
	require_once( dirname( __FILE__ ) . '/Includes/Total-Soft-Poll-Install.php' );
}

register_activation_hook( __FILE__, 'T_S_P_Install' );

function T_S_P_Short_ID( $atts, $content = null ) {
	$atts = shortcode_atts(
		array(
			"id" => "1"
		), $atts
	);

	return T_S_Draw_P( $atts['id'] );
}

add_shortcode( 'Total_Soft_Poll', 'T_S_P_Short_ID' );
function T_S_Draw_P( $Poll ) {
	ob_start();
	$args            = shortcode_atts( array(
		'name'          => 'Widget Area',
		'id'            => '',
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'AFTER_TITLE'   => '',
		'widget_id'     => '',
		'widget_name'   => 'Total Soft Poll'
	), $Poll, 'Total_Soft_Poll' );
	$Total_Soft_Poll = new Total_Soft_Poll;

	$instance = array( 'Total_Soft_Poll' => $Poll, 'Total_Soft_Poll_T' => '' );
	$Total_Soft_Poll->widget( $args, $instance );
	$cont[] = ob_get_contents();
	ob_end_clean();

	return $cont[0];
}

function T_S_P_Color() {
	wp_enqueue_script(
		'alpha-color-picker',
		plugins_url( '/JS/alpha-color-picker.js', __FILE__ ),
		array( 'jquery', 'wp-color-picker' ), // You must include these here.
		null,
		true
	);
	wp_enqueue_style(
		'alpha-color-picker',
		plugins_url( '/CSS/alpha-color-picker.css', __FILE__ ),
		array( 'wp-color-picker' ) // You must include these here.
	);
}

add_action( 'admin_enqueue_scripts', 'T_S_P_Color' );

function T_S_P_settings_link( $links ) {
	$forum_link = '<a target="_blank" href="https://wordpress.org/support/plugin/poll-wp/"> Support </a>';
	array_push( $links, $forum_link );

	return $links;
}

$plugin = plugin_basename( __FILE__ );
add_filter( "plugin_action_links_$plugin", 'T_S_P_settings_link' );

function T_S_P_Media_Button() {
	$img          = plugins_url( '/Images/admin.png', __FILE__ );
	$container_id = 'TSPoll';
	$title        = 'Select Total Soft Poll to insert into post';
	$button_text  = 'TS Poll';
	$context      = "";
	$context      .= '<a class="button thickbox" title="' . $title . '"	href="#TB_inline&inlineId=' . $container_id . '&width=400&height=240"><span class="wp-media-buttons-icon" style="background: url(' . $img . '); background-repeat: no-repeat; background-position: left bottom;background-size: 18px 18px;"></span>' . $button_text . '</a>';
	if ( current_user_can( 'manage_options' ) ) {
		echo wp_kses_post($context);
	}
}

add_action( 'media_buttons', 'T_S_P_Media_Button' );
add_action( 'admin_footer', 'T_S_P_Media_Button_Content' );

function T_S_P_Media_Button_Content() {
	require_once( dirname( __FILE__ ) . '/Includes/Total-Soft-Poll-Media.php' );
}

?>
