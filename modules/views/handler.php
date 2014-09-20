<?php

// @see hook_views_data().
// @link http://drupal7.api/api/views/views.api.php/group/views_handlers/7.x-3.x


// Define Data
hook_views_data();
hook_views_data_alter(&$data);

hook_field_views_data($field);
hook_field_views_data_alter(&$result, $field, $module);
hook_field_views_data_views_data_alter(&$data, $field);


// Get Data Definition
views_fetch_data($table = NULL, $move = TRUE, $reset = FALSE);

_views_fetch_data($table = NULL, $move = TRUE, $reset = FALSE);
_views_fetch_data_build();

// -----------------------------------------------------------------------------
// Utility

// @trace
//   hook_views_data().
//   _views_fetch_data_build().
//   _views_fetch_data().
//   views_fetch_data().

//$data = views_fetch_data($table = NULL, $move = TRUE, $reset = FALSE);
$data = views_fetch_data();
dsm($data);
