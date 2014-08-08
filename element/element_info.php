<?php

// -----------------------------------------------------------------------------
// Hooks

// hook_element_info()
// hook_element_info_alter(&$types)

// -----------------------------------------------------------------------------
// Utility

// ----------------
// Get element info
// element_info($type)

// Get all elements info
dsm(module_invoke_all('element_info'));

// Get specific module defined elemenets
dsm(module_invoke('ModuleName', 'element_info'));
// system.module
dsm(module_invoke('system', 'element_info'));

$element_info = array(
	'' => '',
  '' => '',
);

// -----------------------------------------------------------------------------
// Modules


