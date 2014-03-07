<?php

// -----------------------------------------------------------------------------
// $plugin
// @see ctools_content_process().

$function_base = $plugin['module'] . '_' . $plugin['name'] . '_content_type_';

$plugin = array(
  'title' => t(''),
  'description' => t(''),
  'category' => '',
  'top level' => FALSE,
  'icon' => 'no-icon.png',
  'required context' => new ctools_context_required(t('')),
	'render callback' => $function_base . 'render',
  'admin title' => $function_base . 'admin_title', // Default is 'title'
  'admin info' => $function_base . 'admin_info',
  'edit form' => $function_base . 'edit_form',
  'add form' => $function_base . 'add_form',       // Default is 'edit form'
  'content types' => $function_base . 'content_types',
  'single' => TRUE,
);

// -----------------------------------------------------------------------------
// Simplest implmentation

$plugin = array(
  'title' => t('Simplest content types'),
);

function MODULE_PLUGIN_content_type_render($subtype, $conf, $args, $pane_context, $incoming_content) {
  
}

// -----------------------------------------------------------------------------
// $plugin all available properties

$plugin = array(
  'title' => t(''),
  'no title override' => TRUE,
  'description' => t(''),
  'category' => '',
  'top level' => FALSE,
  'icon' => 'no-icon.png',
  'js' => array('misc/autocomplete.js', 'misc/textarea.js', 'misc/collapse.js'),
  // Context
  'required context' => new ctools_context_required(t('')),
  'all contexts' => TRUE,
  'render callback' => $function_base . 'render',
  'admin title' => $function_base . 'admin_title', // Default is 'title'
  'admin info' => $function_base . 'admin_info',
  'edit form' => $function_base . 'edit_form',
  'add form' => $function_base . 'add_form',       // Default is 'edit form'
  'defaults' => array(),
  'content types' => $function_base . 'content_types',
  'content type' => '',
  'single' => TRUE,
);

// -----------------------------------------------------------------------------
// 'render callback'
// @see ctools_content_render().

// Debug: info
function debug_info_content_type_render($subtype, $conf, $args, $pane_context, $incoming_content) {
  dsm($subtype, 'subtype');
  dsm($conf, 'conf');
  dsm($args, 'args');
  dsm($pane_context, 'pane_context');
  dsm($incoming_content, 'incoming_content');
  
  return FALSE;
}

// Block data structure
function block_content_type_render($subtype, $conf, $args, $pane_context) {
  
  $block = new stdClass();
  $block->title = t('');
  $block->content = '';
  
  /*
  $block = new stdClass();
  $block->module  = 'MODULE';
  $block->title = t('');
  $block->title_link = array();
  $block->content = '';
  $block->delta = '';
  */
  
  // title
  // content
  // links
  // more
  // admin_links
  // feeds
  // type
  // subtype
  
  return $block;
}
