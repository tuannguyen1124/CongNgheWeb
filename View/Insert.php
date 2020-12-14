<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <div>
        <table align="center">
        <form action="../Controller/C_Insert.php" method="get">
                <tr height="40px">
                    <td colspan="2">
                        <center>
                            <strong>THÊM MỚI SINH VIÊN </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Mã Sinh Viên:<input type="text" name="masv" id="masv" value=""> </td>
                   
                </tr>
                <tr height="30px">
                    <td>Họ Tên: &emsp;&emsp;&nbsp;<input type="text" name="hoten" id="hoten" value=""></td>
                </tr>


                <tr height="30px">
                     <td> Nam: <input type="Radio" name = "gioitinh" value="nam"> Nữ:<input type="Radio" name = "gioitinh" value="nữ"> </p></td>
                </tr>
                <tr height="30px">
                    <td>Khoa: &emsp;&emsp;&nbsp;   <select name="khoa">
                        <option value="CNTT" name = "CNTT">CNTT</option>
                        <option value="Cơ Khí" name="2">Cơ Khí</option>
                        <option value="Điện" name="3">Điện</option>
                        <option value="Hoá" name="3">Hoá</option>
                        <option value="Xây Dựng" name="4">Xây Dựng</option></td>
                </tr>
                <tr height="30px">
                    <td colspan="2"> <center> <input type="Submit" value="Thêm mới"> &emsp; <input type ="button" value= "Quay lại" onclick="history.back(-1)" /> </center>  </td>
                </tr>
            </form>
        </table>
    </div>
</body>

</html>
</html>