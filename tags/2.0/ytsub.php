<?php
/*
Plugin Name:  YT Sub Counter
Plugin URI:   https://www.pinoyitsolution.com
Description:  Display Youtube Subscriber Count
Version:      2.0.0
Author:       Ronknight
Author URI:   https://www.pinoyitsolution.com/portfolio
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

//Exit if directly accessed
if(!defined('ABSPATH')){
    exit;
}
//Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/ytsub-scripts.php');

//Load Class
require_once(plugin_dir_path(__FILE__).'/includes/ytsub-class.php');

//Register Widget
function register_ytsub(){
    register_widget('YT_Sub_Widget');
}

//Hook in function
add_action('widgets_init', 'register_ytsub');
?>