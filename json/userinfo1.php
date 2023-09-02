<?php

require_once('../common/commoninclude.php');

use Ramsey\Uuid\Uuid;
use Valitron\Validator;


class ResultJSON{

    public $userID="";
    public $fullname="";
    public $username="";
    public $email="";

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
srand($dataID);

$result->userID =  hash('sha1', $dataID);
$result->fullname =  substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 8);
$result->username = "user".substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 8);
$result->email =  hash('md5', $dataID)."@example.com";

//
//
//

$json=json_encode($result,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);



header("Content-Type: application/json; charset=utf-8");
echo $json;