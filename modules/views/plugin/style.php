<?php

/**
 * Implements hook_views_plugins().
 */
function views_bootstrap_views_plugins() {
  $module_path = drupal_get_path('module', 'views_bootstrap');

  return array(
    'style' => array(
      'views_bootstrap_carousel_plugin_style' => array(
        'title' => t('Bootstrap Carousel'),
        'help' => t('Bootstrap Carousel Style'),
        'path' => $module_path . '/plugins/carousel',
        'handler' => 'ViewsBootstrapCarouselPluginStyle',
        'parent' => 'default',
        'theme' => 'views_bootstrap_carousel_plugin_style',
        'theme path' => $module_path . '/templates/carousel',
        'theme file' => 'theme.inc',
        'uses row plugin' => TRUE,
        'uses grouping' => FALSE,
        'uses options' => TRUE,
        'type' => 'normal',
        //@TODO:  'uses row plugin' => FALSE, 'uses fields' => TRUE,
    ),
  );
}
