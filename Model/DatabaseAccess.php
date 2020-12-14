<?php
	
	function connect(){
		$connect = mysqli_connect('localhost','root','') or die("Kết nối không thành công".mysqli_connect_error());
		mysqli_select_db($connect,'kiemtra1');
		return $connect;
	}	
	
	function validateConnection(){
		if($_SESSION['enabled'] == true) return true;
		return false;
	}
	
	
	function isLoggedInAsAdmin(){
		if(isset($_SESSION['loggedInAs']) && $_SESSION["loggedInAs"] == 'admin'){
			return true;
		}
		return false;
	}

	
?>