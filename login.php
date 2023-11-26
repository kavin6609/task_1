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
    <form name='register' method="post" action="loginvalidate.php">   
    <div id='login' style="text-align:center" >
        <h2 class="centered">LOGIN FORM </h2><br> 
        <div class="row"> 
        <div class="col-lg-6">
        <p> Name<span class="required">*</span> </p> 
         <input type='text' name='username' id='username' class="form-control" size=30 placeholder='enter your userename' required>
        <p>userpwd<span class="required">*</span> </p> 
        <input type='password' name='userpwd' id='userpwd' class="form-control" size='30' placeholder='enter your password' required>
        <br><br>
        <input type="submit" name="insert" class=' insert' value="submit"><br><br>
        To Register<a href="register.php" style="float:center;" class="btn btn-large"><u>click here</u></a>
        Forgot Password<a href="#" style="float:center;" class="btn btn-large"><u>click here</u></a>
</div>
      
</div>

</div>
</div>
        </form>  
        
        </div>
       
<br><br>
  <div class="container fluid">
    
    <br><br>
    <div class="row ">
      <div class="col-sm-4 to_animate" >
        <div class="teaser text-center">
          <div class="teaser_icon highlight size_normal"> <i class="rt-icon2-phone5"></i> </div>
           <p><h3>CONTACT:</h3> <span class="grey">Mobile:</span> +91(0) 22222222<br> <span class="grey">Landline:</span> +91(0) 421-2222222 </p>
        </div>
      </div>
      <div class="col-sm-4 to_animate" >
        <div class="teaser text-center">
          <div class="teaser_icon highlight size_normal"> <i class="rt-icon2-location2"></i> </div>
          <h3>ADDRESS:</h3>
          <p>  Mumbai airport address.<br>
      Chhatrapati Shivaji International Airport Domestic Terminal 
      - 1B Mumbai - 400 099. 
      Phone:022 26264145/26264000 ...
      <br>        - 1B Mumbai - 400 099.     </p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="teaser text-center">
          <div class="teaser_icon highlight size_normal"> <i class="rt-icon2-mail"></i> </div>
          <h3>WEBSITE:</h3>
          <p>Mumbaiairport.in</p>
        </div>
      </div>
    </div>
        <form class="contact-form" method="post" action="#">
          <div class="row">
            <div class="col-sm-6">
              <p> Name<span class="required">*</span> </p> <input type="text"  size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name" required><br>		
             <p> Email address<span class="required">*</span> </p><input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address" required><br>										
             <p>Subject<span class="required">*</span></p><input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject"><br>
            </div>
            <div class="col-sm-6">
              <p>Message<span class=required>*</span></p> <i class="fa fa-comment highlight" aria-hidden="true"></i> <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <p class="text-center"> <button type="submit" id="contact_form_submit" name="contact_submit" class=  "button">Send Message</button> </p>
            </div>
          </div>
        </form>
   </div>

            
   <?php
require "footer.php";
?>

      </body>
</html>