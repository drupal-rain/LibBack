<?php

// -----------------------------------------------------------------------------
// Hooks
// hook_element_info()
// hook_element_info_alter(&$types)

// -----------------------------------------------------------------------------
// Get element info
// element_info($type)

// Get all elements info
dsm(module_invoke_all('element_info'));

$element_info = array(
	'' => '',
  '' => '',
);
