<?php
$room=$_POST['room'];
include 'connect.php';
$sql="SELECT msg, stime FROM msgs WHERE room= '$room'";
$html="";

$result= mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result)){
        $html=$html. '<div class="msg_cotainer">';
        $html=$html . $row['msg'];
        $html=$html.'<span class="msg_time">'.$row['stime'].'</span> </div>';

    }
}
echo $html;
?>