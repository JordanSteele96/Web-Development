<?php 
include_once 'includes/db-connect.php'
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

<div class="item-page-section">
<div class="item-page-container">

<?php
$dataFromURL = $_GET['keyboardName'];
$sqlForItemPage = "SELECT * FROM keyboarddata WHERE keyboardName = '$dataFromURL';";
 $resultForItemPage = mysqli_query($conn,$sqlForItemPage);
 $resultCheckForItemPage = mysqli_num_rows($resultForItemPage);
 if ($resultCheckForItemPage > 0){
    while($row = mysqli_fetch_assoc($resultForItemPage )){

        ?>
        <div class= "item-page-image">
            <img src= "images/<?php echo $row['image']?> ">
            </div>
            <div class= "item-page-content">
            <h2 class=""><?php echo $row['keyboardName'];?></h2>
            <h3 class=""><?php echo "£" . $row['price'] ;?></h3>
            </div>

    <?php
    }
}
?>
</div>
</div>


</body>
</html>


