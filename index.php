<?php

date_default_timezone_set("Europe/Amsterdam");
$hour = date("H:i");
  






if ($hour < 6) {
    $class = "nacht";
    $url = 'backgrounds/night.png';
  }
  if ($hour >= 6 && $hour < 12){
    $class = "morgen";
    $url = 'backgrounds/morning.png';
  }
  if ($hour >12 && $hour <19) {
    $class = "middag";
    $url = 'backgrounds/afternoon.png';
  }
  if ($hour >18 && $hour <25) {
    $class = "avond";
    $url = 'backgrounds/evening.png';

  }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="stylesheet-php.css">
    <title>het uur is <?= $hour?></title>

    <style type="text/css">
body
{
    background-image:url('<?php echo $url ?>');
}
</style>
</head>
<body class="<?=$class?>">
  <div></div>
  <?=$hour?>
<p id="text">Goede<?=$class?></p>
</div>




</body>
</html>