<?php
     $lottodate = date("Ymd");
     echo "The lottery numbers for $lottodate are ";
     for($n=1;$n<7;$n++){
        $number[$n] = rand(1,49);
        echo "<br/> $number[$n]";
     }

     $sql = "INSERT INTO lotto (lottodate,number1,number2,";
     $sql = $sql . "number3,number4,number5,number6)";
     $sql = $sql . " values ($lottodate,$number[1],$number[2],";
     $sql = $sql . "$number[3],$number[4],$number[5],$number[6]);";

     $servername = "127.0.0.1";
     $username = "root";
     $password = "";
     $dbname = "db3";

     $conn = mysqli_connect($servername, $username, $password, $dbname);

     if(!$conn){
         die("Connection failed: " . mysqli_connect_error());
     }	
 
     if($conn->query($sql) === TRUE){
         echo "New record created succesfully <br/>";
     }
     else{
         echo "Error: " . $sql . "<br>" . $conn->error;
     }
 
     $sql = "SELECT * from lotto";

     $result = mysqli_query($sql);
     echo "<br/>This weeks numbers have been saved";
?>
