<html>
<?php
$con=mysqli_connect("localhost","root","","whatever");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO table1 (email,username,password,age)
VALUE
(some,'$_POST[username]','$_POST[password]','$_POST[age]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo " Holla ! welcome to the STS !! ";

mysqli_close($con);
?> 
<body bgcolor="firebrick">
<img src="youarein.png" width="142" height="142" style="float:middle">
<div id="1" style= "position:absolute; top: 460px; left: 60px;">
GO and Experience STS WORLD !!
<a href="stsnew.php"> <h1>EXPLORE</h1></a>
</div> 
</body>
</html>

