<?php
$servername ='127.0.0.1';
$username ='root';
$password ='';

// Create connection
$conn = new mysqli('127.0.0.1','root','');

// Check connection
if (!$conn) {
  echo"not connected to server";
}
echo "Connected successfully";
if(!mysqli_select_db($conn,'m56assignment'))
{
	echo"database not selected";
}
$C_number= $_POST['Card_Number'];
$E_date= $_POST['Expiration_Date'];
$C_code= $_POST['Cv_code'];
$C_holder= $_POST['Card_Holder'];

$sql =" insert into payment(Card_Number,Expiration_Date,Cvc,CardHolder_Name) values(
			'$C_number','$E_date','$C_code','$C_holder')";

if(!mysqli_query($conn,$sql))
{
	echo"Not Inserted";
}
else
{
	echo"inserted";
}
header("refresh:2; url=m56asg.html");
?>