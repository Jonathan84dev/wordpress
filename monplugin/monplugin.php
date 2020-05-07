<?php 
/**
 * Plugin Name: monplugin
 * 
 */

 //

function activationHook()
{
error_log('Le plugin est activé');
}

register_activation_hook (__FILE__, 'activationHook');


function deactivationHook()
{
error_log('Le plugin est désactivé');
}

register_deactivation_hook (__FILE__, 'deactivationHook');


function uninstallHook()
{
error_log('Le plugin est désintallé');
}

register_uninstall_hook (__FILE__, 'uninstallHook');

// interface de création du menu du plugin dans l'interface admin

function monpluginperso_addmenu (){
error_log ("ajout du menu");
add_menu_page (
    'Mon plugin admin',
    'Menu',
    'manage_options',
    plugin_dir_path(__FILE__) . 'admin/admin_plugin.php',
    null,
    'dashicons-admin-tools',
    20
);

}
add_action( 'admin_menu', 'monpluginperso_addmenu');

?>
