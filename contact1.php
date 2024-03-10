<?php
  $t11 = $_POST["t1"];
  $t22 = $_POST["t2"];
  $t33 = $_POST["t3"];  
  $t44 = $_POST["t4"];  

$conn = mysqli_connect("localhost","root","","travelix");
 $q1 = "INSERT INTO contact VALUES('','$t11','$t22','$t33','$t44')";
 mysqli_query($conn,$q1);
 echo " Message sent successfully ...";
?>