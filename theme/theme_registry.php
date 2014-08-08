<?php

// -----------------------------------------------------------------------------
// Load theme registry.
// @see drupal_pre_render_*().
// @file /includes/theme.inc.

dsm(theme_get_registry());


// -----------------------------------------------------------------------------
// Define a registry.
// @see hook_theme().
// @see hook_theme_registry_alter().
// @link https://drupal.org/node/933976
// @link http://drupal7.api:8082/api/drupal/modules%21system%21system.api.php/function/hook_theme/7.x
// @link http://wearepropeople.com/blog/theming-layers-in-drupal



// -----------------------------------------------------------------------------
// Template implementation

/**
 * Implements hook_theme()
 */
function mymodule_theme() {
  return array(
    'mymodule_template' => array( // Theme hook name.
      'template' => 'templates/mymodule-template', // Path to your template file.
      'arguments' => array(''), // Passed default arguments.
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

// module_preprocess_HOOK(&$variables);
function mymodule_preprocess_mymodule_template(&$variables) {
  $variables['page_text'] .= ' This line was added from preprocess_mymodule_template().';
}
