<?php 
header('Content-Type:application/json');
$data = array();
$conn=new mysqli('localhost','root','','jsondb');
if(!$conn){
    die ("connection failed");
}
 $sql = "SELECT * FROM rest";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $data[]=$row; 
}
$response = array(
    'status'=>'ok',
    'data' => $data
);
echo json_encode($response);
    }
?>