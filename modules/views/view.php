<?php

views_get_view($name, $reset = FALSE);

// Hooks

// @api http://drupal7.api/api/views/views.api.php/function/hook_views_post_execute/7.x-3.x
hook_views_post_execute(&$view);
