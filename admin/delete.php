<?php
    include('config/db.php');
    include('config/functions.php');
    if(isset($_GET['sr_no'])){
        $sr_no = $_GET['sr_no'];
        echo $sr_no;
        $sql="DELETE FROM contact_us WHERE sr_no=$sr_no";
        
        $result=mysqli_query($con,$sql);
        if($result){
            echo "Deleted successfully";
        }
        else{
            die(mysqli_error($con));
        }
    }
?>