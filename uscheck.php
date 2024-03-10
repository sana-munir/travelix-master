<center>
<body>
<?php
  $us1 = $_GET["us"];
$conn = mysqli_connect("localhost","root","","travelix");
//---
$q1 = "SELECT * FROM login WHERE username= '$us1' ";
$result = mysqli_query($conn, $q1);
if(mysqli_num_rows($result)>0)
    echo "Username Exists <p style='color:green'> &#10004 </p> ";
else
    echo "Doesn't Exists <p style='color:red'> &#10060 </p>";
?>
</center>