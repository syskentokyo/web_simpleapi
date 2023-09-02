<?php

require_once('../common/commoninclude.php');

use Ramsey\Uuid\Uuid;
use Valitron\Validator;


class ResultJSON{

    public $monsterlist;
}

class MonsterInfo{
    public $monsterID="";
    public $name="";

    public $hp=0;
    public $attack=0;
    public $defense=0;
    public $special1=0;
    public $special2=0;

    public $rare = 0;

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
$result->monsterlist = [];

for($i=0;$i<100;$i++) {
    $oneInfo = new MonsterInfo();
    srand($dataID+$i);
    $oneInfo->monsterID = $dataID+$i;
    $oneInfo->name = "".substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 8);
    $oneInfo->hp = rand(10, 255);
    $oneInfo->attack = rand(10, 255);
    $oneInfo->defense = rand(10, 255);
    $oneInfo->special1 = rand(10, 255);
    $oneInfo->special2 = rand(10, 255);
    $oneInfo->rare = rand(1, 6);



    $result->monsterlist[] = $oneInfo;
}
//
//
//

$json=json_encode($result,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);



header("Content-Type: application/json; charset=utf-8");
echo $json;