<?php

require_once('../common/commoninclude.php');

use Ramsey\Uuid\Uuid;
use Valitron\Validator;





$validatorGet = new Valitron\Validator($_GET);

$validatorGet->rule('required', ['red','green','blue','sizeW','sizeH']);
$validatorGet->rule('numeric', 'red');
$validatorGet->rule('numeric', 'green');
$validatorGet->rule('numeric', 'blue');
$validatorGet->rule('numeric', 'sizeW');
$validatorGet->rule('numeric', 'sizeH');


if($validatorGet->validate()) {

} else {
    exit();
}


$red     = (int)$_GET['red'];
$green = (int)$_GET['green'];
$blue = (int)$_GET['blue'];
$sizeW = (int)$_GET['sizeW'];
$sizeH = (int)$_GET['sizeH'];


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