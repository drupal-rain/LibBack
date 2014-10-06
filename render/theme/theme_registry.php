<?php

// -----------------------------------------------------------------------------
// Load theme registry.
// @see drupal_pre_render_*().
// @file /includes/theme.inc.

dsm(theme_get_registry());

// ----------------------------------------------------------------------------
// 'theme_hook_suggestions' magic
//
// @see theme_get_registry().
// This array varies in different location, it would automatically register theme suggestion template.
// @api http://drupal7.api/api/drupal/includes%21bootstrap.inc/class/DrupalCacheArray/7.x

dsm(theme_get_registry()); // Results are very difference called in module and theme.

// -----------------------------------------------------------------------------
// (!!!)
// Template engine use *_theme() to add suggested hook registry.
// Reverse search style, use found files' name to pick 'base hook'.
// @see drupal_find_theme_functions().
// @see drupal_find_theme_templates().

/**
 * Implements hook_theme().
 */
function phptemplate_theme($existing, $type, $theme, $path) {
  $templates = drupal_find_theme_functions($existing, array($theme));
  $templates += drupal_find_theme_templates($existing, '.tpl.php', $path);
  return $templates;
}


// -----------------------------------------------------------------------------
// Define a registry.
// @see hook_theme().
// @see hook_theme_registry_alter().
// @link https://drupal.org/node/933976
// @link http://drupal7.api/api/drupal/modules%21system%21system.api.php/function/hook_theme/7.x
// @link http://wearepropeople.com/blog/theming-layers-in-drupal


// -----------------------------------------------------------------------------
// Function implementation

/**
 * Implements hook_theme()
 */
function HOOK_theme() {
  return array(
    'REGISTRY' => array( // Theme hook name.
      'variables' => array(''), // Passed default arguments.
    ),
  );
}

// -----------------------------------------------------------------------------
// Template implementation

/**
 * Implements hook_theme()
 */
function HOOK_theme() {
  return array(
    'REGISTRY' => array( // Theme hook name.
      'template' => 'templates/mymodule-template', // Path to your template file.
      'variables' => array(''), // Passed default arguments.
    ),
  );
}

// mymodule-template.tpl.php
/*
<div class="custom-template">
<h2 class="title"><?php if ($page_title): print $page_title; endif; ?></h2>
 <div class="text">
   <?php if ($page_text):?>
     <p><?php print $page_text; ?></p>
   <?php endif; ?>
 </div>
 <div class="alter-data">
   <?php if ($alter_data): ?>
     <p><?php print $alter_data; ?></p>
   <?php endif; ?>
 </div>
</div>
*/

// MODULE_preprocess_REGISTRY(&$variables);
// @api http://drupal7.api/api/drupal/includes%21theme.inc/function/theme/7.x
function MODULE_preprocess_REGISTRY(&$variables) {
  $variables['page_text'] .= ' This line was added from preprocess_mymodule_template().';
}
