<?php

include 'connect.php';

$msg= $_POST['text'];
$room=$_POST['room'];
$ip=$_POST['ip'];

$sql="INSERT INTO  `msgs` (`msg`,`room`,`ip`) VALUES( '$msg','$room','$ip')";

mysqli_query($conn,$sql);
?>
