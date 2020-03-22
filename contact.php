<?php
$con=mysqli_connect('localhost','root','','sketchfox');

$Name=$_POST['Name'];
$Email=$_POST['Email Id'];
$Subject=$_POST['Subject'];
$Message=$_POST['Message'];

$sql = "INSERT INTO `contact list` (`Sr. No.`, `Name`, `Email Id`, `Subject`, `Message`) VALUES ('0', '$Name', '$Email', '$Subject', '$Message')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
?>