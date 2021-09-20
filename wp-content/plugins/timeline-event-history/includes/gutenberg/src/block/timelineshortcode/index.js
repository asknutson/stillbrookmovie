/**
 * BLOCK: Shortcode
 *
 * Registering a basic block with Gutenberg.
 * Simple block, renders and saves the same content without any interactivity.
 */

//  Import CSS.
import './style.scss';
import './editor.scss';
import { icon } from '../../icons'
const { apiFetch } = wp;
import {
	registerBlockType,
	__,
	PanelColorSettings,
	InspectorControls,
	RichText,
	SelectControl,
	ColorPalette,
	omit,
	merge,
	Fragment,
} from '../../wp-imports'
const {
	withSelect
} = wp.data


const schema = {
	'timelineId'   :{
		'type'   : 'string',
		'default': '-1',
	},
	'isHtml'   :{
		'type': 'boolean',
	},
	'timelineJson' :{
		'type'   : 'object',
		'default': null,
	},
}



export default withSelect( ( select, props ) => {
	const { setAttributes, setState } = props
	const { timelineId, isHtml } = props.attributes
	let json_data = ""

	if ( timelineId && -1 != timelineId && 0 != timelineId && ! isHtml ) {

		$.ajax({
			url: uagb_blocks_info.ajax_url,
			data: {
				action: "timeline_shortcode",
				timelineId : timelineId,
			},
			dataType: "json",
			type: "POST",
			success: function( data ) {
				setAttributes( { isHtml: true } )
				setAttributes( { formJson: data } )
				json_data = data
			}
		})
	}

	return {
		formHTML: json_data
	}
} )

export const edit = ( props ) => {
	
	const {  isSelected, setAttributes, className } = props
	
	const { timelineId, isHtml, timelineJson } = props.attributes


	/*
	* Event to set Image as while adding.
	*/
	
	const onSelectForm = ( id ) => {
		
		const { timelineId } = props.attributes
		const { setAttributes, setState } = props
	
		if ( ! id ) {
			setAttributes( { isHtml: false } )
			setAttributes( { timelineId: null } )
			return
		}	
		setAttributes( { isHtml: true } )
		setAttributes( { timelineId: id } )
	}

	return (
		<Fragment>
			<p className={ 'cgb-shortcode ' + className } > [timeline_wp id="{ timelineId }" ] </p>


			<InspectorControls>
				<SelectControl
                        label={ __( 'Select Accordion' ) }
                        description={ __( 'Vertical/Horizontal' ) }
						value={ timelineId }
						onChange={ onSelectForm }
                        options={ timelineGlobal.timelineItems }
						/>
			</InspectorControls>
		</Fragment>
	)
}

export const save = ( props ) => {
	const {  isSelected, setAttributes, className } = props
	
	const { timelineId, isHtml, timelineJson } = props.attributes
	return (
		<Fragment>
			<p className={ 'cgb-shortcode ' + className } > [timeline_wp id="{ timelineId }" ] </p>		
		</Fragment>
	)

}


/**
 * Register: Shortcode Block.
 *
 * Registers a new block provided a unique name and an object defining its
 * behavior. Once registered, the block is made editor as an option to any
 * editor interface where blocks are implemented.
 *
 * @param  Shortcode        	Block name.
 * @param  {Object}   settings 	Block settings.
 * @return {?WPBlock}          	The block, if it has been successfully
 *                             	registered; otherwise `undefined`.
 */

registerBlockType( 'cgb/timelineshortcode', {
	// Block name. Block names must be string that contains a namespace prefix. Example: my-plugin/my-custom-block.
	title: __( 'Timeline Shortcode' ), // Block title.
	// icon: QuoteIcon, // Block icon from Dashicons → https://developer.wordpress.org/resource/dashicons/.
	category: 'timeline', // Block category — Group blocks together based on common traits E.g. common, formatting, layout widgets, embed.
	icon: icon ,
	keywords: [
		__( 'Shotcode' ),
		__( 'Timeline Example' ),
	],
	attributes: schema,
	edit,
	save,
} );