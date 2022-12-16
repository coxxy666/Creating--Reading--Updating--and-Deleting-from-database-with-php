<?php

   include "db.php";
   include "fetchingdata.php"

    if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    
   
    
    
    }

    // INSERT INTO `user` (`id`, `username`, `password`) VALUES ('1', 'cos', '123')

    $query = "INSERT INTO user ( username, password) ";
    $query .= "VALUES ('$username', '$password')";



    $result = mysqli_query ($connection, $query);

    if(!$result) {
 
     die("query failed" . mysqli_error );
 
    }

 




?>



<!DOCTYPE html>

<html>

<head>



</head>

<body>


<?php

// while ($row = mysqli_fetch_row($result)) {

//     print_r($row);

// }



// ?>
    <form action="" method="post">

    <?php
    
        while($row = mysqli_fetch_row($result)){

            echo($row);

        }
    
    
    
    
    ?>

        
        <!-- <input type="text" placeholder="name" name="username">
        <input type="text" placeholder="password" name="password">
        
        <button type="submit" name="submit">submit</button> -->


 </form>
    



</body>

</html>
