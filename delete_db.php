<?php
include 'db.php';
$id = $_POST['id'];

$sql = "DELETE FROM `user` WHERE `id`=$id";
$result = mysqli_query($con, $sql);
if($result)
{
    $arr = array('status' =>true,'message' =>"Data deleted successfully");
    echo json_encode($arr); 
    exit;
}
else
{
    $arr = array('status' =>false,'message' =>'something went wrong');
    echo json_encode($arr);
    exit;
}
?>