<?php 

	$arr = [
		"2019-03-03 08:00",
		"2019-03-03 09:00",
		"2019-03-03 10:00",
		"2019-03-03 11:00",
		"2019-03-03 13:00",
		"2019-03-03 14:00",
		"2019-03-03 15:00",
		"2019-03-03 16:00",
		"2019-03-03 17:00",
		"2019-03-04 08:00"
	];

	$date = '';
	$count = 0;
	$disabledDates = [];

	foreach ($arr as $a => $value) {
		$dateFormat = date("d-m-Y", strtotime($value));

		if ($date != $dateFormat) {
			$date = $dateFormat;
		}else{
			$date = $date;
			$count++;
			if ($count >= 8) {
				array_push($disabledDates, $date);
			}
		}

	}
	
	printPre(getEnabledHours());

	function getEnabledHours(){
		$enabledHours = [ "08:00", "09:00",	"10:00", "11:00", "13:00", "14:00",	"15:00", "16:00", "17:00" ];
		$bookedHours = ["08:00"];

		$result = array_diff($enabledHours, $bookedHours);

		return $result;
	}


	function printPre($arr){
		echo "<pre>";
		var_dump($arr);
		echo "</pre>";
	}

?>
