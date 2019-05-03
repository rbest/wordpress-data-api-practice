/**
 * WordPress dependencies
 */
import { registerBlockType } from '@wordpress/blocks';
import { select, subscribe, dispatch } from '@wordpress/data';

registerBlockType( 'jsadvancers/data-api-examples', {
	title: 'Data API Examples',
	description: 'Gutenberg Block to try out the Data API',
	icon: 'chart-area',
	attributes: {},
	category: 'common',
	edit: ( props ) => {
		console.log( 'Describe what you are logging:', select( 'core' ) );

		return <p className={ props.className }>Check the Console :)</p>;
	},
	save: ( props ) => {
		return (
			<p className={ props.className }>
				Go to the Editor and check the Console :)
			</p>
		);
	},
} );
