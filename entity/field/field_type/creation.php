<?php

// ----------------------------------------------------------------------------
// example.install

/**
 * Implements hook_field_schema().
 */
function example_field_schema($field) {
  return array(
    'columns' => array(
      'value' => array(
        'type' => 'int',
        'not null' => FALSE,
      ),
    ),
    'indexes' => array(
      'value' => array('value'),
    ),
  );
}

/**
 * Implements hook_field_schema().
 */
function example_field_schema($field) {
  $schema['columns']['value'] = array(
    'description' => 'The URL string.',
    'type' => 'text',
    'size' => 'big',
    'not null' => FALSE,
  );

  return $schema;
}

// ----------------------------------------------------------------------------
// example.module

// Field Type Definition
/**
 * @implements hook_field_info().
 */
function example_field_info() {
  return array(
    'list_integer' => array(
      'label' => t('List (integer)'),
      'description' => t("This field stores integer values from a list of allowed 'value => label' pairs, i.e. 'Lifetime in days': 1 => 1 day, 7 => 1 week, 31 => 1 month."),
      'settings' => array('allowed_values' => array(), 'allowed_values_function' => ''),
      'default_widget' => 'options_select',
      'default_formatter' => 'list_default',
    ),
  );
}

function example_field_settings_form($field, $instance, $has_data) {
  $settings = $field['settings'];

  $form['allowed_types'] = array(
    '' => '',

  );

  return $form;
}

function example_field_instance_settings_form() {

}

function example_field_is_empty($item, $field) {
  if (empty($item['value']) && (string) $item['value'] !== '0') {
    return TRUE;
  }
  return FALSE;
}

function example_field_formatter_info() {
  return array(
    'list_default' => array(
      'label' => t('Default'),
      'field types' => array('list_integer', 'list_float', 'list_text', 'list_boolean'),
    ),
  );
}
