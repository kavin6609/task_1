<?php

$connection=(mysqli_connect('localhost','root','','new1'));

if(!$connection)
{
    echo "connection not success";
}
else
{
    echo "connection success";
}

if(isset($_POST['insert']))
{
    $username =$_POST['username'];
    $userpwd =$_POST['userpwd'];
    $usercpwd =$_POST['usercpwd'];
    $useremail =$_POST['useremail'];
   
    if(empty($username) || empty($userpwd) || empty($usercpwd) || empty($useremail))
    {
        echo "fill all the field";
    }
    elseif($userpwd!=$usercpwd)
   {
    echo "<script>alert('passs not match');location.href='register.php';</script>";
    }
    else
    {
        #echo "all filed <br>";
    

    #$userpwd =md5($usercpwd);
    

    $sql= "INSERT INTO register(username,userpwd,useremail) VALUES ('$username','$userpwd','$useremail')";
    if(!mysqli_query($connection,$sql))
    {
        echo "<script>alert('not success');location.href='login.php';</script>";
    }
    else
    {
        echo "<script>alert('success');location.href='index.php';</script>";
    }
}
}




?>