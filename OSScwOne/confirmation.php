<?php
   //echo "Your order qty is $_POST[hidqty]";
   $qty = (int)$_POST["hidqty"];
   $price = (int)$_POST["hidprice"];
   $total = $qty * $price;
   echo $price;
   echo "<h2> and the selected colour is $_POST[selcolour].</h2>"
?>
