<?php

require_once('../common/commoninclude.php');

use Ramsey\Uuid\Uuid;

class ResultJSON{
    public $value1="";

}


$result = new ResultJSON();


//
//
//

$result->value1 =  Uuid::uuid4()->toString();

//
//
//

$json=json_encode($result,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);



header("Content-Type: application/json; charset=utf-8");
echo $json;