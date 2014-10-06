<?php

// -----------------------------------------------------------------------------
// Documents

// @api http://drupal7.api/api/drupal/modules%21field%21field.api.php/group/field_formatter/7.x

// -----------------------------------------------------------------------------
// Hooks

/*
hook_field_formatter_info()
hook_field_formatter_info_alter(&$info)
hook_field_formatter_settings_form($field, $instance, $view_mode, $form, &$form_state)
hook_field_formatter_settings_summary($field, $instance, $view_mode)
hook_field_formatter_prepare_view($entity_type, $entities, $field, $instances, $langcode, &$items, $displays)
hook_field_formatter_view($entity_type, $entity, $field, $instance, $langcode, $items, $display)
*/

/**
 *  Implements hook_field_formatter_info().
 */
function MODULE_field_formatter_info() {
  return array(
    'FORMATTER' => array(
      'label' => t(''),
      'field types' => array('FIELD_TYPE', 'FIELD_TYPE'),
    ),
  );
}

/**
 *  Implements hook_field_formatter_view().
 */
function MODULE_field_formatter_view($entity_type, $entity, $field, $instance, $langcode, $items, $display) {

}


