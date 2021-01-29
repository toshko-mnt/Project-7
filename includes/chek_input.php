<?php
$chek_input = 'chek is not valid';
if(isset($_POST['submit'])){
	$input_data = $_POST['input_data'];
	if(preg_match('/^[a-z0-9\/]+$/',$input_data)) {
		if(strlen($input_data) >= 6 && strlen($input_data) <= 50){
			$chek_input = 'chek is valid';
		}else{
			echo '<p class="error">6 <= input calls length <= 50 </p>';
		}
	}else{
		echo '<p class="error">Invalid data</p>';
	}
}
if($chek_input == 'chek is valid'){
	if(!isset($_SESSION['data'])){
		$_SESSION['data'][0] = $input_data;
	}else{
		$count_session = count($_SESSION['data']);
		if($count_session >= 1 && $count_session <= 100 ){
			$_SESSION['data'][] = $input_data;
			
		}else{
			echo '<p class="error">Maximum input calls</p>';
		}	
	}
}		