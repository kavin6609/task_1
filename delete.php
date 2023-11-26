<?php
    #if(isset($_POST['delete'])) 
    #{
           
        $connection = mysqli_connect('localhost','root','','new1');
        if(!$connection)
        {
            die("connection server failed: ".mysqli_connect_error());
        }
        else
        {
            echo "connection success";
        }
        #error_reporting(0);
        $id =$_GET['id'];
        $sql = "DELETE FROM `register1` WHERE id = '$id' ";
        #mysqli_select_db('new1');
        
        $result = mysqli_query($connection,$sql);
        #$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        #$count = mysqli_num_rows($result);

        if($result) 
        {
            echo "<script>alert('deleted success');location.href='view.php';</script>";

         } else {
             echo "Error deleting record: " . $connection->error;
         }
         echo "kavin";
        // Close connection
        #mysqli_close($link);
    #}
?>
