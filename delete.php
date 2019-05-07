<?php
include('DB.class.php');
$con = mysqli_connect('localhost','axh7593','a031895','axh7593');

if(isset($_GET['ProductID']) && is_numeric($_GET['ProductID'])){
    $ProductID = $_GET['ProductID'];
    $result = mysqli_query($con, "DELETE FROM Project1 WHERE ProductID='$ProductID'") or die(mysqli_error());
    header("Location:admin.php");  
} else{
    header("Location:admin.php");
}
?>