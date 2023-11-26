<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style type='text/css'>
.container
{
    width:100%;
    height:100%;
}
.navbar-nav
{
padding-left:345px;
}
.nav-item 
{
    padding-left:60px;
    padding-right:30px;
} 
.nav-link
{
    font-size:20px;
    font-weight:400;
    color:black;
    font-family:'Times New Roman', Times, serif;
}
.nav-link:hover
{
    color:violet;
}
@media(max-width:600px)
{
.navbar-nav
{
    padding-left:0px;
}
.nav-item 
{
    padding-left:10px;
    padding-right:30px;
} 
.collapse
{
    width: 0px;
  height: 200px;
  border: 1px dotted black;
  overflow: scroll;
 
}    
}
.dropdown-menu
{
    display:none;
    position:absolute;
}
.nav-item:hover .dropdown-menu
{
    display:block;
}
.dropdown-item
{
    font-size:13px;
    font-weight:400;
    font-family: 'Times New Roman', Times, serif;
    padding-left:10px;
}
.dropdown-item:hover
{
    color:violet;
}
.footer-box
{
    margin-top:200px;
    padding:100px;
    background:black;
}
.footer-bottom
{
 background:blue;
 text-align:center;
 padding:20px;
 color:violet;
}
.register{
    text-align:center;
    padding-right:400px;
}
#leftpane
{
width:100%;
height:50%;
overflow:hidden;
background-color:green;
float:left;
}
#login
{
  padding-bottom:200px;
  text-align:center;
  padding-left:30%;
}
.insert
{
    width:100px;
    height:50px;
    border-radius:50px ;
    border:none;
    box-shadow: 0 9px #999;
    background-color:lightgreen;
    font-size:20px;
    cursor:pointer;
}
.insert:hover
{
    background-color:darkgreen;
}
.insert:active 
{
  background-color: #3e8e41;
  transform: translateY(4px);
}

</style>
<script>
var stateObject = {
"India": { "Delhi": ["new Delhi", "North Delhi"],
"Kerala": ["Thiruvananthapuram", "Palakkad"],
"Goa": ["North Goa", "South Goa"],
},
"Australia": {
"South Australia": ["Dunstan", "Mitchell"],
"Victoria": ["Altona", "Euroa"]
}, "Canada": {
"Alberta": ["Acadia", "Bighorn"],
"Columbia": ["Washington", ""]
},
}
window.onload = function () {
var countySel = document.getElementById("countySel"),
stateSel = document.getElementById("stateSel"),
districtSel = document.getElementById("districtSel");
for (var country in stateObject) {
countySel.options[countySel.options.length] = new Option(country, country);
}
countySel.onchange = function () {
stateSel.length = 1; // remove all options bar first
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done 
for (var state in stateObject[this.value]) {
stateSel.options[stateSel.options.length] = new Option(state, state);
}
}
countySel.onchange(); // reset in case page is reloaded
stateSel.onchange = function () {
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done 
var district = stateObject[countySel.value][this.value];
for (var i = 0; i < district.length; i++) {
districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
}
}
}
</script>

<script>
function FindAge()
{
  var day= document.getElementById("dob").value;
  var DOB = new Date(day);
  var today = new Date();
  var Age = today.getTime() - DOB.getTime();
  Age = Math.floor(Age/(1000*60*60*24*365.25));
  document.getElementById("age").value = Age;
}

</script>
</head>
<body style='background-color:aquamarine'>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php

$connection = mysqli_connect('localhost','root','','new1');

