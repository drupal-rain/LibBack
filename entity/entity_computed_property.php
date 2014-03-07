<?php

function miiniu_publisher_entity_property_info() {
  $info = array();
  $properties = &$info['node']['bundles']['publish']['properties'];

  $properties['publish_status'] = array(
      'label' => t('Publish status'),
      'description' => t('The processing status of this publication.'),
      'type' => 'text',
      'getter callback' => 'miiniu_publisher_publish_get_properties',
      // Indicates it's not schema field direct load
      'computed' => TRUE,
      // Ask it to expose as views field
      'entity views field' => TRUE,
  );

  return $info;
}
