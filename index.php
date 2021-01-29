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

		if(isset($input_calls)){
			$unique_key1 = [];
			foreach($input_calls as $value){
				foreach($unique_unit_1 as $value_unit_1){
					if($value[0] == $value_unit_1){
						$unique_key1[$value[0]][] = [$value[1],$value[2]];
					}
				}
			}
			$unique_key2 = [];
			foreach($unique_key1 as $key1 => $value1){
				foreach($value1 as $value2){
					foreach($unique_unit_2 as $value_unit_2){
						if($value2[0] == $value_unit_2){
							$unique_key2[$key1][$value2[0]][] = $value2[1];
						}
					}
				}
			}
			$unique_key3 = [];
			foreach($unique_key2 as $key2 => $value3){
				foreach($value3 as $key3 => $value4){
					foreach($value4 as $value5){
						$unique_key3[$key2][$key3][$value5] = $value5;
					}	
				}
			}
			$output_calls = [];
			$output_calls = $unique_key3;
			echo "<pre>";
			print_r($output_calls);
			echo "</pre>";
		}
		?>
	</body>
</html>