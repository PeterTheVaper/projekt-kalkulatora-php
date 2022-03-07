<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$x = $_REQUEST ['x'];    //waga
$y = $_REQUEST ['y'];
$operation = $_REQUEST ['op'];
$operation2= $_REQUEST ['op2'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($x) && isset($y) && isset($operation) && isset($operation2))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $x == "") {
	$messages [] = 'Nie podano Wagi nie wstydź się ';
}
if ( $y == "") {
	$messages [] = 'każdy jest niski nie przejmuj się :3';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na double
	$x = doubleval($x);
	$y = doubleval($y);

	//wykonanie operacji
	$result = ($x / ($y*$y))*10000;
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
// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';