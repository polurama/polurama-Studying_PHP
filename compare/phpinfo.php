<?php

//phpinfo();

if (ZEND_THREAD_SAFE) {
    echo 'Thread safe', PHP_EOL;
} else {
    echo 'Not thread safe', PHP_EOL;
}
//echo serialize(ini_get_all());

$image = new Imagick();
$image->newImage(1, 1, new ImagickPixel('#ffffff'));
$image->setImageFormat('png');
$pngData = $image->getImagesBlob();
echo strpos($pngData, "\x89PNG\r\n\x1a\n") === 0 ? 'Ok' : 'Failed';