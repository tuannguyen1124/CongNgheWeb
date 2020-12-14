<?php
include_once("DatabaseAccess.php");
class Model_Admin{
	public $link;
    public function __construct(){
		$this->link = connect();
		if($this->link == null) echo "test";
	}
    public function hasAdminWith($username, $password){
		$sql="SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
		$result=mysqli_query($this->link,$sql);
		
		$num = mysqli_num_rows($result);
		if($num == 0)
			return false;
		else{
			return true;
		}
	}
 }
?>