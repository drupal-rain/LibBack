<?php

// -----------------------------------------------------------------------------
// Class
// @see EntityMetadataWrapper
// @see EntityDrupalWrapper
// @see EntityListWrapper
// @see EntityStructureWrapper
// @see EntityValueWrapper
// @link http://drupalcontrib.org/api/drupal/contributions%21entity%21entity.api.php/function/implementations/hook_entity_property_info/7


// -----------------------------------------------------------------------------
// Info
// @see hook_entity_property_info().
// @link http://drupal7.api:8082/api/entity/entity.api.php/function/hook_entity_property_info/7.x-1.x


// -----------------------------------------------------------------------------
// Utility

//
$entity_property_info = entity_get_property_info($entity_type = NULL);
dsm($entity_property_info);

dsm(entity_get_property_info());

// -----------------------------------------------------------------------------
// Hook

hook_entity_property_info();
hook_entity_property_info_alter(&$info);






// -----------------------
// Test: 'getter callback'

// $info
$info = array(
	'computed' => TRUE,
  'getter callback' => '',
);

$entity_wrapper = entity_metadata_wrapper('test_entity', 1);
$entity_wrapper->field_test_ref_revert->value(); // This method calls will lead to call the 'getter callback'. 

// entity_property_verbatim_get($data, array $options, $name, $type, $info)
function entity_property_verbatim_get($data, array $options, $name, $type, $info) {
  dsm($data, 'data'); // entity object
  dsm($options, 'options');
  dsm($name, 'name'); // field name
  dsm($type, 'type'); // entity_type name
  dsm($info, 'info'); // property info
}


function entityreference_revert_entity_property_info_alter(&$info) {
  foreach ($info as $entity_type => $entity_property_info) {
    if (isset($entity_property_info['bundles'])) {
      foreach ($entity_property_info['bundles'] as $bundle => $bundle_property_info) {
        foreach ($bundle_property_info['properties'] as $field => $field_property_info) {
          if (!$field_property_info['field']) continue;
          $field_info = field_info_field($field);
          if ($field_info['type'] != 'entityreference') continue;
          // dsm($field_info);
          // Here, we know we could add the entityreference_revert property to the bundle.
          // @note This implementation may conflict with a same name field, should be clearly documented.
          // @todo Wrong, need to add to the referenced entity, not this entity.
          /*
          $info[$entity_type]['bundles'][$bundle]['properties'][$field . '_revert'] = array(
              'label' => t('Revert of @field', array('@field' => $field)),
              'descriptoin' => t('Reverted relationship of @field.', array('@field' => $field)),
              'type' => 'list',
              'computed' => TRUE,
              'getter callback' => 'entityreference_revert_entity_property_getter_callback',
          );
          */
        }
      }
    }
  }
}
