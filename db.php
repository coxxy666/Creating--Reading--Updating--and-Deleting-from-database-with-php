<?php


$connection = mysqli_connect('localhost','root','',
'user');
   if($connection) {
    echo  ("successful");

     }

   else {

        die("Database failed");
     }



    ?>
