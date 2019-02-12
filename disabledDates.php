<?php

	$dates = [
						'03-02-2019 08:00',
						'03-02-2019 09:00',
						'03-02-2019 10:00',
						'03-02-2019 11:00',
						'03-02-2019 13:00',
						'03-02-2019 14:00',
						'03-02-2019 15:00',
						'03-02-2019 16:00',
						'03-02-2019 17:00',
						'04-02-2019 08:00',
						'05-02-2019 08:00',
					];

	$arr = [];
	$disabledDates = [];

	foreach ($dates as $date => $value) {

		$day  = date("d-m-Y", strtotime($value));
		$hour = date("h:i", strtotime($value));

		if (!in_array($day, $arr)) {
			
			$arr[$day] .= $hour.",";
			array_fill_keys($arr, $day);

		}

	}

	foreach ($arr as $a => $value) {
		
		$hours[$a] = explode(',', $value);
		$count = count($hours[$a])-1;

		if ($count > 8) {
			array_push($disabledDates, $a);
		}
	}

	print_r(json_encode($disabledDates));

?>