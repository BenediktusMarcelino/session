<!DOCTYPE html>

<head>
<title>Welcome Page</title>
Selamat Datang di Website kami
</head>
<body>
	<br>LOGIN PAGE<br>
	<?php echo form_open('User/login');?>
	<form action="" method="post">
	<input type="text" name="username"><br>
	<input type="password" name="password"><br>
	<button type="submit" name="login">LOGIN</button>
	<br></form>

    <?php echo form_open('User/register');?>
	<form action="" method="post">
	<button type="submit" name="register">Register</button>
	<br></form>

</body>
</html>