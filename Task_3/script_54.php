<?php
$a=array(array("id"=>"101","name"=>"Krushi","age"=>"20"),array("id"=>"102","name"=>"Vishva","age"=>"21"),array("id"=>"103","name"=>"Shivi","age"=>"22"));
$student=array_column($a,"name");
print_r($student);
?>