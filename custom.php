<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$connection = mysqli_connect("localhost","root","","ucg");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// var_dump($_POST);

$id = $_POST['id'];
$custom = $_POST['custom'];

$sql = "UPDATE `missions` SET `Custom` = '1', `CustomData` = '{$custom}' WHERE `missions`.`ID` = {$id};";


mysqli_query($connection,"set names utf8");
if(mysqli_query($connection,$sql)) {

    header("location: http://localhost/ucg-mission/mission.php?id=".$id);   
} else {
    echo mysqli_error($connection);
}
    

?>