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
      <?php
      
      $connection = mysqli_connect('localhost','root','','new1');

      if(!$connection)
      {
          die("connection server failed: ".mysqli_connect_error());
      }
  $id = $_GET['id'];
  $sql="SELECT * FROM `register1`  WHERE id='$id'";
  $res=mysqli_query($connection,$sql);
  $row=mysqli_fetch_array($res);
  ?>

<div id='leftpane' >
      <form name='register' method="POST" action="update.php?id=<?php echo $row["id"]; ?>" enctype="multipart/form-data"  >   
      <div id='login' style="text-align:center" >
      <h2 class="centered">Update form </h2><br> 
      <div class="row"> 
          <div class="col-lg-6">
          <p> User ID<span class="required">*</span> </p> 
          <input value="<?php echo $row["id"]; ?>" type="number" name="id" class="form-control" required><br><br>
          <p> Name<span class="required">*</span> </p> 
          <input value="<?php echo $row["username"]; ?>" type="text" name="username" class="form-control" required><br><br>
          <br>
          <label for="TxtDOB">Date of Birth</label>
          <input id="dob" type="text" name="TxtDOB" maxlength="10" placeholder="mm/dd/yyyy" onChange="FindAge()" value="<?php echo $row["TxtDOB"]; ?>" required>
          <label for="Age">Age</label>
          <input type="text" name="AGE" id="age"  value="<?php echo $row["AGE"]; ?>" readonly>
          <p>address<span class="required">*</span> </p>
          <textarea aria-required="true" rows="4" cols="30" name="message" id="message" class="form-control" placeholder="Message" required><?php echo $row["message"]; ?></textarea>        
          <p>phone<span class="required">*</span></p>
          <select name="countrycode" class="countrycode" id="countrycode" >
          <option value="<?php echo $row["countrycode"]; ?>" selected="selected" ><?php echo $row["countrycode"]; ?></option>
          <option value="India (+91)">India (+91)</option>
          <option value="aus(+62)">aus(+62)</option>
          <option value="canada (+72)">canada (+72)</option>
          </select> 
          <input type="tel" name="phone" id="phone" placeholder="0123456789" pattern="[1-9]{1}[0-9]{9}" value="<?php echo $row["phone"]; ?>">
          <br><br>
          <p>Gender<span class="required">*</span></p>
          <input type="radio" name="gender" id="gender" value="male" <?php if($row["gender"] == "male"){echo"checked";}?>>Male
          <input type="radio" name="gender" id="gender" value="female" <?php if($row["gender"] == "female"){echo"checked";}?>>Female
          <p>image<span class="required">*</span></p>
          
          <input type="file" name="file" id="file"   ><br><br>
          <input type="hidden" name="file2" id="file2"  value="<?php echo $row["filename"]?>" ><br>
          <img src="<?php echo "uploads/".$row['filename'];?>" width="100px" style="margin-right:70px;  padding-top:1px; ">
                    </div>
          <div class="col-lg-6">
          <select name="countySel" id="countySel" size="1" >
          <option value="<?php echo $row["countySel"]; ?>" selected="selected"><?php echo $row["countySel"]; ?></option>
          </select>
          <br><br>
          <p>select state<span class="required" >*</span> </p> 
          <select name="stateSel" id="stateSel" size="1" >
            <option value="" selected="selected"  >Please select Country first</option>
                  </select>
          <br><br>
          <p>select city<span class="required" >*</span> </p> 
          <select name="districtSel" id="districtSel"   size="1">
                      <option value="" selected="selected">Please select State first</option>
                  </select>
          <br><br>
          <input type="reset" name="reset" class="insert" value="reset"> 
          <br><br>
          <input type="submit" name="submit" class=' insert' value="submit">
  </div>
  </div>
      </div>
          </form>
          </div>
  <br><br>
    

          <?php
          if(isset($_POST["submit"]))
                    {
                      $id =$_POST['id'];
                      $username  = $_POST['username'];
                      $TxtDOB =$_POST['TxtDOB'];
                      $AGE=$_POST['AGE'];
                      $message =$_POST['message'];
                      $countrycode =$_POST['countrycode'];
                      $phone=$_POST['phone'];
                      $gender=$_POST['gender'];
                      $countySel=$_POST['countySel'];
                      $stateSel=$_POST['stateSel'];
                      $districtSel=$_POST['districtSel'];
                      $targetDir = "uploads/";
                      $fileName = basename($_FILES["file"]["name"]);
                      $targetFilePath = $targetDir . $fileName;
                      $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                      // $size=$_FILES['file']['size'];
                      // $temp=$_FILES['file']['tmp_name'];
                      $type=$_FILES['file']['type'];
                      $old_image=$row['filename'];
                      // $fileName=$_FILES['file']['name'];
                    //  if($fileName != "" ){
                if(isset($_FILES['file']['name']) && ($_FILES['file']['name']!="")){
                  if (!file_exists($targetFilePath)) {
                      
                      
                        
                        
                      if(($type=="image/jpg") || ($type=="image/jpeg") || ($type=="image/png")){
                        if(($_FILES['file']['size'] <= 1500000) || ($_FILES["file"]["size"] == 0)) {
                       
                          
                      unlink("uploads/$old_image");
                      move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
                          
                        
                    }
                    else{
                      $fileName=$old_image;
                      echo "<script>alert('File too large. File must be less than 2 megabytes');location.href='view.php';</script>";
          
                    }
                            
                  }
                              
                             
                  else
                    {
                      echo"<script>alert('not a valid type')</script>";
                    }
                  
                 

                      
                    
                    
          // if($new_image !='')
          // {
          //   $update_filename = $_FILES['file']['name'];
          // }
          // else
          // {
          //   $update_filename = $old_image;
          // }
          // if(file_exists($targetFilePath))
          // {
          //   $filename = $_FILES["file"]["name"];
          //   echo "<script>alert('exists');location.href='update.php';</script>";
           
          // }
          // else{
            
           

        }
        else
        {
          echo "<script>alert('already existed');location.href='view.php';</script>";
          $fileName=$old_image;
        
        }
      }
      else{
        $fileName=$old_image;
      }
       
      // }
      // else
      // {
      //   $fileName=$old_image;
      // }

        $sql1="UPDATE `register1` SET `id`='$id', `username`= '$username',`TxtDOB`='$TxtDOB',`AGE`='$AGE',`message`='$message',`countrycode`='$countrycode',`phone`='$phone',`gender`='$gender',`countySel`='$countySel',`stateSel`='$stateSel', `districtSel`='$districtSel', `filename`='".$fileName."' WHERE `id`='{$row["id"]}'";
        if($connection->query($sql1))
        {
          
        // echo "<script>alert('update success');location.href='view.php';</script>";
          echo"<script>window.open('view.php','_self')</script>";
        }
        else
        {
          // echo "<h4>Invalid Username Or Password</h4>";
          echo"<script>window.open('view.php','_self')</script>";
        }
          
        }
        
        
          ?>
          
          
      
      <?php
        require "footer.php";
      ?>        
      
    </body>
  </html>