<?php
if(isset($output_calls)){
	echo '<div class="print"><h2>countAPI(calls):</h2>'; 
	echo '<ul>';
	foreach($output_calls as $element1 => $v1){
		echo '<li>--' . $element1 . ' (' . count($count_element1[$element1]) . ')</li>';
		foreach($v1 as $element2 => $v2){
			echo '<li>----' . $element2 . ' (' . count($count_element2[$element1][$element2]) . ')</li>';   
			foreach($v2 as $element3 => $v3){
				echo '<li>------' . $element3 . ' (' . count($count_element3[$element1][$element2][$element3]) . ')</li>';
			}
		}
	}
	echo '</ul></div>';
	?>
	<form action='' method='POST'>
		<input type="submit" name="clear" value="Clear API calls" />
	</form>
	<?php
}
if(isset($_POST['clear'])){
	session_destroy();
	header("Location: index.php");
}