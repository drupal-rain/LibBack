<?php

// Q: Check if save() entity wrapper would change the entity data.
// A: Yes, the entity will be changed, the new one has the created id, it's a real entity.
$product = commerce_product_new('album');
dsm($product);
$product_wrapper = entity_metadata_wrapper('commerce_product', $product);
$product_wrapper->save();
dsm($product);
