<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
            margin: 0;
            padding: 0;
			background: linear-gradient(to right, #442244, #224466);
			font-family: "sans-serif";
		}
		#wrapper {
			background-color: #191919;
			width: 400px;
			height: 330px;
			margin-top: 120px;
			margin-left: auto;
			margin-right: auto;
			padding: 20px;
			border-radius: 4px;
		}
		input[type=text], input[type=password] {
			border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
            padding: 10px 10px;
            width: 250px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s
		}
		h1 {
			text-align: center;
			font-size: 40px;
			color: white;
            font-weight: bold;
		}
		button {
			border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 40px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer
		}
        button:hover{
            background: #2ecc71;
        }
		.error {
			background-color: #f72a68;
			width: 400px;
			height: auto;
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;
			padding: 20px;
			border-radius: 4px;
			color: #fff;
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<form action="login.php" method="POST">
			<h1>Login</h1>
			<input type="text" name="username" placeholder="Username" required="" autofocus="">
			<input type="password" name="password" placeholder="Password" required="" >
			<button type="submit">SIGN IN</button>
		</form>
	</div>
	
		<?php if(isset($_GET['pesan'])) { ?>
			<div class="error">
				<label><?php echo $_GET['pesan']; ?></label>
			</div>
		<?php } ?>
	

		
</body>
</html>