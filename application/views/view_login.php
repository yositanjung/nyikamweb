<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<form action="<?php echo base_url('login/aksi_login'); ?>" method="post"><!--diarahkan ke controller login function aksi_login-->		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname_admin"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>