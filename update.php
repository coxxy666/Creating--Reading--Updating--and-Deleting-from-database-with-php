<?php
include "db.php"


if(isset($_POST['sumbit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE user SET ";
    $query .= "username = '$username' ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = '$id' ";


        $result = mysqli_query($connection, $query);

        if(!$result) {

            die("QUERY FAILED")

        }



}



?>
