<?php
if(isset($_SESSION['data'])){		
	$input_calls = [];
	$unit_1 = [];
	$unit_2 = [];
	$unique_unit_1 = [];
	$unique_unit_2 = [];
	$count_session = count($_SESSION['data']);
	for($i = 0; $i < $count_session; $i++){
		$row_sess = $_SESSION['data'][$i];
		$explode_row = explode('/' , $row_sess);
		$unit_1[$i] = $explode_row[1];
		$unit_2[$i] = $explode_row[2];
		$unique_unit_1 = array_unique($unit_1);
		$unique_unit_2 = array_unique($unit_2);
		$input_calls[$i] = [$explode_row[1],$explode_row[2],$explode_row[3]];
	}
}