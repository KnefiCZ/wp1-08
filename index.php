<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>kok</title>
  </head>
  <body>
<h1>Hra</h1>
<?php
    $Humanus = True ;
    $Instrument = True ;
    $Bestia = True ;
    $Cognitio = True ;
    $Aqua = True ;
    $Terra = True ;
?>
<?php
    if (($Humanus) && ($Instrument)) {
      echo "Fabrico - Aspect used for crafting";
    }

    elseif (($Bestia) && ($Cognitio)) {
      echo "Humanus - Aspect used for human experiments";
    }

    elseif (($Aqua) && ($Terra)) {
      echo "Victus - Aspect of life";
    }

    else {
      echo "None Aspect";
    }
 ?>

  </body>
</html>
