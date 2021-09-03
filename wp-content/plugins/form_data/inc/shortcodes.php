<?php
//***********************__ plugin __****************************
add_action('init','pwpsk_init');
function pwpsk_init(){
add_shortcode('testShortCode','pwpsk_my_shortcode');
}
//***********************__ display data from shortcoded attribute __****************************
//function pwpsk_my_shortcode($atts){
//    return $atts["message"];
//}
function pwpsk_my_shortcode($atts){
$atts = shortcode_atts(array(
'message' => 'Message from shortcode because no value is given',
),$atts,'test');
return $atts['message'];
}