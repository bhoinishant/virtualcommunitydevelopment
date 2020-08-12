<?php 
$con=mysqli_connect("localhost","root","","somproject") or die(mysqli_error());
if((isset($_POST['submit'])))
{
$Name = $con->real_escape_string($_POST['name']);
$Email = $con->real_escape_string($_POST['email']);
$Phone = $con->real_escape_string($_POST['contact']);
$comments = $con->real_escape_string($_POST['text']);
$sql="INSERT INTO contactus (name, email, phone, comments) VALUES ('".$Name."','".$Email."', '".$Phone."', '".$comments."')";
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
   echo "Thank you! We will get in touch with you soon";
	echo "<br><br>";
	echo "<a href='../../afront.html'>Click here</a>";
}
?>