<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/login.css">
</head>

<body>

	<div id="login">

		<h2>RMS</h2>

		<form action="<?php echo site_url('login/check')?>" method="POST">
			<fieldset>
				<p><label for="email">账号</label></p>
				<p><input type="email" name="username" value=""></p>
				<p><label for="password">密码</label></p>
				<p><input type="password" name="pwd" value=""></p>
				<p><input type="submit" value="登陆"></p>

			</fieldset>
		</form>
	</div> <!-- end login -->

</body>	
</html>