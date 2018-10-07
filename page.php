<?php
  //echo "Siin on mine Esimine PHP";
  $name = "Tundamtu";
  $surname = "Inimine";
  $date = date("d.m.Y.");
  $hour = date("H.i");
  //echo $hour;
  $partOfDay = "";
  if ($hour < 8) {
	  $partOfDay = "varajane hommik";
  
  }
  if ($hour >= 8) {
	  $partOfDay = "kooliaeg";
  
  }
  if ($hour <=16) {
	  $partOfDay = "vabaaeg";
  
  }
?>
<?php
$name = "Tundamtu";
$surname = "Inimine";

if (isset($_POST["firstName"])){
	$name = $_POST("firstName"];
	}
if (isset($_POST["surName"])){
	$name = $_POST("surName"];
	}
?>


<!DOCTYPE html>
<html>

  <head>
    <meta charset='utf-8'>
    <title><?php
	         echo $name;
			 echo " ";
			 echo $surname;
			 ?>
			 , õppetöö</title>
  </head>
 
  <body>
  
    <h1>
	<?php echo $name ." " .$surname; ?>
	</h1>
  
	
	 <!-- Who is it? Input >-->
    <form method="POST"
	<label>Eesnimi:</label>
	<input name="firstName" type="text"
	<p></p>
	<label>Perekonnanimi:</label>
	<input name="surName" type="text"
	<br>
	<input name="submitUserData" type="submit" value="Saada andmed"
	</form>
	
	  <!-- Who is it? Input END >-->