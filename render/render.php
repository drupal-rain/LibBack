<?php

// =============================================================================
// Workflow

// 1. Element Info
// 2. Theme Registry

// -----------------------------------------------------------------------------
// Element Info
// Define the element type, and its default properties.
// Match the same element type and fill the default properties.

hook_element_info();
hook_element_info_alter(&$types);

$element = array(
  '#type' => 'ELEMENT',
  '#pre_render' => array(), // To whole element
  '#theme' => '', // Set it means it's used to theme whole element, not set means children will be themed individually.
  '#theme_wrapper' => '',
  '#post_render' => array(), // To children and whole element
  '#states' => array(), // drupal_process_attached()
  '#attached' => array(), // drupal_process_attached()
  '#prefix' => '', // Prefix to #children
  '#suffix' => '', // Suffix to #children
);

// -----------------------------------------------------------------------------
// Theme Registry




// =============================================================================
// Utility

// Render means pass to theme() for output.

// Use render() in template to assure it will be print.

render(&$element); // show() and drupal_render().

drupal_render(&$elements);
