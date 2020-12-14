<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<Form action = "../Controller/C_Update2.php" method="get">
	<table border = "0">
        <tr>Cập nhật thông tin sinh viên</tr>
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
			<td><input type = text name = "hoten" value ="<?php echo $hoten ?>"></td>
        </tr>
		<tr>
			<td>Giới Tính</td>
            <td> Nam: <input type="Radio" name = "gioitinh" value="nam"> Nữ:<input type="Radio" name = "gioitinh" value="nữ"> </p></td>
        </tr>
		<tr>
			<td>Khoa: <select name="khoa">
                <option value="CNTT" name = "CNTT">CNTT</option>
                <option value="Cơ Khí" name="Cơ Khí">Cơ Khí</option>
                <option value="Điện" name="Điện">Điện</option>
                <option value="Hoá" name="Hoá">Hoá</option>
                <option value="Xây Dựng" name="Xây dựng">Xây Dựng</option>
			</td>
        </tr>
        <tr>
            <td><input type = "submit" value = "Lưu lại"></td>
            <td><input type ="button" value= "Quay lại" onclick="history.back(-1)" /></td>
        </tr>
	</table>   
		 
</form>
</body>
</html>