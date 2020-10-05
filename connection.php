<?php


$username = "root";
$password = "";
$server = "localhost";
$db = "complaint";


$con = mysqli_connect($server,$username,$password,$db);

if($con){
    echo "Connection successful";
    ?>
    
    <script>
    alert("connection successful");
    </script>
    <?php
}else{
    echo "Not successful";
}


?>