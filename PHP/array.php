<?php

function array_unshift_assoc(&$arr, $key, $val) {
  $arr = array_reverse($arr, true);
  $arr[$key] = $val;
  return array_reverse($arr, true);
}

// -----------------------------------------------------------------------------
// Get first item key

$arr = array(
	'a' => 'abc',
  'b' => 'def',
);

reset($arr);
$key = key($arr);

