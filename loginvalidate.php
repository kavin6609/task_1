<?php

$connection = mysqli_connect('localhost','root','','new1');

if(!$connection)
{
    die("connection server failed: ".mysqli_connect_error());
}
else
{
echo "connected server successfully !!! <br>";
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    $username=$_POST['username'];
    $userpwd=$_POST['userpwd'];
    
    #$username = mysqli_real_escape_string($connection,$_POST['username']);
    #$userpwd = mysqli_real_escape_string($connection,$_POST['userpwd']); 
    
    $sql = "SELECT * FROM register WHERE username = '$username' and userpwd = '$userpwd'";
    $result = mysqli_query($connection,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    #$active = $row['active'];
    
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
if($count>0) 
{
     
    echo "<script>window.open('view.php','_self');</script>";
}
else
{
    echo "<script>alert('invalid username or password');location.href='index.php';</script>";
}
 

}

?>