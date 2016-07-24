<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */

$options = array(
	fw()->theme->get_options( 'options/general-settings' ),
	fw()->theme->get_options( 'options/blog-settings' ),
	fw()->theme->get_options( 'options/page-settings' ),
	fw()->theme->get_options( 'options/others-settings' ),
	fw()->theme->get_options( 'options/footer-settings' ),

);
