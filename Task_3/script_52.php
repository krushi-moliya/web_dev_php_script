<?php
$student=array("name"=>"Krushi","age"=>"20","email"=>"krushi@gmail.com");
$clg=array("faculty"=>"CS&IT","department"=>"MCA","uni"=>"Atmiya");
$merge=array_merge($student,$clg);
print_r($merge);
?>