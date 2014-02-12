<?php
/*
Plugin Name: Easy Countdowns
Plugin URI;
Description: Adds support of shortcodes that displays countdowns in number of days to a specified date.
Version: 1.1
Author: Andreas Jönsson
Author URI: http://twitter.com/addeliito
*/

add_shortcode('countdown', function($atts){
  if(!isset($atts['date'])) $atts['date'] = date('Y-m-d');
  $date = strtotime($atts['date']);
  $remaining = $date - time();
  $days_remaining = ceil($remaining / 86400);
  return $days_remaining;
});