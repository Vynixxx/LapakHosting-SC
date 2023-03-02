<?php
    include "connect.php";
    if (isset($_POST['verifikasi'])){
        $appid = $_POST['appid'];
        $sql = "UPDATE tbl_user SET status='1' WHERE status = '$appid'";
        $run = mysqli_query($conn, $sql);
        if($run == true){
            
            echo "<script> 
                    alert('Application Approved');
                    window.open('datauser.php','_self');
                  </script>";
        }else{
            echo "<script> 
            alert('Failed To Approved');
            </script>";
        }
    }
    
 ?>