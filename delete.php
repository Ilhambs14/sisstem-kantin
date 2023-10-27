<<<<<<< HEAD
<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
$idp = $_GET['id_p'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM menu WHERE id=$id");
$result = mysqli_query($mysqli, "DELETE FROM penjual WHERE id_p=$idp");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:menu.php");
=======
<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM menu WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
>>>>>>> 2c4eb38d59e62c29904bd6f9fa8996b72692ce86
?>