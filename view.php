<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <title>Hello, world!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    <style type="text/css">
    .container
{
width:100%;
height:100%;
}

     
  
  .col-12{
  
    text-align: center;
    
  }
  
  .footer-box
  {
    background-color:black;
    padding:10%;
  }
  
  .footer_bottom {
    background: #095a83;
    padding: 15px;
}


.form-inline:hover .form-control {
	width: 250px;
	padding: 0 10px;
  height: 40px;
}
 

#leftpane
{
width:100%;
height:500px;
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
.centered
{
    padding-right:500px;
}
#home
{
  padding-bottom: 100px;
 }

.nav-link
{  
color: black;
font-size:20px;
font-weight: 600;
font-family: 'Times New Roman', Times, serif;
}

.nav-link:hover
{
color:violet;
}
.nav-item
{
  padding-left:10px;
  padding-right: 20px;
}
.dropdown-menu 
{
  display: none;
  position:absolute;
  z-index:1;
}
.dropdown:hover .dropdown-menu
{
  display:block;
  transition:s;
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
  color: black;
  padding-top: 10px;
  padding-right: 20px;
 }
.search-box {
     position: absolute;
     right: 10px;
     top: 10px;
    	padding: 0;
	margin-top: 5px;
}


.search-btn
{
  background: black;
 width: 30px;
 height: 30px;
  display: flex;
  float:right ;
  align-items: center;
   }
  .search-txt
  {
   width: 0;
   padding: 0;
   border: none;
   outline: none;
   font-weight: 500;
    transition: width 200ms;
    color: black;
    background: white;
    font-size: 15px;
 }
  .search-box:hover .search-txt
  {
    height: 30px;
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
.dropdown-menu a
{
  color: black;
  padding-top: 10px;
  padding-right: 20px;
 }}
 .navbar-toggler{
    color: black; 
    border:none;  
    background-color: black;
}
.jumbotron{
      margin-top: 10%;
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
table
{
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
tr:nth-child(even){
 background-color:#3e8e41;

}
table { border-collapse: collapse; }

.padd{  padding: 1em;
        border: 1px solid #666666;
        width:10px;
        }
</style>



  </head>

  <body style='background-color: aquamarine;' >
    <nav class="navbar  navbar-expand-md  bg-light fixed-top " style="padding-bottom:15px;">
      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=" navbar-toggler-icon "></span>
      </button>
    <div class="search-box" >
      <input type="text" class="search-txt" placeholder="Search">
      <a class="search-btn">
          <img src="images/search_icon.png" alt="#" />
      </a>
  </div>

      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav m-auto">
          <li class="nav-item ">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
                       
          <li class="nav-item dropdown">
            <div class="dropdown">
              <a class="nav-link" href="#" >
                Dropdown link
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="about.html">about</a>
                <a class="dropdown-item" href="service.html">service</a>
                <a class="dropdown-item" href="contact.html">contact</a>
              </div>
            </div>
            </li>        
          <li class="nav-item ">
            <a class="nav-link disabled" href="#">Link</a>
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
<form method="post" action="register1.php">
<input type="submit" name="reset" class="insert1" value="Add" > 
</form>
<?php
    $connection = mysqli_connect('localhost','root','','new1');

    if(!$connection)
    {
        die("connection server failed: ".mysqli_connect_error());
    }
    $sql = " SELECT * FROM register1 ";
    #$sql = " SELECT reg1.userpwd, reg1.useremail,registration.username FROM reg1 INNER JOIN registration ON reg1.userid=registration.userid limit 0,4";
    $res = mysqli_query($connection, $sql);
    $count=mysqli_num_rows($res);
    if ($count > 0) {
              $i=0;
        echo "<table border=3 cellspacing=5>";
        echo "<tr>";
        echo"<th>s.No</th>";
        echo "<th>username</th>";
        echo "<th class='padd'>countrycode</th>";
        echo "<th>userphone</th>";
        echo "<th>image</th>";
        echo "<th colspan='2'><center>Action</center></th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($res)) {
                  $i++;
            echo "<tr>";
            echo "<td>  $i </td>";
            echo "<td>".$row['username']."</td>";
            echo "<td class='padd'>".$row['countrycode']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td><a class='nav-link' href='uploads/{$row['filename']}'><img src='uploads/{$row['filename']}' width='200' hight='10px'; ></td>";
            echo "<td><a href= 'update.php?id=$row[id];'>edit/update</td>";
            echo "<td><a  href='delete.php?id=$row[id];' onclick=\"return confirm('Are you sure you want to delete?');\">Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else {
        echo "No matching records are found.";
    }

mysqli_close($connection);
?>
            
    <footer class=footer-box style="margin-top:400px;">
      <div class=row>
        <div class="col-lg-4">
          <h3>kabjhsiAHD</h3>
          <p>jhhisgfiagiagsifgaifgais</p>
        </div>
      <div class="col-lg-4">
        <ul>
          <li>
          <a href=#>join</a>
          </li>
          <li><a href="#">maintanance</a></li>
          <li><a href="#">languagepacks</a></li>
        </ul>
      </div>
      <div class="col-lg-4">
        <h3>newsletter</h3>
        <form action=index.html>
        <input type="email" placeholder="Your Email" name="#" required><br>
       <button>Submit</button>
        </form>
     </div>
      </div>
    </footer>
    <div class="footer_bottom">
      <div class="row">
        <div class=col-12>
          &copy; copyright 2202
        </div>
      </div>
    </div>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
    
  </body>
</html>