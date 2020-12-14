<?php
include_once("E_Student.php");
include_once("DatabaseAccess.php");
class Model_Student{
	public $link;
    public function __construct(){
		$this->link = connect();
		if($this->link == null) echo "test";
	}
    public function getAllStudent(){
		$sql="SELECT * FROM student";
		$result= mysqli_query($this->link,$sql);
		$studentArray = array();
		while($row = mysqli_fetch_array($result))
		{
			$masv=$row["masv"];
			$hoten=$row["hoten"];
			$gioitinh=$row["gioitinh"];
			$khoa=$row["khoa"];
			array_push($studentArray, new Entity_Student($masv, $hoten, $gioitinh, $khoa)); 
			
		}
		return $studentArray;
	}
	public function getStudentDetail($masv){
        $allStudent=$this->getAllStudent();
        return $allStudent[$masv];
	}
	public function getStudentByKhoa($khoa){
		$SearchString ="%".$khoa."%";
		$sql = "SELECT * FROM student WHERE khoa LIKE '$SearchString'";
		
		$result = mysqli_query( $this->link, $sql); 
		$userArray = array();
			while($row = mysqli_fetch_array($result))
			 {
				$masv=$row["masv"];
				$hoten=$row["hoten"];
				$gioitinh=$row["gioitinh"];
				$khoa=$row["khoa"];
				  array_push($userArray, new Entity_Student($masv, $hoten, $gioitinh, $khoa)); 
			   }
			return $userArray;
	}
	
	public function insertStudentDetail($masv, $hoten, $gioitinh, $khoa){
        $query = "INSERT INTO student
        (masv, hoten, gioitinh, khoa) VALUES ('$masv', '$hoten', '$gioitinh', '$khoa')";
        mysqli_query( $this->link, $query);  
    
    }
	public function updateStudentDetail($masv, $hoten, $gioitinh, $khoa){
		$query = "UPDATE student
        SET 
		    hoten = '$hoten',
			gioitinh = '$gioitinh',
			khoa = '$khoa'
        WHERE masv = '$masv'";
		mysqli_query( $this->link, $query);  
    }
	
	public function deleteStudentWithId($masv){
		$query = "DELETE FROM student 
        WHERE masv = '$masv'";
		mysqli_query( $this->link, $query);   	
    }
	
 }

?>