<?php

include __DIR__ . '/class/image.php';

$items = $image->photo_getAll();

include __DIR__ . '/views/index.php';

?>