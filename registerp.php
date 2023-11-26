<?php
$connection=(mysqli_connect('localhost','root','','new1'));
if(!$connection)
{

    echo "<script>alert('not connect');location.href='pindex.php';</script>";
}
else
{
    echo"<script>alert('connect success');loaction.href='pindex.php';</script>";
}

if(isset($_POST['insert']) && !empty($_FILES["img"]["name"]))
{

    $username=$_POST['username'];
    $txtdob=$_POST['txtdob'];
    $age=$_POST['age'];
    $message =$_POST['message'];
    $countrycode =$_POST['countrycode'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $countySel=$_POST['countySel'];
    $stateSel=$_POST['stateSel'];
    $districtSel=$_POST['districtSel'];
    $targetdir="uploads/";
    $filename0=basename($_FILES['img']['name']);
    $random=rand();
    $filename=$random.$filename0;
    $targetfilepath=$targetdir.$filename;
    $filetype=pathinfo($targetfilepath,PATHINFO_EXTENSION);
    $maxsize= 3000000;
    $acceptable=array('pdf');
    $targetdir1="pdf/";
    $filenames=basename($_FILES['file1']['name']);
    $filename1=$random.$filenames;
    $targetfilepath1=$targetdir1.$filename1;
    $filetype1=pathinfo($targetfilepath1,PATHINFO_EXTENSION);
    $allowtype=array('jpg','jpeg','png','gif');
        if(!file_exists($targetfilepath))
        {
            if(in_array($filetype,$allowtype))
            {
                if(!file_exists($targetfilepath1))
                {        
                    if(($_FILES['file1']['size'] <= $maxsize) || ($_FILES["file1"]["size"] == 0)) 
                    {
                        
                        if(in_array($filetype1, $acceptable))
                         {
                                if(move_uploaded_file($_FILES["img"]["tmp_name"], $targetfilepath))
                                {
                                    if(move_uploaded_file($_FILES['file1']['tmp_name'],$targetfilepath1))
                                    {
                $sql="INSERT INTO registerp(username,txtdob,age, message ,countrycode,phone,gender,countySel,stateSel,districtSel,filename,filename1)values('$username','$txtdob','$age','$message','$countrycode','$phone','$gender','$countySel','$stateSel','$districtSel','".$filename."','".$filename1."')";

                if($connection->query($sql))
                    {
                        echo "<script>alert('success');location.href='pindex.php';</script>";
                    }
                    else
                    {
                        echo "<script>alert('not success');location.href='pindex.php';</script>";

                    }
                }
                else{
                    echo"<script>alert('error uploading pdf file');location.href='pindex.php';</script>";
                }
            }else{

                echo "<script>alert('erorr updated image file');location.href='pindex.php';</script>";
                }
           
                }else{
                    echo "<script>alert('only allowed pdf file type ');location.href='pindex.php';</script>";
                   
                }
                
                }else{
                    echo "<script>alert('pdf files large');location.href='pindex.php';</script>";
                    
                }
                }
                else
                {
                    echo "<script>alert('already pdf existed');location.href='pindex.php';</script>";
                }
            
                
            }else
            {
               echo "<script>alert('only allwed the image type');location.href='pindex.php';</script>";
                
            }
   
        }
        else{

            echo "<script>alert('already file existed');location.href='pindex.php';</script>";
            
}


}


























?>