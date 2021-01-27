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
		if(isset($_POST['submit'])){
			$input_data = $_POST['input_data'];
			if(!empty($input_data)){ 
				$_SESSION['data'][] = $input_data;
			}
			else{
				echo 'input data is empty';
			}
			if(isset($_SESSION['data'])){		
				$input_calls = [];
				for($i = 0; $i < count($_SESSION['data']); $i++){
					$row_sess = $_SESSION['data'][$i];
					$explode_row = explode('/' , $row_sess);
					$input_calls[$i] = [$explode_row[1],$explode_row[2],$explode_row[3]];
				}
				echo "<pre>";
				print_r($input_calls);
				echo "</pre>";
			}
		}
		?>
	</body>
</html>