<?php
include 'db.php';
$id = $_POST['id'];

$sql = "SELECT * from `user` WHERE `id`=$id"; 
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
if($row)
{
    $arr = array('id'=>$row['id'], 'name' => $row['name'], 'email' => $row['email']);
    echo json_encode($arr);
    exit;
}
else
{
    $arr = array('message' =>'something went wrong');
    echo json_encode($arr);
    exit;
}
?>