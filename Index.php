<?php
	function math($number1, $number2, $type){
		if ($type == "plus"){
			return ($number1+$number2);
		}

		elseif ($type == "minus"){
			return ($number1-$number2);
		}

		elseif ($type == "divide"){
			return ($number1/$number2);
		}

		elseif ($type == "multiply"){
			return ($number1*$number2);
		}
		else{
			return null;
		}
	}
	$mathtool = math(7,3,"minus");
 		if ($mathtool != null){
 			echo $mathtool;
 		}
 	}
?>