<?php
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$uname=$_POST['username'];
$pass=$_POST['password'];
echo "$uname";
$conn = mysqli_connect("localhost","root", "", "demo");
if($conn){
	echo "Connection Successful";
	echo "<br>";
}
else{
	die("Connection Unsuccessful");
}
$query = $conn->prepare("INSERT into login(username,fname,lname,password) values(?,?,?,?)");
$query->bind_param("ssss",$uname,$fname,$lname,$pass);
$query->execute();
echo "Successfully done";
mysqli_close($conn);
?>