<center>
<body>
<?php
  $em1 = $_GET["em"];
$conn = mysqli_connect("localhost","root","","travelix");
//---
$q1 = "SELECT * FROM login WHERE email= '$em1' ";
$result = mysqli_query($conn, $q1);
if(mysqli_num_rows($result)>0)
    echo "Email already exists <p style='color:red'> &#10060 </p> ";
else
    echo "Valid <p style='color:green'> &#10004 </p>";
?>
</center>