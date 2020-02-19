<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$connection = mysqli_connect("localhost","root","","ucg");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// var_dump($_POST);

$driverInfo = $_POST['driver'];


$car = $_POST['car'] ."  " .$_POST['carName'];

$type = $_POST['type'];
$carNum = $_POST['carNum'];
$items = "";
$workers = "";
$workersWork = $_POST['workersWork'];

date_default_timezone_set('Asia/Damascus');

$date = date('d-m-Y h:i:s A', time());   

if($type === '1') {
    for($i=1; $i<100; $i++) {
        if(isset($_POST['item'.$i])) {
            $items .= "<li>".$_POST['item'.$i]."</li>";
        }
    }
    $sql = "INSERT INTO `missions` 
    (`ID`, `Date`, `Vehicle`, `VehicleNum`, `Driver`, `Items`,`Workers`, `Type`, `Custom`, `CustomData`) 
    VALUES 
    (NULL, '{$date}', '{$car}', '{$carNum}', '{$driverInfo}', '{$items}','', '1', '0', '');";
    

} else if ($type === '2') {
    for($i=1; $i<100; $i++) {
        if(isset($_POST['worker'.$i])) {
            $workers .= "<li>".$_POST['worker'.$i]."</li>";
        }
    }
    $sql = "INSERT INTO `missions` 
    (`ID`, `Date`, `Vehicle`, `VehicleNum`, `Driver`, `Items`,`Workers`,`WorkersWork`, `Type`, `Custom`, `CustomData`) 
    VALUES 
    (NULL, '{$date}', '', '', '', '','{$workers}','{$workersWork}', '2', '0', '');";
 
} else if ($type === '3') {
    for($i=1; $i<100; $i++) {
        if(isset($_POST['worker'.$i])) {
            $workers .= "<li>".$_POST['worker'.$i]."</li>";
        }
    }
    $sql = "INSERT INTO `missions` 
    (`ID`, `Date`, `Vehicle`, `VehicleNum`, `Driver`, `Items`,`Workers`,`WorkersWork`, `Type`, `Custom`, `CustomData`) 
    VALUES 
    (NULL, '{$date}', '{$car}', '{$carNum}', '{$driverInfo}', '','{$workers}','{$workersWork}', '3', '0', '');";
    

} else if ($type === '4') {
    for($i=1; $i<100; $i++) {
        if(isset($_POST['item'.$i])) {
            $items .= "<li>".$_POST['item'.$i]."</li>";
        }
    }
    for($i=1; $i<100; $i++) {
        if(isset($_POST['worker'.$i])) {
            $workers .= "<li>".$_POST['worker'.$i]."</li>";
        }
    }


    $sql = "INSERT INTO `missions` 
    (`ID`, `Date`, `Vehicle`, `VehicleNum`, `Driver`, `Items`,`Workers`,`WorkersWork`, `Type`, `Custom`, `CustomData`) 
    VALUES 
    (NULL, '{$date}', '{$car}', '{$carNum}', '{$driverInfo}', '{$items}','{$workers}','{$workersWork}', '4', '0', '');";
  
} else if ($type === '5') {

    $sql = "INSERT INTO `missions` 
    (`ID`, `Date`, `Vehicle`, `VehicleNum`, `Driver`, `Items`,`Workers`, `Type`, `Custom`, `CustomData`) 
    VALUES 
    (NULL, '{$date}', '{$car}', '{$carNum}', '{$driverInfo}', '','', '5', '0', '');";
    


}


mysqli_query($connection,"set names utf8");
if(mysqli_query($connection,$sql)) {

    header("location: http://localhost/ucg-mission/mission.php?id=".mysqli_insert_id($connection));   
} else {
    echo mysqli_error($connection);
}
    

?>