<?php

// -----------------------------------------------------------------------------
// FALSE cases

// Empty string as FALSE.
$abc = '';
// Nothing
if ($abc) {
  dsm('hello');
}
// Work
$abc = '';
if (!$abc) {
  dsm('hello');
}
