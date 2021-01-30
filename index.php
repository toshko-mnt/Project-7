<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Project 7</title>
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<header>
			<h1>Project 7 countAPI</h1>
		</header>
		<main>
			<form method="POST" action="">
				<label for="api">Enter API requests in the format: </br>/project/subproject/method</label>
				<input type="text" name="input_data" id="api" size="30" autofocus />
				<input type="submit" name="submit" value="Send" />
			</form>
			<?php
			include 'includes/chek_input.php';
			include 'includes/create_db.php';
			include 'includes/add_output.php';
			include 'includes/print_output.php';
			?>
		</main>
	</body>
</html>