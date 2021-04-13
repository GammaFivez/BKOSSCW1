<?php
checkGender();
  if ($_POST["txtage"] < 21) 
  {
	echo "You are under 21 years old<br/>";
  }
  else
  {
	echo "You are  21 years old or over<br/>";
  }

  function checkGender(){
    if($_POST["txtgend"] == "male"){
      echo "You are a male<br/>";
    }
    elseif($_POST["txtgend"] == "female"){
      echo "You are a female<br/>";
    }
  }
?>
