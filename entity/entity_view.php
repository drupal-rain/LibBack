<?php

// -----------------------------------------------------------------------------
// Hooks

// Prepare the renderable array to $entity->content;

hook_entity_view_mode_alter();

$function = $field['module'] . '_field_' . $op;
$function();

// @see field_attach_view().
hook_field_attach_view_alter(&$output, $context);

hook_entity_view();
hook_entity_view_alter();


//
$entity = entity_load_single('test_entity', 1);
dsm(entity_build_content('test_entity', $entity));
// EntityAPIController::buildContent()
