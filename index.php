<!doctype html>
<html lang="en">
<?php
require "header.php"; 

?>
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
    
    
    <div id='leftpane' >
    <form name='register' method="post" action="registervalidate1.php" enctype="multipart/form-data">   
    <div id='login' style="text-align:center" >
    <h2 class="centered">Register form </h2><br> 
    <div class="row"> 
        <div class="col-lg-6">
        <p> Name<span class="required">*</span> </p> 
         <input type='text' name='username' id='username' class="form-control" size=30 placeholder='enter your userename' required>
         <br>
         <label for="TxtDOB">Date of Birth</label>
         <input id="dob" type="text" name="TxtDOB" maxlength="10" placeholder="mm/dd/yyyy" onChange="FindAge()" >
         <label for="Age">Age</label>
         <input type="text" name="AGE" id="age"  >
        <p>address<span class="required">*</span> </p>
        <textarea aria-required="true" rows="4" cols="30" name="message" id="message" class="form-control" placeholder="Message"></textarea>        
        <p>phone<span class="required">*</span></p>
        <select name="countrycode" class="countrycode" id="countrycode" >
        <option >India(+91)</option>
       <option >aus(+2)</option>
       <option >us(+3)</option>
        </select> 
        <input type="tel" name="phone" id="phone" placeholder="0123456789" pattern="[1-9]{1}[0-9]{9}">
        <br><br>
        <p>Gender<span class="required">*</span></p>
        <input type="radio" name="gender" id="gender" value="male" >Male
        <input type="radio" name="gender" id="gender" value="female">Female
        <p>image<span class="required">*</span></p>
        
        <input type="file" name="file" id="file" required/>
        <p>file <span class="required">*</span></p>
        
        <input type="file" name="file1" id="file1" required/>
        </div>
        <div class="col-lg-6">
        <p>select country<span class="required">*</span> </p> 
        <select name="countySel" id="countySel" size="1" required>
        <option value="" selected="selected" required>Select Country</option>
        </select>
        <br><br>
        <p>select state<span class="required" >*</span> </p> 
        <select name="stateSel" id="stateSel" size="1" required>
        <option value="" selected="selected">Please select Country first</option>

        </select>
        <br><br>
        <p>select city<span class="required" >*</span> </p> 
         <select name="districtSel" id="districtSel" size="1" required>
        <option value="" selected="selected">Please select State first</option>
        </select>
        
        <br><br>
        <input type="reset" name="reset" class="insert" value="reset"> 
        <br><br>
        <input type="submit" name="insert" class=' insert' value="submit">
</div>
</div>
    </div>
        </form>
        </div>
<br><br>
  
<?php
require "footer.php";
?>
            
        
  </body>
</html>