<?php

// -----------------------------------------------------------------------------
// Plugin types

ctools_include('plugins');
dsm(ctools_plugin_get_plugin_type_info());


// -----------------------------------------------------------------------------
// Plugins

ctools_include('context');
dsm(ctools_get_arguments());

ctools_include('context');
dsm(ctools_get_contexts());

ctools_include('context');
dsm(ctools_get_relationships());


// -----------------------------------------------------------------------------
// Implements plugin

/**
 * Implements hook_ctools_plugin_directory().
 */
function eck_name_ctools_plugin_directory($owner, $plugin_type) {
  if ($owner == 'eck' && $plugin_type == 'property_behavior') {
    return $owner . '/' . $plugin_type;
  }
}

/**
 * Implements hook_ctools_plugin_directory().
 */
function eck_extras_ctools_plugin_directory($owner, $plugin_type) {
  if (in_array($owner, array('ctools', 'eck')) && array('arguments', 'property_behavior')) {
    return $owner . '/' . $plugin_type;
  }
}


// -----------------------------------------------------------------------------
// Get the include files and pass through

$module = 'ctools';
$type = 'plugin-type';
dsm(file_scan_directory(drupal_get_path('module', $module) . '/includes', '/\.' . $type . '\.inc$/', array('key' => 'name')));

