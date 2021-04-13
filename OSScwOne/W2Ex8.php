<html>
<head>
<h1>Logbook 2 Exercise 8</h1>
</head>
<body>
<?php 
 $topModules[0] = "Internet Systems Development";
 $topModules[1] = "Programming 1";
 $topModules[2] = "Programming 2";
 $topModules[3] = "OOAD";
 $topModules[4] = "Software Engineering";
 $topModules[5] = "Mobile Systems";
 $topModules[6] = "Games Development";

 for($count = 0; $count <= 6;$count++)
 {
   echo "$count module is $topModules[$count] <br/>";
 }

?>
</body>
</html>