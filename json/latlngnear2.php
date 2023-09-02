<?php

require_once('../common/commoninclude.php');

use Ramsey\Uuid\Uuid;
use Valitron\Validator;


class ResultJSON{

    public $locationlist;
}

class LocationInfo{
    public $locationID="";
    public $name="";
    public $latitude="";
    public $longitude="";
    public $latlng = "";

}



$validatorGet = new Valitron\Validator($_GET);

$validatorGet->rule('required', ['dataid']);
$validatorGet->rule('numeric', 'dataid');



if($validatorGet->validate()) {

} else {
    exit();
}


$dataID = (int)$_GET['dataid'];


$result = new ResultJSON();


//
//
//
$result->locationlist = [];

for($i=0;$i<10;$i++) {
    $locationInfo = new LocationInfo();
    srand($dataID+$i);
    $locationInfo->locationID = hash('sha1', $dataID+$i*100);
    $locationInfo->name = "place".substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 8);
    $locationInfo->latitude =35.7144229167+(0.000001* rand(-2000, 2000));
    $locationInfo->longitude =139.79591364+(0.000001* rand(1000, 2000));
    $locationInfo->latlng = $locationInfo->latitude . ",".$locationInfo->longitude;


    $result->locationlist[] = $locationInfo;
}
//
//
//

$json=json_encode($result,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);



header("Content-Type: application/json; charset=utf-8");
echo $json;