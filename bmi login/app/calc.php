<?php

require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';


$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
$operation = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;	
$operation2 = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;	

function validate(&$x,&$y,&$operation,&$operation2,&$messages){
	
	if ( ! (isset($x) && isset($y) && isset($operation) && isset($operation2))) {
		
		return false;
}}
	
if ( ! (isset($x) && isset($y) && isset($operation) && isset($operation2))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $x == "") {
	$messages [] = 'Nie podano Wagi nie wstydź się ';
}
if ( $y == "") {
	$messages [] = 'każdy jest niski nie przejmuj się :3';
}

if (empty( $messages )) {
	
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	

}


if (empty ( $messages )) { 
	

	$x = doubleval($x);
	$y = doubleval($y);

	
	$result = ($x / ($y*$y))*10000;
	function process(&$x,&$y,&$operation,&$operation2,&$messages,&$result,){
	global $role;
	if($role=='user')
		{$string ='bida ze nie admin';}
	}
		
	switch ($operation) {
		case 'Kobieta' :
			
			
			switch ($operation2) {
		case '19-24' :
		if($result <22.1)
			$string = 'niedowaga';
		if ($result >25)
			$string = 'nadwaga';
			else
			$string =	'BMI jest git';
		break;
		case '25-29' :
		if($result <22.0)
			$string = 'niedowaga';
		if($result >25.4)
			$string = 'nadwaga';
			else
			$string =	'BMI jest git';
		break;
		
		case '30-34' :
		if($result <22.7)
			$string = 'niedowaga';
		if ($result >26.4)
			$string = 'nadwaga';
			else
			$string =	'BMI jest git';
		break;
		
		case '35-39' :
		if($result <24.0)
			$string = 'niedowaga';
		if ($result >27.7)
			$string = 'nadwaga';
			else
			$string =	'BMI jest git';
		break;
		
		case '40-44' :
		if($result <25.6)
			$string = 'niedowaga';
		if ($result >29.3)
			$string = 'nadwaga';
			else
			$string =	'BMI jest git';
		break;
		
		case '45-49' :
		if($result <27.3)
			$string = 'niedowaga';
		if ($result >30.9)
			$string = 'nadwaga';
			else
			$string =	'BMI jest git';
		break;
		
		case '50-54' :
		if($result <29.7)
			$string = 'niedowaga';
		if ($result >33.1)
			$string = 'nadwaga';
			else
			$string =	'BMI jest git';
		break;
		
		case '55-59' :
		if($result <30.7)
			$string = 'niedowaga';
		if ($result >34)
			$string = 'nadwaga';
			else
			$string =	'BMI jest git';
		break;
		
		default: 'wiecej niż 60' ;
		if($result <31.0)
			$string = 'niedowaga';
		if ($result >34.4)
			$string = 'nadwaga';
			else
			$string =	'BMI jest git';
		break;
		
		
			
			}
			break;
			
			
			
			
			default : 'Mężczyzna' ;
			
			switch ($operation2) {
		case '19-24' :
		if($result <14.9)
			$string = 'niedowaga';
		if ($result >19)
			$string = 'nadwaga';
			else
			$string =	'BMI jest git';
		break;
		case '25-29' :
		if($result <16.5)
			$string = 'niedowaga';
		if ($result >20.3)
			$string = 'nadwaga';
			else
			$string =	'BMI jest git';
		break;
		
		case '30-34' :
		if($result <18.0)
			$string = 'niedowaga';
		if ($result >21.5)
			$string = 'nadwaga';
			else
			$string =	'BMI jest git';
		break;
		
		case '35-39' :
		if($result <19.4)
			$string = 'niedowaga';
		if ($result >22.6)
			$string = 'nadwaga';
			else
			$string =	'BMI jest git';
		break;
		
		case '40-44' :
		if($result <20.5)
			$string = 'niedowaga';
		if ($result >23.6)
			$string = 'nadwaga';
			else
			$string =	'BMI jest git';
		break;
		
		case '45-49' :
		if($result <21.5)
			$string = 'niedowaga';
		if ($result >24.5)
			$string = 'nadwaga';
			else
			$string =	'BMI jest git';
		break;
		
		case '50-54' :
		if($result <22.7)
			$string = 'niedowaga';
		if ($result >25.6)
			$string = 'nadwaga';
			else
			$string =	'BMI jest git';
		break;
		
		case '55-59' :
		if($result <23.2)
			$string = 'niedowaga';
		if ($result >26.2)
			$string = 'nadwaga';
			else
			$string =	'BMI jest git';
		break;
		
		default: 'wiecej niż 60' ;
		if($result <23.5)
			$string = 'niedowaga';
		if ($result >26.7)
			$string = 'nadwaga';
			else
			$string =	'BMI jest git';
		break;
		
			break;
			
	}
	
	
		}
	


}

include 'calc_view.php';