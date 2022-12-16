<?php

include "db.php";


     $query = "SELECT * from user";
     $result = mysqli_query ($connection, $query);

     if(!$result){

        die("Query failed". mysqli_error());
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

            print_r($row);

        }
    
    
    
    
    ?>

        
        <!-- <input type="text" placeholder="name" name="username">
        <input type="text" placeholder="password" name="password">
        
        <button type="submit" name="submit">submit</button> -->


 </form>
    



</body>

</html>
