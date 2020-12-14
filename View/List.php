<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
       
    <?php
    echo  '<form action="../Controller/C_Search.php" method="get">';
    echo  '<table border="1">';
    echo  '<tr>';
    echo  '<strong align ="center">MÀN HÌNH LIỆT KÊ SINH VIÊN </strong>';
    echo  '</tr>';
    echo  '<tr>';
    echo' <td>Chọn khoa:
            <select name="select">
            <option value="CNTT" name="CNTT">CNTT</option>
            <option value="Cơ Khí" name="Cơ Khí">Cơ Khí</option>
            <option value="Điện" name="Điện">Điện</option>
            <option value="Hoá" name="Hoá">Hoá</option>
            <option value="Xây Dựng" name="Xây Dựng">Xây Dựng</option>
          
        </td>';
     echo  '<td>
         <button type="submit" value="Xem">Xem</button>
        </td>';
    echo  '<td>
    <button><a href="../View/Insert.php">Thêm mới</a></button>
        </td>';
    echo'</tr>';
     echo' <tr>
         <td>Mã SV</td>
         <td>Họ Tên</td>
         <td>Giới tính</td>
         <td>Khoa</td>
         <td>Cập nhật</td>
         <td>Xoá</td>
      </tr>';
      for( $i = 1; $i <= sizeof($result) ; $i++ ){
      
      echo'<tr>';
      echo '<td>'.$result[$i - 1]->masv.'</td>';
      echo '<td>'.$result[$i - 1]->hoten.'</td>';
      echo '<td>'.$result[$i - 1]->gioitinh.'</td>';
      echo '<td>'.$result[$i - 1]->khoa.'</td>';
      echo '<td><a href= "../Controller/C_Update.php?masv='.$result[$i - 1]->masv.'&hoten='.$result[$i - 1]->hoten.'&gioitinh='.$result[$i - 1]->gioitinh.'&khoa='.$result[$i - 1]->khoa.'">Update</a></td>';
      echo '<td><a href= "C_Delete.php?masv='.$result[$i - 1]->masv.'&hoten='.$result[$i - 1]->hoten.'&gioitinh='.$result[$i - 1]->gioitinh.'&khoa='.$result[$i - 1]->khoa.'">Delete</a></td>';
      echo '</tr>';
      }
    ?>
</body>
<script>
jQuery
</script>
</html>
</html>