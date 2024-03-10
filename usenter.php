<center>
<body>
<?php
 $us1 = $_GET["us"];
 $ps1 = $_GET["ps"]; 
$conn = mysqli_connect("localhost","root","","travelix");
//---
$q1 = "SELECT * FROM login WHERE username='$us1'";
$result = mysqli_query($conn, $q1);
if(mysqli_num_rows($result)>0){ 
 echo " Already exists ...";
}
else{
 $q2 = "INSERT INTO student VALUES($rn1,'$nm1',$mr1)";
 mysqli_query($conn,$q2);
 echo "Record Inserted Successfully ...";
}
?>
</center>