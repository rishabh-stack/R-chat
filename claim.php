<?php
$room= $_POST['room'];

if (strlen($room)>20 or strlen($room)<2)
{
    
    echo '<script>alert("Please choose a name between 2 to 20 characters");window.location="http://localhost/talk/";</script>'; 
}
else if(!ctype_alnum($room))
{

    echo '<script>alert("Please choose a alphanumeric room name");window.location="http://localhost/talk/";</script>'; 

}
else {
    include 'connect.php';
     echo "lets chat";
}
$sql="SELECT * FROM `rooms` WHERE roomname ='$room'";
$result =mysqli_query($conn,$sql);
if($result){
    if(mysqli_num_rows($result)>0){
        echo '<script>alert("Please choose a different room name.This room name already exits");window.location="http://localhost/talk/";</script>'; 
 }
 else{
 $sql="INSERT INTO `rooms` (`roomname`) VALUES ('$room')";
 if(mysqli_query($conn,$sql))
 {
    echo '<script>alert("your chat room has been created successfully");window.location="http://localhost/talk/rooms.php?roomname=' .$room.'";</script>'; 
 }
}}

?>