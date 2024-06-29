<?php
    $connection=mysqli_connect("localhost","root","","latihan_cms_tmj");

    //Check connection
    if (mysqli_connect_errno()){ 
        echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
    }

?>