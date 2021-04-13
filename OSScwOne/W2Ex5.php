<html>
<head>
<h1>Logbook 2 Exercise 5</h1>
</head>
<body>
<?php 
 if (strpos($_SERVER["HTTP_USER_AGENT"], "MSIE") != false) 
 {
    echo "You are using Internet Explorer<br/>";
 }
 else
 {
    echo "Why are you not using Internet Explorer ?<br/>";
 }
 
?>
</body>
</html>