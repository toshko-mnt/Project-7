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
			if(isset($_SESSION['data'])){
				$output_calls = [];
				for($i = 0; $i < count($_SESSION['data']); $i++){
					$row_sess = $_SESSION['data'][$i];
					$explode_row = explode('/' , $row_sess);
					$output_calls[$explode_row[1]][$explode_row[2]][$explode_row[3]] = $explode_row[3];
					$count_element1[$explode_row[1]][] = $explode_row[1];
					$count_element2[$explode_row[1]][$explode_row[2]][] = $explode_row[2];
					$count_element3[$explode_row[1]][$explode_row[2]][$explode_row[3]][] = $explode_row[3];
				}	
			}
			include 'includes/print_output.php';
			?>
		</main>
	</body>
</html>