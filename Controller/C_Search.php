<?php 
session_start();
include_once('../Model/M_Student.php');
class Ctrl_Search{
	public function validateAsAdminAndInvoke(){
		if(isset($_SESSION["logged"]) && $_SESSION["logged"] == true){
			$this->invoke();
		}
		else{
			include_once('../View/Login.php');
		}
	}
    private function invoke(){
			$model= new Model_Student();
			$result = $model->getStudentByKhoa($_GET["select"]);
			include_once('../View/List.php');
	}
};

$C_Search= new Ctrl_Search();
$C_Search->validateAsAdminAndInvoke();
 ?>