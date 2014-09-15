<?php

$filename = 'image.txt';
$image = file_get_contents('http://www.ibiblio.org/wm/paint/auth/gogh/gogh.white-house.jpg');
$file = file_save_data($image, 'public://' . $filename, FILE_EXISTS_RENAME);
$node->field_image = array(LANGUAGE_NONE => array('0' => (array)$file));
