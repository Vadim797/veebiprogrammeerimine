<?php
  require("functions.php");
  $notice = readallmessages();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Anonuumsed sonumid</title>
</head>
<body>
  <h1>Sonumid</h1>
  <p>Siin on minu <a href="http://www.tlu.ee">TLU</a> oppetoo raames valminud veebilehed. Need ei oma mingit sugavat sisu ja nende kopeerimine ei oma motet.</p>
  <hr>
  
  <?php echo $notice; ?>

</body>
</html>
