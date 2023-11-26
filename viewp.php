<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style type="text/css">
        .container
        {
            width:100%;
            height:100%;
        }
        .nav-link
        {
            color:black;
            font-size:20px;
            font-weight:700;
            font-family:'Times New Roman', Times, serif;
        }
        .nav-link:hover
        {
            color:violet;
        }
        .nav-item
        {
            padding-right:30px;
            padding-left:10px;
        }

        .dropdown-menu
        {
            display:none;
            position:absolute;
            z-index:1;
        }
        .dropdown:hover .dropdown-menu
        {
            display:block;
            transition:10s;
        }
        .dropdown-item
        {
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 100%;
            font-weight: 500;
            color: black;
            }
        .dropdown-item:hover
        {
            color:violet;
        }
        .dropdown-menu a
        {
            color:black;
            padding-top:10px;
            padding-right:10px;
            padding-left:20px;
            
        }
        .search-box
        {
            position:absolute;
            padding:0;
            right: 10px;
            top: 10px;
            margin-top:5px;
        }
        .search-btn
        {
            background:black;
            width:30px;
            height:30px;
            display:flex;
            float:right;
            align-items:center;
        }
        .search-txt
        {
            width:0;
           
            padding:0;
            border:none;
            outline:none;
            font-weight:500;
            transition:width 200ms;
            color:black;
            background:white;
            font-size:15px;
        }
        .search-box:hover .search-txt
        {
            height:30px;
            opacity:1;
            width: 200px;
        }
@media (max-width:600px)
{
.collapse
{
  width: 0px;
  height: 200px;
  border: 1px dotted black;
  overflow: scroll;
 }
}
@media (max-width:600px)
{
.dropdown-menu 
{
  color: black;
  padding-top: 10px;
  padding-right: 20px;
 }
}
 .navbar-toggler{
    color: black; 
    border:none;  
    background-color: black;
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
.insert1
{
    width:100px;
    height:50px;
    border-radius:50px ;
    border:none;
    box-shadow: 0 9px #999;
    background-color:lightgreen;
    font-size:20px;
    cursor:pointer;
    float:right;
    margin-bottom:50px;
    margin-right:50px;
}
.insert1:hover
{
    background-color:darkgreen;
}
.insert1:active 
{
  background-color: #3e8e41;
  transform: translateY(4px);
}
table{
    width:100%;
    text-align:center;
    border:50%;
    border-collapse:collapse;
    color:#d96459;
    font-family:monospace;
    font-size:25px;
    height:100px;
}

th
{
    background-color:#d96459;
    color: white;
}
tr:nth-child(odd){
 background-color:green;

}
.no-spacing {
  border-spacing:0; /* Removes the cell spacing via CSS */
  border-collapse: collapse;  /* Optional - if you don't want to have double border where cells touch */
}
table { border-collapse: collapse; }

.padd{  padding: 1em;
        border: 1px solid #666666;
        width:10px;
        }
.footer-box
{
    background-color:black;
    padding:10%;
}
.footer-bottom
{
    background: #095a83;
    padding: 15px;
}
.col-lg-12
{
    text-align:center;
    font-size:20px;
font-weight: 600;
font-family: 'Times New Roman', Times, serif;
}
</style>
</head>
<body style='background-color: aquamarine;'>
<nav class="navbar navbar-expand-md bg-light fixed-top" style="padding-bottom:15px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="search-box">
        <input type="text" class="search-txt" placeholder="search here">
        <a class="search-btn">
        <image src="images/search_icon.png" alt="#"></a>
</div>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav m-auto">
        <li class="nav-item">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
     </li>
        <li class="nav-item dropdown">
        <div class="dropdown">
            <a class="nav-link" href="#">
                dropdown link
            </a>
            <div class="dropdown-menu">
             <a class="dropdown-item" href="">about</a>
             <a class="dropdown-item" href="">service</a>   
            </div>
            </div>   
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
</nav>

<br><br>
    <div class="jumbotron jumbotron-fluid" style="margin:10px 0;">
      <div class="container">
        <div class="display-4"> my content</div>
        <h1>Bootstrap Tutorial</h1>      
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
  <p>This is some text.</p>      
      </div>
    </div>
<br><br>


<form method="post" action="pindex.php">
<input type="button" class="insert1" value="add">
</form>
<?php
$connection=mysqli_connect("localhost","root","","new1");
if(!$connection)
{
    echo"<script>alert('not coonected')</script>";
}
else{
    echo"<script>alert('connected')</script>";
}
$sql="SELECT * FROM registerp";
$res=$connection->query($sql);
$count=mysqli_num_rows($res);
if($count>0)
{
        $i=0;
echo "<table border='4' cellspacing='5'>";
echo"<tr>";
echo"<th>s.no</th>";
echo"<th>usernmae</th>";
echo"<th class='padd'>DOB</th>";
echo"<th>image</th>";
echo"<th colspan='2'><center>ACTION<center></th>";
echo"</tr>";
while($row=mysqli_fetch_array($res))
{
    $i++;
    echo"<tr>";
    echo"<td> $i </td>";
    echo"<td>".$row['username']."</td>";
    echo"<td>".$row['txtdob']."</td>";
    echo"<td><a href='uploads/{$row['filename']}';'><img src='uploads/{$row['filename']}' width='200' height='100';></a></td>";
    echo"<td><a href='updatep.php?id=$row[id];'>Update</td>";
    echo "<td><a  href='deletep.php?id=$row[id];' onclick=\"return confirm('Are you sure you want to delete?');\">Delete</a></td>";
            echo"</tr>";
}
echo"</table>";
}
else {
    echo "No matching records are found.";
}



mysqli_close($connection);
?>

<footer class="footer-box">
<div class="row">
<div class="col-lg-4">
    <h3><a href="#">AASSHIUAgsiy</a></h3>
  <p><a>jhhkjd</a><p>  
</div>
<div class="col-lg-4">
<ul>
<li><a href="#">servicess</a></li>
<li>maintenance</li>
<li>join</li>   
</ul>
</div>
<div class="col-lg-4">
    <h3>news letter</h3>
<form method='POST' action="#">
  <input type="email" placeholder="enter your mail" name="#" required><br>
  <button>submit</button>  
</form>
</div>

</div>


</footer>
<div class="footer-bottom">
<div class="row">
    <div class=col-lg-12>
        &copy;copyright 2023 
</div>
</div>
</div>














<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>