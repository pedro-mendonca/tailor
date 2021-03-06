<?php

/**
 * Tailor Customizer setting definitions.
 *
 * @package Tailor
 * @subpackage Customizer
 * @since 1.0.0
 */

if ( ! function_exists( 'tailor_get_customizer_settings' ) ) {

    /**
     * Returns the Customizer settings and controls to be registered.
     *
     * @since 1.0.0
     *
     * @return mixed|void
     */
    function tailor_get_customizer_settings() {

        $settings = array(
            'tailor_section_width'      =>  array(
                'setting'                   =>  array(
                    'sanitize_callback'         =>  'tailor_sanitize_text',
                ),
                'control'                   => array(
                    'label'                     =>  __( 'Section width', 'tailor' ),
                    'description'               =>  __( 'The maximum width for sections.', 'tailor' ),
                    'type'                      =>  'text',
                    'priority'                  =>  10,
                    'section'                   =>  'tailor_layout',
                ),
            ),
            'tailor_column_spacing'     =>  array(
                'setting'                   =>  array(
                    'sanitize_callback'         =>  'tailor_sanitize_text',
                ),
                'control'                   => array(
                    'label'                     =>  __( 'Column spacing', 'tailor' ),
                    'description'               =>  __( 'The amount of horizontal space to display between columns.', 'tailor' ),
                    'type'                      =>  'text',
                    'priority'                  =>  20,
                    'section'                   =>  'tailor_layout',
                ),
            ),
            'tailor_element_spacing'    =>  array(
                'setting'                   =>  array(
                    'sanitize_callback'         =>  'tailor_sanitize_text',
                ),
                'control'                   => array(
                    'label'                     =>  __( 'Element spacing', 'tailor' ),
                    'description'               =>  __( 'The amount of vertical space to display between elements.', 'tailor' ),
                    'type'                      =>  'text',
                    'priority'                  =>  30,
                    'section'                   =>  'tailor_layout',
                ),
            ),
        );

	    /**
	     * Filters the plugin Customizer settings.
	     *
	     * @since 1.0.0
	     *
	     * @param array $settings
	     */
        return apply_filters( 'tailor_customizer_settings', $settings );
    }
}