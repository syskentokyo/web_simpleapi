<?php

require_once('../common/commoninclude.php');

use Ramsey\Uuid\Uuid;

class ResultJSON{
    public $value1="";
    public $value2="";
    public $value3="";

}


$result = new ResultJSON();


//
//
//

$result->value1 =  hash('md5', Uuid::uuid4()->toString());
$result->value2 =  hash('sha1', Uuid::uuid4()->toString());
$result->value3 =  hash('sha3-512', Uuid::uuid4()->toString());

//
//
//

$json=json_encode($result,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);



header("Content-Type: application/json; charset=utf-8");
echo $json;