<?php 
include_once 'includes/db-connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Document</title>
</head>
<body>
<?php
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Keyboard Name</th>
<th>Price</th>
<th>Stock</th>
<th>image</th>
<th>Delete</th>
</tr>";

 $sql = "SELECT * FROM keyboarddata;";
 $result = mysqli_query($conn,$sql);
 $resultCheck = mysqli_num_rows($result);

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM keyboarddata WHERE id = '$delete_id'");
}

 if ($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){

            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['keyboardName'] . "</td>";
            echo "<td>" . "£". $row['price'] . "</td>";
            echo "<td>" . $row['stock'] . "</td>";
            echo "<td>" . $row['image'] . "</td>";
            echo "<td><a href='controlpage.php?delete=".$row['id']."'>Delete</a></td>";
            echo "</tr>";

            }
            echo "</table>";
    }


?>


<form action="includes/addkeyboard.php" method="POST" enctype= "multipart/form-data">
<input type="text" name="keyboardname" placeholder="KeyboardName">
<br>
<input type="number" name="price" placeholder="Price">
<br>
<input type="number" name="stock" placeholder="Stock">
<br>
<input type="file" name="file" placeholder="Image">
<br>
<button type="submit" name="submit">Add keyboard</button>


</form>
</body>
</html>