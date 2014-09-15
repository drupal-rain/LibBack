<?php

// @link http://drupal7.api:8082/api/drupal/developer%21topics%21forms_api_reference.html/7.x#textfield

//textfield

//Description: Format a single-line text field.

//Properties: #access, #after_build, #ajax, #attributes, #autocomplete_path (default: FALSE), #default_value, #description, #disabled, #element_validate, #field_prefix, #field_suffix, #maxlength (default: 128), #parents, #post_render, #prefix, #pre_render, #process, #required, #size (default: 60), #states, #suffix, #text_format, #theme, #theme_wrappers, #title, #title_display, #tree, #type, #weight

//Usage example (forum.module):
$form['title'] = array(
  '#type' => 'textfield',
  '#title' => t('Subject'),
  '#default_value' => $node->title,
  '#size' => 60,
  '#maxlength' => 128,
  '#required' => TRUE,
);

