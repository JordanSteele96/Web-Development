<?php
include_once 'db-connect.php';


if(isset($_POST["submit"])){
    $keyboardName = $_POST['keyboardname'];
    $keyboardPrice = $_POST['price'];
    $keyboardStock = $_POST['stock'];
    $keyboardFileName = $_FILES["file"]["name"];
    $tmpName = $_FILES["file"]["tmp_name"];
    $uploads_dir = '../images/';
    move_uploaded_file($tmpName, $uploads_dir. '/' . $keyboardFileName);

$insertSql = "INSERT into keyboarddata (keyboardName, price, stock, image) VALUES ('$keyboardName','$keyboardPrice','$keyboardStock','$keyboardFileName')";

mysqli_query($conn,$insertSql);

header("Location: ../controlpage.php?insert=success");


}
