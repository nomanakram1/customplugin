<?php
add_action('admin_menu','pwspk_plugin_menu');
function pwspk_plugin_menu(){
    add_menu_page('PWSPK Options','PWSPK Options','manage_options','PWSPK-option','PWSPK_option_func', $icon_url = '', $position = null );
    add_submenu_page('PWSPK-option', 'Settings By Noman', 'Settings By Noman', 'manage_options','PWSPK-settings', 'PWSPK_settings_func', $position = null );
}

function PWSPK_option_func(){
     echo("<H1>Options Menu</H1>");
}
function PWSPK_settings_func(){
    echo("<H1>Settings Menu</H1>");
}