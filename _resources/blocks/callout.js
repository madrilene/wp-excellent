import {InspectorControls, useBlockProps} from '@wordpress/block-editor';
import {registerBlockType} from '@wordpress/blocks';
import {PanelBody, TextControl, TextareaControl} from '@wordpress/components';
import ServerSideRender from '@wordpress/server-side-render';

registerBlockType('wpexcellent/callout', {
	title: 'Callout',
	icon: 'megaphone',
	category: 'wpexcellent-theme',
	attributes: {
		heading: {
			type: 'string',
			default: 'Callout heading'
		},
		body: {
			type: 'string',
			default: 'Short supporting text for this callout.'
		}
	},
	edit: ({attributes, setAttributes}) => {
		const blockProps = useBlockProps();

		return (
			<div {...blockProps}>
				<InspectorControls>
					<PanelBody title="Callout settings" initialOpen={true}>
						<TextControl
							label="Heading"
							value={attributes.heading}
							onChange={value => setAttributes({heading: value})}
						/>
						<TextareaControl
							label="Body"
							value={attributes.body}
							onChange={value => setAttributes({body: value})}
						/>
					</PanelBody>
				</InspectorControls>

				<ServerSideRender
					block="wpexcellent/callout"
					attributes={attributes}
				/>
			</div>
		);
	},
	save: () => null
});
