<?php

// @see hook_views_data().
// @link http://drupal7.api:8082/api/views/views.api.php/group/views_handlers/7.x-3.x


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
