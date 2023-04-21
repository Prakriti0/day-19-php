<?php 
header('Content-Type:application/json');
$success = false;
$conn=new mysqli('localhost','root','','jsondb');
if(!$conn){
    die ("connection failed");
}
 $sql = "UPDATE rest set name='manu',address='jhapa',faculty='BBA' WHERE id=6";
    $result = $conn->query($sql);
    if($result === TRUE){
        $success=true;
}
$response = array(
    'status'=>'ok',
    'succsess'=>$success
);
echo json_encode($response);
$conn->close();
?>