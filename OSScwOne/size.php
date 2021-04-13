<html>
 <head>
  <title>Size Page</title>
 </head>
 <body>
  <form  action="selectcolour.php" method="post">
   Select the size of the you require <?php echo $_POST["selqty"]?> widgets you are ordering
   <select name="wdsize">
		<option>15.75</option>
		<option>18</option>
		<option>20</option>
		<option>22</option>
		<option>25</option>
   </select>
   <br/><br/>	
   <input type="submit" value="Buy"/>
   <input type="hidden" name="hidqty" value="<?php echo $_POST["selqty"] ?>"/> 
  </form>
 </body>
</html>
