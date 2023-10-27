<?php
$student=array("name"=>"Krushi","age"=>"20","email"=>"krushi@gmail.com");
$first=array_key_first($student);
print_r($first);
echo "<br>";
$last=array_key_last($student);
print_r($last);
?>