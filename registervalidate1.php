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

$statusMsg = '';
$backlink = ' <a href="./">Go back</a>';

if(isset($_POST['insert']) && !empty($_FILES["file"]["name"]))
{
    $username =$_POST['username'];
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
    $maxsize    = 3013456;
    $acceptable = array('pdf');
    $targetDir1 = "pdf/";
    $fileName1 =basename($_FILES["file1"]["name"]);
    $targetFilePath1 = $targetDir1 . $fileName1;
    $fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);

//     if(empty($username) || empty($userpwd) || empty($usercpwd) || empty($useremail))
//     {
//         echo "fill all the field";
//     }
//     elseif($userpwd!=$usercpwd)
//    {
//     echo "<script>alert('passs not match');location.href='register.php';</script>";
//     }
//     else
//     {
//         #echo "all filed <br>";
    

    #$userpwd =md5($usercpwd);
    $allowTypes = array('jpg','png','jpeg','gif');
    if (!file_exists($targetFilePath)) {
        if(in_array($fileType, $allowTypes)){
                // Upload file to server
            
            if(($_FILES['file']['size']) ) {   
            if(!file_exists($targetFilePath1))
            {        
                if(($_FILES['file1']['size'] <= $maxsize) || ($_FILES["file1"]["size"] == 0)) 
                {
                    
                    if(in_array($fileType1, $acceptable)){
                            //    if (!file_exists($targetFilePath1)) {
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
      
                if(move_uploaded_file($_FILES["file1"]["tmp_name"], $targetFilePath1))
                {

    $sql= "INSERT INTO register1(username,TxtDOB,AGE, message ,countrycode,phone,gender,countySel,stateSel,districtSel,fileName,fileName1) VALUES ('$username','$TxtDOB','$AGE','$message','$countrycode','$phone','$gender','$countySel','$stateSel','$districtSel','".$fileName."','".$fileName1."')";

	if($connection->query($sql))
    {
        echo "<script>alert('success');location.href='view.php';</script>";
    }
    else
    {
        echo "<script>alert('not success');location.href='index.php';</script>";

    }
}else{

    echo "<script>alert('erorr updated pdf file'); .href='index.php';</script>";
    }
}
else{
    
    
    echo "<script>alert('error uploading image file');location.href='index.php';</script>";
}

// }
// else{
   
//       echo "<script>alert('already existed'); .href='index.php';</script>";
// }
}
else{

    echo "<script>alert('Sorry, only  PDF files are allowed to upload');location.href='index.php';</script>";
    }
}
else
{
    echo "<script>alert('pdf File too large. File must be less than 2 megabytes');location.href='index.php';</script>";

}
}
else{
    echo "<script>alert('pdf file already existed');location.href='index.php';</script>";

}
}
else{
   
    echo "<script>alert('image File too large.');location.href='index.php';</script>";
}
}else{

echo "<script>alert('Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload');location.href='index.php';</script>";
}
}else{

echo "<script>alert('image already existed');location.href='index.php';</script>";
}
}
//}




?>