<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

date_default_timezone_set("Asia/Kolkata");
$datetime = date("Y-m-d H:i:s");

$conn = mysqli_connect("localhost", "root", "", "portfolio");
$ins = "insert into contact (name, email, message, datetime) values ('$name', '$email', '$message', '$datetime')";
if(mysqli_query($conn, $ins)) {
    header("location: index.php?success=1");
} else {
    echo 'Something went wrong';
}
?>