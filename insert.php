<?php 
header('Content-Type:application/json');
$success = false;
$conn=new mysqli('localhost','root','','jsondb');
if(!$conn){
    die ("connection failed");
}
 $sql = "INSERT INTO rest (id,name,address,faculty)VALUES(null,'Pragya','Itahari','Bim')";
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