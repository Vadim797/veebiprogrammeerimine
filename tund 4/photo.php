
<?php
  $name = "Vadim";
  $surname = "Žigalin";
  $dirToRead = "../../pics/";
  //$allFiles = scandir($dirToRead);
  $allFiles = array_slice(scandir($dirToRead), 2);
  //var_dump($allFiles);
  
  
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<title>
	  <?php
	    echo $name;
		echo " ";
		echo $surname;
	  ?>
	, oppetoo</title>
  </head>
  <body>
    <h1>
	  <?php
	    echo $name ." " .$surname;
	  ?>
	</h1>
	<p>See leht on valminud <a href="http://www.tlu.ee" target="_blank">TLU</a> oppetoo raames ja ei oma mingisugust, motestatud voi muul moel vaartuslikku sisu.</p>
	
	<?php
	  for ($i = 0; $i < count($allFiles); $i ++){
	    echo '<img src="' .$dirToRead .$allFiles[$i] .'" alt="pilt"><br>';
	  }
	?>
	
  </body>
</html>