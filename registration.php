<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost', 'root', '', 'ghome');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO user_reg (user_name, user_email, user_phone, user_pass) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $phonenumber, $password);

        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            echo "<script type='text/javascript'>alert('Registration successful');</script>";
            echo "<script>window.location = './index.html';</script>";
            exit();
        } else {
            // Handle query execution errors
            echo "Error: " . $stmt->error;
            $stmt->close();
            $conn->close();
        }
    }
}
?>
