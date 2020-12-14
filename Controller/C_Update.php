<?php 
session_start();
include_once('../Model/M_Student.php');
class Ctrl_Update{
	public function validateAsAdminAndInvoke(){
		if(isset($_SESSION["logged"]) && $_SESSION["logged"] == true){
			$this->invoke();
		}
		else{
			include_once('../View/Login.php');
		}
	}
     private function invoke(){
		if (isset($_GET["masv"])){
			$masv = $_GET["masv"];
			$hoten = $_GET["hoten"];
            $gioitinh = $_GET["gioitinh"];
            $khoa = $_GET["khoa"];

			$modelStudent= new Model_Student();
			
			include_once('../View/Update.php');
		}
	 }
};
$Ctrl_Update= new Ctrl_Update();
$Ctrl_Update->validateAsAdminAndInvoke();
 ?>
