<?php 
session_start();
include_once('../Model/M_Student.php');
class Ctrl_Insert{
	public function validateAsAdminAndInvoke(){
		if(isset($_SESSION["logged"]) && $_SESSION["logged"] == true){
			$this->invoke();
		}
		else{
			include_once('../View/Login.php');
		}
	}
    public function invoke(){
		if (isset($_GET["masv"])){
		
			$masv = $_GET["masv"];
			$hoten = $_GET["hoten"];
            $gioitinh = $_GET["gioitinh"];
            $khoa = $_GET["khoa"];
			$model= new Model_Student();
			$model->insertStudentDetail($masv, $hoten, $gioitinh, $khoa);
	
			header("Location:../Controller/C_Student.php");
			}	
		else{
			include_once('../Controller/C_Student.php');
		}
	 }
};
$C_Insert= new Ctrl_Insert();
$C_Insert->validateAsAdminAndInvoke();
 ?>