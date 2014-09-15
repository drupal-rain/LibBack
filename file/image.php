<?php

// This will regenerate all of that image's styles.
// Can do it before node_save().
image_path_flush($node->field_image['und'][0]['uri']);
