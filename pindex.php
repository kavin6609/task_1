<!doctype html>
<html lang="en">
<?php
require "header.php"; 
?>
<body  style='background-color:aquamarine;'>
<nav class="navbar  navbar-expand-lg  bg-light fixed-top " style="padding-bottom:15px;">
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
<div id="leftpane">
<form name='register' method='post' action='registerp.php' enctype='multipart/form-data'>
<div id='login' style='text-align:center;'>
<h3 class='centered'>register form</h3><br>
<div class='row'>
<div class='col-lg-6'>
    <p>name<span class="required"></span></p>
    <input type='text' name='username' id='username' value='koooo' class="form-control" size='20' placeholder='typer yourname'>
    <br>
    <label for="txtdob">Date oxf Birth</label>
    <input id='dob' type='text' name='txtdob' maxlength='10' placeholder='mm/dd/yyy' onChange="FindAge()">
    <br><br>
    <label for='age'>AGE:</label>
    <input type="text" name="age" id='age'>
    <p>address<span class="required">*</span>
    <textarea rwos='5' cols='6' name='message' id='messsage' class='form-control' placeholder='message'></textarea>
    <p>phone<span class='required'>*</span></p>
    <select name="countrycode" class='countrycode' id='countrycode'>
       <option >India(+91)</option>
       <option >aus(+2)</option>
       <option >us(+3)</option>
</select>
<input type='tel' name='phone' class='phone' placeholder='type phone no' pattern='[1-9]{1}[0-9]{9}'>
<br><br>
<p><span class='required'>*gender</span></p>
<input type='radio'class='male' name='gender' value='male'>male
<input type='radio'class='female' name='gender' value='female'>female
<p><span class='required' >*image</span></p>
<p style='padding-left:100px;'><input type='file' name='img' class='img'><p>
<p><span class='required'>*file</span></p>
<input type='file' name='file1' class='file1' style='padding-left:100px;'>
</div>
<div class='col-lg-6'>
<p>select country<span class="required">*</span></p>
<select name='countySel' id='countySel' size='1' required>
  <option value=""selected="selected" required >please select the option</option>  
</select><br><br>
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
        <input type="submit" name="insert" class='insert' value="submit">
        
</div>
</div>
</div>
</form>
</div>


</body>
</html>