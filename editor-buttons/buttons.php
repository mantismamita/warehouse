<?php

add_shortcode('icon-lock', 'lockIcon'); 
function lockIcon() {
    return '<i class="icon-li icon-lock"></i>';
}
add_shortcode('icon-smoking', 'smokingIcon'); 
function smokingIcon() {
    return '<i class="icon-li icon-smoking"></i>';
}
add_shortcode('icon-book', 'bookIcon'); 
function bookIcon() {
    return '<i class="icon-li icon-book"></i>';
}
add_shortcode('icon-phone', 'phoneIcon'); 
function phoneIcon() {
    return '<i class="icon-li icon-phone"></i>';
}
add_shortcode('icon-wifi', 'wifiIcon'); 
function wifiIcon() {
    return '<i class="icon-li icon-wifi"></i>';
}
add_shortcode('icon-screen', 'screenIcon'); 
function screenIcon() {
    return '<i class="icon-li icon-screen"></i>';
}
add_shortcode('icon-coffee', 'coffeeIcon'); 
function coffeeIcon() {
    return '<i class="icon-li icon-coffee"></i>';
}
add_shortcode('icon-case', 'caseIcon'); 
function caseIcon() {
    return '<i class="icon-li icon-case"></i>';
}
add_shortcode('icon-camera', 'cameraIcon'); 
function cameraIcon() {
    return '<i class="icon-li icon-camera"></i>';
}


add_action( 'init', 'hostel_mama_buttons' );
function hostel_mama_buttons() {
	add_filter("mce_external_plugins", "hostel_mama_add_buttons");
    add_filter('mce_buttons_3', 'hostel_mama_register_buttons');
}	
function hostel_mama_add_buttons($plugin_array) {
	$plugin_array['buttons'] = get_template_directory_uri() . '/editor-buttons/buttons-plugin.js';
	return $plugin_array;
}
function hostel_mama_register_buttons($buttons) {
	array_push( $buttons, 'cameraIcon', 'caseIcon', 'coffeeIcon', 'screenIcon', 'wifiIcon', 'phoneIcon', 'bookIcon', 'smokingIcon', 'lockIcon' ); // from buttons-plugin.js
	return $buttons;
}
?>