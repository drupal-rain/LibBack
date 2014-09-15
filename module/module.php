<?php


// =============================================================================
//

module_invoke($module, $hook);

module_invoke_all($hook);

drupal_alter($type, &$data, &$context1 = NULL, &$context2 = NULL, &$context3 = NULL);


// =============================================================================
//

drupal_load();


// =============================================================================
//

hook_hook_info();
hook_hook_info_alter();

hook_enable();
hook_disable();
hook_install();
hook_install_tasks();
hook_install_tasks_alter();
hook_uninstall();

hook_module_implements_alter();
hook_modules_enabled();
hook_modules_disabled();
hook_modules_installed();
hook_modules_uninstalled();


// =============================================================================
//

// Place specific code in separated file.
require_once __DIR__ . '/xxx.field.inc';
