<?php

// It can be understand as 'display' for panels region and pane.

$plugin = array(
  'title' => t(''),
  'description' => t(''),
  'render region' => 'panels_PLUGIN_style_render_region', // Automatically register
  'render pane' => 'panels_PLUGIN_style_render_pane',
  'settings form' => 'panels_PLUGIN_style_settings_form',
  'hook theme' => array(
    'THEME-REGISTRY' => array(),
  ),
);

function theme_panels_PLUGIN_style_render_region(&$vars) {

}

function theme_panels_PLUGIN_style_render_pane(&$vars) {

}

function panels_PLUGIN_style_settings_form($style_settings) {
  return $form;
}