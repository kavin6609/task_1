<?php

$connect=mysqli_connect("localhost","root","","new1");
if(!$connect)
{

    echo"<script>alert('not connected');location.href='#  ';</script>";
}

$id=$_GET['id'];
$sql="DELETE  FROM `registerp` WHERE id='$id'";
$row=$connect->query($sql);
if($row)
{
    echo"<script>alert('deleted');location.href='viewp.php';</script>";

}
else
{
    echo"<script>alert('not deleted');location.href='#';</script>";

}
?>