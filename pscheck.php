<center>
<body>
<?php
  $ps1 = $_GET["ps"];
$conn = mysqli_connect("localhost","root","","travelix");
//---
$q1 = "SELECT * FROM login WHERE password= '$ps1' ";
$result = mysqli_query($conn, $q1);
if(mysqli_num_rows($result)>0)
    echo "Correct password <p style='color:green'> &#10004 </p> ";
else
    echo "Incorrect password <p style='color:red'> &#10060 </p>";
?>
</center>