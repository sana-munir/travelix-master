<center>
<body>
<?php  
$us1 = $_POST["t1"];
$ps1 = $_POST["t2"];
$conn = mysqli_connect("localhost","root","","travelix");
//---
$q1 = "SELECT * FROM login WHERE username= '$us1' && password='$ps1' ";
$result = mysqli_query($conn, $q1);
if(mysqli_num_rows($result)>0)
{
    header("Location: index.html");
    exit();
}
else
{
    echo '<script type="text/javascript"> alert("Invalid Username or Password...");
</script>';
}
?>
</center>