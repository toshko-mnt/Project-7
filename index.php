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
		// SET SESSION	
		if(isset($_POST['submit'])){
			$input_data = $_POST['input_data'];
			if(!empty($input_data)){ 
				$_SESSION['data'][] = $input_data;
			}
			else{
				echo 'input data is empty';
			}
		}
		?>
	</body>
</html>