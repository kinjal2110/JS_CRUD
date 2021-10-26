<?php
include 'db.php';
$id = isset($_POST['id']) ? $_POST['id']:'';
$name = isset($_POST['name']) ?$_POST['name']:'';
$email = isset($_POST['email']) ?$_POST['email']:'';

$sql = "UPDATE `user` SET `name`='$name',`email`='$email' WHERE `id`=$id";
$result = mysqli_query($con, $sql);
if($result)
{
    $arr = array('status'=>true,'message' =>'Data updated successfully');
    echo json_encode($arr);
    exit;
}
else
{
    $arr = array('status'=>false,'message'=>'something went wrong');
    echo json_encode($arr);
    exit;
}

?>