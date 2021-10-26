<?php
require 'db.php';
$name = isset($_POST['name']) ? $_POST['name'] :'';
$email = isset($_POST['email'])?$_POST['email']:'';

$query = "INSERT INTO `user`(`name`, `email`) VALUES ('$name','$email')";
$result = mysqli_query($con,$query);

$lastid = mysqli_insert_id($con);
// $sql = "SELECT * FROM `user` WHERE `id`=$lastid";
// $result = mysqli_query($con,$sql);
// $row = mysqli_fetch_assoc($result);
if($result)
{
    $arr = array('status'=>'success','message'=>'data inserted sucessfully');
    echo json_encode($arr);
    exit;
    
}
else
{
    $arr= array('status' => 'failed', 'message'=>"something went wrong!");
    echo json_encode($arr);
    exit;
}
?>