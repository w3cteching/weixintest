<?php

$arr=array(
   array("name"=>"alice","age"=>20,"pubtime"=>"1478505946735"),
   array("name"=>"monkey","age"=>21,"pubtime"=>"1478505949700"),
   array("name"=>"heihei","age"=>22,"pubtime"=>"1478505950666"),
   array("name"=> "aaaa","age"=>23,"pubtime"=>"1478505951395"),
   array("name"=> "bbbaaa","age"=> 24,"pubtime"=>"1478505952139")
);

$json=json_encode($arr);

echo $json;

?>