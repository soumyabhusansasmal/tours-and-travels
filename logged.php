
<html>
<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username&&$password) 
{


$connect = mysql_connect("localhost","root","") or die("couldn't connect!");
mysql_select_db("sts") or die ("couldn't find DB");

$query = mysql_query("SELECT * FROM customers WHERE username='$username'");

$numrow = mysql_num_rows ($query);

if ($numrow!=0)
{

    while ($row = mysql_fetch_assoc($query))
    {
        $dbusername = $row['username'];
        $dbpassword = $row['password'];
    }
    
    //check to see if they match
    if ($username==$dbusername&&$password==$dbpassword)
    {
        echo "You are logged in";
    }
    else
        echo "Incorrect Password";
        
}
else
    die("That user doesn't exist");


}
else
    die("please enter a username and password");

?>  
</html>

