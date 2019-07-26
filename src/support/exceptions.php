<?php
/**
 * Exception handling
 *
 * @package     KnowTheCode
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */
namespace KnowTheCode;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

/**
 * One option is to load Whoops when the `init` event fires.
 * But if an error occurs _before_ that event, the ugly PHP
 * error wrapper will display.
 *
 * Therefore, another option is to simply call `load_whoops()` at the
 * bottom of this file.  Then it loads at the start of the plugin.
 */

//add_action( 'init', __NAMESPACE__ . '\load_whoops', 1 );
/**
 * Load Whoops.
 *
 * @since 1.0.0
 *
 * @return void
 */
function load_whoops() {
	$whoops     = new Run();
	$error_page = new PrettyPageHandler();
	$error_page->setEditor( 'sublime' );
	$whoops->prependHandler( $error_page );
	$whoops->register();
}

load_whoops();
