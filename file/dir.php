<?php

//
DIRECTORY_SEPARATOR;

// Scan directory and save files.
$dir = 'C:\Users\Kolier\Desktop\Temp\dir';
$mask = '/[.]*/';
$files = file_scan_directory($dir, $mask);
foreach ($files as $file) {
  $file_obj = file_save($file);
  file_move($file_obj, 'public://' . $file->filename);
}

// =============================================================================
// file_scan_directory().

// @example ctools_passthrough().
