<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<Form action = "../Controller/C_Delete2.php" method="get">
	<table border = "0">
        <tr>Xoá thông tin sinh viên</tr>
        <tr>
            <td>Sinh Viên</td>
			<td><?php echo $hoten ?></td>
        </tr>
        <tr>
            <td>Mã Sinh Viên</td>
			<td><input type = text name = "masv" readonly value ="<?php echo $masv ?>"></td>
        </tr>
        <tr>
            <td>Mã Sinh Viên</td>
			<td><input type = text name = "hoten" readonly value ="<?php echo $hoten ?>"></td>
        </tr>
		<tr>
			<td>Giới Tính</td>
            <td> Nam: <input type="Radio" name = "gioitinh" value="nam"> Nữ:<input type="Radio" name = "gioitinh" value="nữ"> </p></td>
        </tr>
		<tr>
            <td>Khoa: <select name="khoa" readonly>">
               <option ><?php echo $khoa ?></option>
			</td>
        </tr>
        <tr>
            <td><input type = "submit" value = "Xác nhận"></td>
            <td><input type ="button" value= "Quay lại" onclick="history.back(-1)" /></td>
        </tr>
	</table>   
		 
</form>
</body>
</html>