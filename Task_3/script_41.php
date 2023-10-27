<?php
$color1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$color2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_intersect($color1,$color2);
print_r($result);

?>