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

    function __construct() {
        add_action('init', array($this, 'custom_post_type'));
    }
    function activation()
    {
        // generate CPT
        $this->custom_post_type();
        //flush rewrite rules
        flush_rewrite_rules();
     }
    function deactivation()
    {

        // flush rewrite rules
        flush_rewrite_rules();
    }

    function custom_post_type() {
        register_post_type('book', ['public' => true, 'label' => 'Books']);
    }

    
}

if (class_exists( 'MediaManagerPlugin')) {
    $mediaManagerPlugin = new MediaManagerPlugin();
}


// activation
register_activation_hook(__FILE__, array($mediaManagerPlugin, 'activation') );

// deactivation
register_deactivation_hook(__FILE__, array($mediaManagerPlugin, 'deactivation'));