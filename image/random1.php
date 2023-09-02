<?php

require_once('../common/commoninclude.php');

use Ramsey\Uuid\Uuid;
use Valitron\Validator;






$red     = rand(0, 255);
$green = rand(0, 255);
$blue = rand(0, 255);
$sizeW =1024;
$sizeH = 1024;


//
//
//
$img = imagecreate($sizeW, $sizeH);

$col = imagecolorallocate($img, $red, $green, $blue);


//
//
//



header('Content-Type: image/png');
imagepng($img);