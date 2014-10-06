<?php

// @doc http://drupal.stackexchange.com/questions/20192/how-do-i-render-a-field-value-including-its-format

// @api http://drupal7.api/api/drupal/modules%21field%21field.module/function/field_view_field/7.x
// @api http://drupal7.api/api/drupal/modules%21field%21field.module/function/field_view_value/7.x

// Full wrapper markup
field_view_field($entity_type, $entity, $field_name, $display = array(), $langcode = NULL);

// No wrapper markup
field_view_value($entity_type, $entity, $field_name, $item, $display = array(), $langcode = NULL);

// Template
// <?php print render($field); ?>