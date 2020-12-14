<?php 
session_start();
include_once('../Model/M_Admin.php');
class Ctrl_Admin_Login{
    public function invoke(){
		$model_Admin= new Model_Admin();
		$IsLogginCompleted = $model_Admin->hasAdminWith($_GET["username"], $_GET["password"]);
		if($IsLogginCompleted  == true){
			$_SESSION["logged"] = true;
			header("Location:../Controller/C_Student.php");
		}
		else{
			$_SESSION["logged"] = false;
			header("Location:../View/FailLogin.php");
		}
	}
};
$Ctrl_Admin_Login= new Ctrl_Admin_Login();
$Ctrl_Admin_Login->invoke();
 ?>
