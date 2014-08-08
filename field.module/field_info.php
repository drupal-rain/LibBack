<?php

// -----------------------------------------------------------------------------
// Utility
// Field Info API
// @see http://drupal7.api:8082/api/drupal/modules%21field%21field.info.inc/group/field_info/7.x

field_info_fields();

field_info_field($field_name);

field_info_instance($entity_type, $field_name, $bundle_name);

field_info_extra_fields($entity_type, $bundle, $context);


// -----------------------------------------------------------------------------
// Hook



