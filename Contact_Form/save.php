<?php

// Google reCAPTCHA API key configuration
$siteKey = '6LeJ_1AlAAAAAAyFSF1snQUheAPVlZhirVK35NEl';
$secretKey = '6LeJ_1AlAAAAAC91UA8e-9GEwFpW67CwFI8YW_Va';

// Data Save on local_host
$fistname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$conn = mysqli_connect("localhost", "root", "", "contact_form") or die("connection failed");
$sql = "INSERT INTO contact_form_table(First_name, Last_name, Email, Mobile) VALUES ('{$fistname}','{$lastname}','{$email}','{$mobile}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://localhost/Contact-Form/contactfrom.php");
mysqli_close($conn);
?>




