<?php

// -----------------------------------------------------------------------------
// $plugin
// @ref What calls eck_property_behavior_invoke_plugin()
// @ref What calls eck_property_behavior_invoke_plugin_alter()
// @ref What calls eck_property_behavior_implements()


// All
$plugin = array(
	'label' => t(''),
  'unique' => FALSE,
  // Callbacks @ref What calls eck_property_behavior_invoke_plugin()
  'entity_info' => '',
  'entity_view' => '',
  'entity_save' => '', // Mimic: entity_insert.
  'entity_update' => '',
  'entity_delete' => '',
  // 
  'default_widget' => '',
  'default_formatter' => '',
  'pre_set' => '', // @see eck__entity__form_submit().
  // Callbacks @ref What calls eck_property_behavior_invoke_plugin_alter()
  'property_info' => '',
  'getter' => '',
  'setter'> '',
  'validation' => '',
  'views_data_alter' => '',
  'bundle_form' => '',
);

// Simplest implementation
$plugin = array(
  'label' => t(''),
  'default_widget' => '',
  'default_formatter' => '',
);

// -----------------------------------------------------------------------------
// $plugin callbacks

$callback($property, $vars);

// Default $vars, simple usage.
$entity = $vars['entity'];
$entity->{$property};



