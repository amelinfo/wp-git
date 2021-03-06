<?php
/**
 * Visual Composer Section Configuration
 *
 * @package Total WordPress Theme
 * @subpackage Visual Composer
 * @version 4.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Start Class
if ( ! class_exists( 'VCEX_VC_Section_Config' ) ) {
	
	class VCEX_VC_Section_Config {

		/**
		 * Main constructor
		 *
		 * @since 4.0
		 */
		public function __construct() {
			add_action( 'vc_after_init', array( 'VCEX_VC_Section_Config', 'add_remove_params' ) );
			add_filter( 'shortcode_atts_vc_section', array( 'VCEX_VC_Section_Config', 'parse_attributes' ), 99 );
			add_filter( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, array( 'VCEX_VC_Section_Config', 'shortcode_classes' ), 10, 3 );
		}

		/**
		 * Adds new params for the VC Rows
		 *
		 * @since 4.0
		 */
		public static function add_remove_params() {

			$add_params['visibility'] = array(
				'type' => 'vcex_visibility',
				'heading' => __( 'Visibility', 'total' ),
				'param_name' => 'visibility',
				'weight' => 99,
			);

			/*
			// @todo add local scroll id to sections
			$add_params['local_scroll_id'] = array(
				'type' => 'textfield',
				'heading' => __( 'Local Scroll ID', 'total' ),
				'param_name' => 'local_scroll_id',
				'description' => __( 'Unique identifier for local scrolling links.', 'total' ),
				'weight' => 99,
			); */

			foreach( $add_params as $key => $val ) {
				vc_add_param( 'vc_section', $val );
			}

		}

		/**
		 * Parse VC section attributes on front-end
		 *
		 * @since 4.0
		 */
		public static function parse_attributes( $atts ) {
			if ( ! empty( $atts['full_width'] ) && 'boxed' == wpex_site_layout() ) {
				$atts['full_width'] = '';
				$atts['full_width_boxed_layout'] = 'true';
			}
			return $atts;
		}

		/**
		 * Tweak shortcode classes
		 *
		 * @since 4.0
		 */
		public static function shortcode_classes( $class_string, $tag, $atts ) {

			// Edits only for columns
			if ( 'vc_section' != $tag ) {
				return $class_string;
			}

			$add_classes = array();

			// Visibility
			if ( ! empty( $atts['visibility'] ) ) {
				$add_classes[] = $atts['visibility'];
			}

			// Full width
			if ( ! empty( $atts['full_width'] ) ) {
				$add_classes[] = 'wpex-vc-row-stretched';
			}
			
			if ( ! empty( $atts['full_width_boxed_layout'] ) ) {
				$add_classes[] = 'wpex-vc-section-boxed-layout-stretched';
			}

			if ( $add_classes ) {
				$add_classes = implode( ' ', array_filter( $add_classes, 'trim' ) );
				$class_string .= ' '. $add_classes;
			}

			// Replace fill name
			$class_string = str_replace( 'vc_section-has-fill', 'wpex-vc_section-has-fill', $class_string );

			// Return class string
			return $class_string;

		}

	}

}
new VCEX_VC_Section_Config();