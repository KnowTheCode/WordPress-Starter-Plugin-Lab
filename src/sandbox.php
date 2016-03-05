<?php
/**
 * Sandbox test file
 *
 * @package     KnowTheCode
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */
namespace KnowTheCode;

add_action( 'loop_start', __NAMESPACE__ . '\demo' );
/**
 * Demo - testing purposes.
 *
 * @since 1.0.0
 *
 * @return void
 */
function demo() {
	var_dump( get_the_ID() );
	echo get_the_ID();
	d( get_the_ID() );
}