<?php
 $mymarks["year 1"] = 55;
 $mymarks["year 2"] = 65;
 $mymarks["year 3"] = 75;
?>

<html>
<head>
<h1>Logbook 2 Exercise 10</h1>
</head>
<body>
<table border=1 align="center">
<tr><th>Index</th><th>Year</th></tr> 
<?php
for($count = 0;$count < 3;$count++)
{
  echo "<tr><td>$count</td><td>$mymarks[$count]</td></tr>";
}

 foreach ( $mymarks as $key => $value )
 {
 echo "For " . $key . " my grade was " . $value . "<br/>";
 }
 echo "<br/> My best year was Year 3 when I averaged ". $mymarks["year 3"];
?>
</body>
</html>