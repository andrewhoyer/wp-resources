function function_season( $atts ) {
	$a = shortcode_atts( array(
		'case' => 'title'
	), $atts );

	$month = date('m');
	$season = '';
	
	// Adjust the month numbers to match the seasons in your region.
	// January is 1, December is 12

	switch ($month) {
		case 11:
		case 12:
		case 1:
			$season = "winter";
			break;
		case 2:
		case 3:
		case 4:
			$season = "spring";
			break;
		case 5:
		case 6:
		case 7:
			$season = "summer";
			break;
		case 8:
		case 9:
		case 10:
			$season = "fall";
			break;	        	
	}

	// Adjust text for Title or UPPER case, otherwise default to lower case.

	if ($a['case'] == 'title') {
		$season = ucwords($season);
	} else if ($a['case'] == 'upper') {
		$season = strtoupper($season);	
	}

	return $season;    

}
add_shortcode( 'season', 'function_season' );

