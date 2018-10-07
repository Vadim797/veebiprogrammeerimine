<?php
  require("functions.php");
  $notice = null;
  
  if (isset($_POST["submitMessage"])){
	if ($_POST["message"] != "Kirjuta siia oma sonum ..." and !empty($_POST["message"])) {
	  $notice = "Sonum olemas!";
      $notice = saveAMsg($_POST["message"]);	  
	} else {
	  $notice = "Palun kirjutage sonum!";
	}
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<title>Sonumi lisamine</title>
  </head>
  <body>
    <h1>Sonumi lisamine</h1>
	<p>See leht on valminud <a href="http://www.tlu.ee" target="_blank">TLU</a> oppetoo raames ja ei oma mingisugust, motestatud voi muul moel vaartuslikku sisu.</p>
	<hr>
	
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	  <label>Sonum (max 256 marki):</label>
	  <br>
	  <textarea rows="4" cols="64" name="message">Kirjuta siia oma sonum ...</textarea>
	  <br>
	  <input name="submitMessage" type="submit" value="Salvesta sonum">
	</form>
	<br>
	<p>
	<?php
	  echo $notice;
	?>
    </p>
  </body>
</html>