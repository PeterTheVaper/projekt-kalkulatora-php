<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator BMI</title>

</head>

<body>
<div style="width:90%; margin: 2em auto;">
<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>
<div align='middle'>    

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post" style='padding-top: 420px';>
	<label for="id_x">Waga: </label>
	<input id="id_x" type="text" name="x" value="<?php print(isset($x)); ?>" /><br />
	<label for="id_op">Płeć: </label>
	<select name="op">
		<option value="Mężczyzna">Mężczyzna</option>
		<option value="Kobieta">Kobieta</option>
		</select><br />
		
	<label for="id_op2">Wiek: </label>
	<select name="op2">
		<option value="19-24">19-24</option>
		<option value="25-29">25-29</option>
		<option value="30-34">30-34</option>
		<option value="35-39">35-39</option>
		<option value="40-44">40-44</option>
		<option value="45-49">45-49</option>
		<option value="50-54">50-54</option>
		<option value="55-59">55-59</option>
		<option value="wiecej niż 60">wiecej niż 60</option>
		
		
	</select><br />
	<label for="id_y">Wzrost: </label>
	<input id="id_y" type="text" name="y" value="<?php print(isset($y)); ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.round($result,2) ." " .$string; ?>
</div>
<?php } ?>
</div>
</body>
</html>