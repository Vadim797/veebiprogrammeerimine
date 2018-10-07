<?php
  //echo "Siin on mine Esimine PHP";
  $name = "Tundamtu";
  $surname = "Inimine";
  $date = date("d.m.Y.");
  $hour = date("H.i");
  //küsida mis asi see on
  $dirToRead = ".../.../.../~rinde/veebiprogrammeerimine2018s/";
  $allFiles = scandir ($dirToRead);
  var_dump($allFiles);
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
  
      <!-- Põhiosa >-->
  
    <p>Siin on minu <a href="http://www.tlu.ee">TLÜ</a> õppetöö raames valminud veebilehed.</p>
    <p><img src="pix/tlu_terra_600x400_1" alt=<"TLÜ Terra hoone"/p>
	<p>Mul on sõber, kes ka teeb <a href="http://greeny.cs.tlu.ee/~jevgpro/veebiprogram/">veebi</a>.
    <p><a href="Kodutöö%231.html">1. Esimene kodutöö</a></p>
	
	<!-- Põhiosa END >-->
	
	  <!-- Set part of the day >-->
	
	<?php 
    $partOfDay = ""; 
    if ($hour < 8) { 
    $partOfDay = "varajane hommik"; 
    } 
    if ($hour >= 8) { 
    $partOfDay = "kooliaeg"; 
    } 
    if ($hour >= 16) { 
    $partOfDay = "vaba aeg"; 
    } 
    ?>
	
	<?php $weekDayNow = date ("N");
	//here we set the write day (for example 1 = monday etc)
	$weekDayNamesET = ["esmaspäev", "teisipäev", "kolmapäev", "neljapäaev", "reede", "laupäev", "puhapäev"];
	var_dump ($weekDayNamesET);
	echo $weekDayNamesET[0];
	?>
	
	
	<!-- Set part of the day END >-->
	
	  <!-- Kellaeg and the day >-->
	
    <?php echo "<i><p>Tänane kuupäev on: " .$date ."</p></i>"; ?>
    <?php echo "<i><p>Kellaeg on: " .$hour ."</p></i>"; ?>
	<?php echo "<i><p>Käes on " .$partOfDay ." ja"." ".$weekDayNamesET [$weekDayNow -1]."."."</p></i>"; ?>
	
	  <!-- Kellaeg and the day END >-->
	
	  <!-- Random pilt >-->

    <?php $picNum = mt_rand(2, 43);
	$picURL = "http://www.cs.tlu.ee/~rinde/media/fotod/TLU_600x400/tlu_";
	$picEXT = ".jpg";
	$picFileName = $picURL .$picNum .$picEXT;
	?>
	<img src="<?php echo $picFileName; ?>" alt="juhuslik pilt TLÜ-st">
	
	  <!-- Random pilt END >-->
	  
	  <!-- Picture from new folder (pix) !!!ei tööta!!! >-->>
	  
	 <?php
	 for ($i = 0; s < count ($allfiles); $i ++){
	 echo '<img src="' .$dirToRead .$allFiles[1] .'" alt="pilt"><br>';
	 }
	 ?>
	  
	  <!-- Picture from new folder (pix) >-->>
	 
	  
	
  </body>
  
</html>