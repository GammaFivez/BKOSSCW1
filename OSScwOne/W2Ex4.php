<html>
<head>
<h1>Logbook 2 Exercise 4</h1>
</head>
<body>
<! - - Speed camera advise script - ->

<?php 
  $points = 15;
  // Output appropriate message depending on points awarded.
  if ( $points >= 12) 
 {
    echo "Public transport is your best option. <br/>";
 }
 elseif ($points >= 9)
 {
    echo "If you get caught say your grandmother was driving. <br/>";
 }
 else 
 {
    echo "There is no need to worry about the speed limit.<br/>";
 } 
?>
</body>
</html>