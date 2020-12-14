<?php 
include_once('../Model/M_Student.php');
class Ctrl_Student{
	
     public function invoke(){
	    $modelStudent = new Model_Student();
		$result = $modelStudent->getAllStudent();
		include_once('../View/List.php');
	 }
};
$C_Student= new Ctrl_Student();
$C_Student->invoke();
 ?>