<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="content.css">
</head>

<div class="container">
<?php
    require 'includes/db.script.php';	
    $sql = "SELECT * FROM device;";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result))
    {
    ?>
        <div class="card <?php echo $row["status"]; ?>"> 
            <h3><?php echo $row["name"]; ?></h3>
            <img class="spacing" src="img/<?php echo $row["status"]; ?>.png">
            <p><?php echo $row["ip"]; ?></p>
            <p><?php echo $row["status"]; ?></p>
        </div> 
<?php
    }
?>
</div>
