<?php
$servername="localhost";
$username = "root";
$password = ""; 
$dbname = "blood_donation"; 
$con=new mysqli($servername, $username, $password, $dbname);
if($con)
echo "Connected successfully";
else
echo "Not Connected";
$stmt=$con->prepare("insert into donors values(?,?,?,?,?)");
$stmt->bind_param("sssss",$n,$e,$ps,$p,$bg);
$n=$_POST["name"];
$e=$_POST["email"];
$ps=$_POST["pass"];
$p=$_POST["phone"];
$bg=$_POST["blood"];
$stmt->execute();
echo "Record Inserted Successfully";
$con-> close();
$stmt->close();

?>
