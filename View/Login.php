<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>
<form action="../Controller/C_Admin_Login.php" method="get">
			<table border = 0 >
				<caption> LOGIN </caption>
				<tr>
					<th>
						Username:
					</th>
					<th>
						<input type="text" name="username">
					</th>
				</tr>
				<tr>
					<th>
						Password:
					</th>
					<th>
						<input type="text" name="password">
					</th>
				</tr>
				<tr>
					<th>
					<button type="submit" class="btn-default" name="login">Đăng nhập</button>
                    </th>        
                    <th> <input type="button" value="Cancel"></th>
				</tr>
			</table>
		</form>
</body>
</html>
