<html>
<head>
<h1>Logbook 2 Exercise 9</h1>
</head>
<body>
<?php 
 $topmodules[0] = "Internet Systems Development";
 $topmodules[5] = "Programming 1";
 $topmodules[10] = "Programming 2";
 $topmodules[30] = "OOAD";
 $topmodules[40] = "Software Engineering";

 foreach ( $topmodules as $key => $value ) {
    echo "Index is " . $key . " and value is " . $value . "<br/>";
}

?>
</body>
</html>