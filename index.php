<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Project 7</title>
	</head>
	<body>
		<form method="POST" action="">
			<p>input data</p>
			<input type="text" name="input_data" placeholder="/project/subproject/method"/>
			<input type="submit" name="submit" value="Send" />
		</form>
		<?php
		include 'includes/chek_input.php';
		include 'includes/create_db.php';
		include 'includes/add_output.php';

		?>
	</body>
</html>