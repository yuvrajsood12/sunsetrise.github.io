<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "sunsetrise";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
if(isset($_POST['submit']))
{
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $age = $_POST['age'];
	 $city = $_POST['city'];
	 $contact = $_POST['contact'];
	 $sql = "INSERT INTO contact (name,email,age,city,contact)
	 VALUES ('$name','$email','$age','$city','$contact')";
	 if (mysqli_query($conn, $sql)) {
		//echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
    <style>
        body{
            background-image: url('images/bmx.jpg');
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;color:white;font-size:55px;margin-top:17%;">THANKS</h2>
    <h2 style="text-align: center;color:white;font-size:55px;">FOR CONTACTING US</h2>
</body>
</html>