if(!$connection)
{
    die("connection server failed: ".mysqli_connect_error());
}
$id = $_GET['id'];
$sql="SELECT * FROM `registerp`  WHERE id='$id'";
$res=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($res);
?>
<?php
if(isset($_POST["submit"]))
{
 $id=$_POST['id'];
 $username=$_POST['username'];
 $txtdob=$_POST['txtdob'];
$AGE=$_POST['age'];
$message=$_POST['message'];
$countrycode =$_POST['countrycode'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$countySel=$_POST['countySel'];
$stateSel=$_POST['stateSel'];
$districtSel=$_POST['districtSel'];
$targetDir="uploads/";
$fileName0=basename($_FILES['img']['name']);
$random=rand();
$fileName=$random.$fileName0;
$targetfilepath=$targetDir.$fileName;
$filetype=pathinfo($targetfilepath,PATHINFO_EXTENSION);
$allowtype=array('img','jpg','jpeg','png');
$old_name=$row['filename'];
if(isset($_FILES['img']['name']) && ($_FILES['img']['name']!=""))
{

if(!file_exists($targetfilepath))
{
if(in_array($filetype,$allowtype))
{
unlink("uploads/$old_name");
move_uploaded_file($_FILES['img']['tmp_name'],$targetfilepath);

}
else
{
    $fileName=$old_name;
    echo"<script>alert('not a valid type');location.href='viewp.php';</script>";
}
}else{
    $fileName=$old_name;
    echo"<script>alert('already existed');location.href='viewp.php';</script>";
}

}else{
    $fileName=$old_name;
}
$sql1="UPDATE `registerp` SET `id`='$id', `username`= '$username',`txtdob`='$txtdob',`AGE`='$AGE',`message`='$message',`countrycode`='$countrycode',`phone`='$phone',`gender`='$gender',`countySel`='$countySel',`stateSel`='$stateSel', `districtSel`='$districtSel', `filename`='".$fileName."' WHERE id='{$row['id']}'";
$row=$connection->query($sql1);
if($row)
{
    echo "<script>alert('update success');location.href='viewp.php';</script>";
}
else
{
    echo "<script>alert('not update success');location.href='viewp.php';</script>";
    
}

}
?>

<div id="leftpane" style='background:green;'>
<form name='register' method="POST" action="updatep.php?id=<?php echo $row["id"]; ?>" enctype="multipart/form-data"  >   
<div id="login" >
    <h2 style='padding-right:450px'>upadte form</h2>
<div class="row">
<div class='col-lg-6'>
<p>user id<span class='required'>*</p>
<input value="<?php echo $row["id"]; ?>" type="number" name="id" class="form-control" required><br><br>
<p>username<span class='required'>*</p>
<input value="<?php echo $row["username"];?>" type="text" class="form-control" name="username" required><br><br>
<p>dob<span class='required'>*</p>
<input value="<?php echo $row["txtdob"];?>" id="dob"  type="text" class="form-control" name="txtdob" onChange="FindAge()" required><br><br>
<p>age<span class='required'>*</p>
<input value="<?php echo $row["age"];?>" id="age"  type="text" class="form-control" name="age" required><br><br>
<p>addresss<span class='required'>*</p>
<textarea rows=4 cols=30 name='message' id='message'  class="form-control" required><?php echo $row['message'];?></textarea>
<p>phone<span class='required'>*</p>
<select name='countrycode' class='countrycode' id='countrycode'>
    <option value=<?php echo $row['countrycode']?> selected><?php echo $row['countrycode'];?> </option>
    <option value=""> aus (+2)</option>
    <option value=""> india (+91)</option>
    <option value=""> us (+1)</option>
</select>   
<input type="tel" name="phone" id="phone" pattern='{1-9}{1}{0-9}{9}' value="<?php echo $row['phone']; ?>" ><br><br>
<p>gender<span class='required'>*</p>
<input type='radio' name='gender' id='gender' value="male" <?php if($row['gender']== "male") {echo "checked";}?>>male
<input type=radio name="gender" id="gender" value="female" <?php if($row['gender']=="female"){echo "checked";} ?>>female
<br><br>
<input type='file' name='img' id='img'>
<br><br>
<input type='hidden' name='img' id='img' value="<?php echo $row['filename'];?>"><br>
<h4><?php echo $row['filename']; ?></h4>
<img src="<?php echo 'uploads/'.$row['filename'];?>" width="100px"  >
</div>
<div class='col-lg-6'>
 <p>country<span >*</span><p>
    <select name="countySel" id="countySel" > 
    <option name='countySel' id='countySel' value="<?php echo $row["countySel"];?>" selected="selected"><?php echo $row['countySel'];?></option>
</select>
<select name="stateSel" id="stateSel">
    <option name='stateSel' id='stateSel' value="<?php echo $row["stateSel"];?>" selected="selected"><?php echo $row['stateSel'];?></option>
</select>
<select name="districtSel" id="districtSel">
    <option name='districtSel' id='districtSel' value="<?php echo $row["districtSel"];?>" selected="selected"><?php echo $row['districtSel'];?></option>
</select>
<br><br>
<input type='reset' name='reset' value='rest'>

<input type='submit' name='submit' class='insert' value='submit'>
</div>
</div>
</div>
</form>
</div>















<footer class="footer-box">

<div class="row">
<div class="col-lg-4">
    <h3>this heading</h3>
    <p>jkhdkjahdkjahs</p>
</div>
<div class="col-lg-4">
<ul>
    <li><a href="#">service</a></li>
    <li><a href="#">maintanace</a></li>
    <li><a href="#">help</a></li>
    </ul>
</div>
<div class="col-lg-4">
    <form method="POST" action="">
        <input $type="email" name="email" placeholder="search">
        <button type="submit">submit</buton>
</form>
</div>

</div>
</div>
</footer>
<div class="footer-bottom">
    <div class="row">
        <div class="col-lg-12">
            &copy;copyright2023
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>