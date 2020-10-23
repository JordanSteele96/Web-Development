<?php 
include_once 'includes/db-connect.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Keyboards</title>
</head>
<body>
<div class="items-section">
<div class="items-container">
<div class="items-wrapper">


<?php
 $sql = "SELECT * FROM keyboarddata;";
 $result = mysqli_query($conn,$sql);
 $resultCheck = mysqli_num_rows($result);
 if ($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="item">
        <form method="post" action="index.php?action=add&id=<?php echo $row['id']; ?>">
            <img src= "images/<?php echo $row['image']?> ">
            <a href=<?php echo "itempage.php?keyboardName=".urlencode( $row['keyboardName']) ;?>><h2 class="item-title"><?php echo $row['keyboardName'];?></h2></a>
            <h3 class="item-price"><?php echo "£" . $row['price'] ;?></h3>
 
    </div>

    </form>
    <?php
    }
}
?>
</div>
</div>

</div>

<a href ="controlpage.php">Control page</a>
</body>
</html>