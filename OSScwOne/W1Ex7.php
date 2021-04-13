<html>
<head>
<h1>Logbook 1 Exercise 7</h1>
</head>
<body>
 <?php
  $hourlyrate	= 5.75;
  $hoursperweek = 40;
  $gross = $hourlyrate * $hoursperweek;
  $netgross = $gross * 52;
  $tax = $netgross * 0.22;
  $netgrossaftertax = $netgross - $tax;
  echo $netgrossaftertax;
 ?>
</body>
</html>