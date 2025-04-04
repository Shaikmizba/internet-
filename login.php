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

$e=$_POST["email"];
$ps=$_POST["pass"];
$sql="select email, pass from donors where email='{$e}'";
$result=$con->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
if($row["email"]==$e && $row["pass"]==$ps){
echo "Welcome to my website";
}
else{
echo " Your Credentials are wrong, Try again.";
}
}
}
else{
echo "No User Found";
}

$con->close();

?>
