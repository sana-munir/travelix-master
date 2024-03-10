<center>
<body>
<?php
  $ht1 = $_GET["ht"];
  $rm1 = $_GET["rm"];
$conn = mysqli_connect("localhost","root","","travelix");
//---
$q1 = "SELECT * FROM book1 WHERE hotel= '$em1' AND roomno=$rm1 ";
$result = mysqli_query($conn, $q1);
if(mysqli_num_rows($result)>0)
    echo "Room booked already <p style='color:red'> &#10060 </p> ";
?>
</center>