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
				$unit_1 = [];
				$unit_2 = [];
				$unique_unit_1 = [];
				$unique_unit_2 = [];
				for($i = 0; $i < count($_SESSION['data']); $i++){
					$row_sess = $_SESSION['data'][$i];
					$explode_row = explode('/' , $row_sess);
					$input_calls[$i] = [$explode_row[1],$explode_row[2],$explode_row[3]];
					$unit_1[$i] = $explode_row[1];
					$unit_2[$i] = $explode_row[2];
					$unique_unit_1 = array_unique($unit_1);
					$unique_unit_2 = array_unique($unit_2);
				}
			}
		}
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
			echo "<pre>";
			print_r($unique_key2);
			echo "</pre>";
		}
		?>
	</body>
</html>