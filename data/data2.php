<?php

$arr=array(
   array("name"=>"alice222","age"=>20,"pubtime"=>"1478505946735"),
   array("name"=>"monkey333","age"=>31,"pubtime"=>"1478505949700"),
   array("name"=>"heihei444","age"=>22,"pubtime"=>"1478505950666"),
   array("name"=> "aaaa555","age"=>23,"pubtime"=>"1478505951395"),
   array("name"=> "bbbaaa666","age"=> 24,"pubtime"=>"1478505952139")
);

$json=json_encode($arr);

echo $json;

?>