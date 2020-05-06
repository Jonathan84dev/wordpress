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

