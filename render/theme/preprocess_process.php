<?php


// Default variables
// @see _template_preprocess_default_variables();
$variables = array(

);

// ----------------------------------------------------------------------------
// Renderable Array
//
// #theme, #theme_wrapper
// Theme registry: variables or 'render element'

$renderable = array(
  '#var1' => '',
  '#var2' => '',
  '#theme' => '',
  '#theme_wrapper' => '',
);

// 'includes'

// 'preprocess functions', 'process functions

// 'theme_hook_suggestion'

// ----------------------------------------------------------------------------
// classes

// Preprocess
'classes_array'; // Change this in preprocess
// When try to add multiple classes with a string, no need to explode, just:
$vars['classes_array'][] = check_plain($entity->settings['classes']);
// When remove, just unset() it:
foreach ($vars['classes_array'] as $key => $css_class) {
  if ($css_class == 'fieldable-panels-pane') {
    unset($vars['classes_array'][$key]);
  }
}

// Process
'classes';


// ----------------------------------------------------------------------------
// Special 

field_attach_preprocess();

