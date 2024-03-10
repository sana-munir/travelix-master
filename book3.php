<?php
    $t11 = $_POST["t1"];
    $t22 = $_POST["t2"];
    $t33 = $_POST["t3"]; 
    $t44 = $_POST["t4"];  
    $t55 = $_POST["t5"]; 
    $t66 = $_POST["t6"]; 
    $t77 = $_POST["t7"]; 
    $t88 = $_POST["t8"];
    $t99 = $_POST["t9"];  
   $conn = mysqli_connect("localhost","root","","travelix");
   $q1 = "SELECT * FROM book3 WHERE roomno=$t88";
   $result = mysqli_query($conn, $q1);
   if(mysqli_num_rows($result)>0)
    echo "Already booked";
   else{
    $q1 = "INSERT INTO book3 VALUES('$t11','$t22','$t33','$t44',$t55,$t66,'$t77',$t88,'$t99')";
    mysqli_query($conn,$q1);
    echo "Room booked successfully ...";
   }
?>