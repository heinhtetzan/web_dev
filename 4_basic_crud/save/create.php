<?php
require_once "conn.php";

if(isset($_GET['addBtn'])){

    //print_r($_GET);
    $message = $_GET['message'];
    $sql = "INSERT INTO to_do (message) VALUES ('$message')";
    //die($sql);
    if(mysqli_query($conn,$sql)){
        header("location:create.php");
    }else{
        echo "Query Fail : ".mysqli_error();
    }

}

?>

<?php include "nav.php" ?>

<form method="get">
    <input type="text" name="message" required>
    <button name="addBtn">Add</button>
</form>