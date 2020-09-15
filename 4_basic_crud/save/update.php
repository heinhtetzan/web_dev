<?php

require_once "conn.php";

$id = $_GET['id'];
$sql = "SELECT * FROM to_do WHERE  id=$id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

if(isset($_GET['updateBtn'])){
    $message = $_GET["message"];
    $id = $_GET['id'];
    $sql = "UPDATE to_do SET message='$message' WHERE id=$id";
    if(mysqli_query($conn,$sql)){
        header("location:read.php");
    }else{
        echo "Update Error : ".mysqli_error();
    }
}

?>

<form method="get">
    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
    <input type="text" name="message" value="<?php echo $row['message'] ?>" required>
    <button name="updateBtn">Update</button>
</form>
