<?php
    //connecting to database
    $con=mysqli_connect('localhost','root','');
    if($con){
        mysqli_select_db($con,'devine_mercy_hospital');
    }
?>