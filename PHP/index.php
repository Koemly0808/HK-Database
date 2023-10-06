<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/style" href="../Css/login.css">
	<style>
		.body {
			background: #fefefe;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			flex-direction: column;
		}

		* {
			font-family: sans-serif;
			box-sizing: border-box;
		}

		form {
			width: 500px;
			border: 1px solid gray;
			padding: 40px;
			background: #fff;
			border-radius: 15px;
			align-items: center;


		}

		h2 {
			text-align: center;
			margin-bottom: 40px;
		}

		input {
			display: block;
			border: 1px solid #ccc;
			width: 95%;
			padding: 15px;
			margin: 10px auto;
			border-radius: 5px;
		}

		label {
			color: #010b20;
			font-size: 15px;
			padding: 10px;
		}

		button {
			float: right;
			background: #0f52e0;
			padding: 15px;
			color: #fff;
			border-radius: 5px;
			margin-right: 10px;
			border: none;
		}

		.button:hover {
			opacity: .7;
		}

		.error {
			background: #F2DEDE;
			color: #A94442;
			padding: 10px;
			width: 95%;
			border-radius: 5px;
			margin: 20px auto;
		}

		h1 {
			text-align: center;
			color: #fff;
		}

		a {
			float: right;
			background: #555;
			padding: 10px 15px;
			color: #fff;
			border-radius: 5px;
			margin-right: 10px;
			border: none;
			text-decoration: none;
		}

		a:hover {
			opacity: .7;
		}

		.form-center {
			display: flex;
			justify-content: center;
			margin-top: 100px;
		}
		.center{
			width:32%;
			height:30%;
			display: block;
			margin-left: auto;
			margin-right: auto;

   
		}
	</style>
</head>

<body>

	<div class="form-center">
		<form action="login.php" method="post">
			<img src="../images/HKCI Official Logo_PNG.png" class="center">
			<h2>HK Car Inspection(Cambodia)Co., Ltd</h2>
			<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>
			<label>User Name</label>
			<input type="text" name="username" placeholder="User Name"><br>

			<label>Password</label>
			<input type="password" name="password" placeholder="Password"><br>

			<button type="submit">Login</button>
		</form>
	</div>

</body>

</html>