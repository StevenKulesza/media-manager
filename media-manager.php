<?php
/**
 * @package media-manger
 * Plugin Name: media-manger
 * Plugin URI: http://stevenkulesza.com
 * Description: Store media in a cloud bucket.
 * Version: 0.0.0
 * Author: Steve Kulesza
 * Author URI: http://stevenkulesza.com
 * License: GPLv2 or later
 * Text Domain: media-manger
 */

defined('ABSPATH') or die('You do not have access silly human.');

class MediaManagerPlugin
{
    function activation()
    {
        // generate CPT
        //flush rewrite rules
     }
    function deactivation()
    {

        // flush rewrite rules
    }
    function uninstall()
    {
        // delete CPT
        //delete all plugin data
     }
}

if (class_exists( 'MediaManagerPlugin')) {
    $mediaManagerPlugin = new MediaManagerPlugin();
}


// activation
register_activation_hook(__FILE__, array($mediaManagerPlugin, 'activation') );

// deactivation
register_deactivation_hook(__FILE__, array($mediaManagerPlugin, 'deactivation'));


// uninstall
