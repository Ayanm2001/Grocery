<?php
// session_start();
// include("db.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['email'];
    $pass = $_POST['password'];

    $con = mysqli_connect("localhost", "root", "", "ghome");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "SELECT * FROM user_reg WHERE user_email = '$user' AND user_pass = '$pass'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: index.php");
    } else {
       
        echo "<script type='text/javascript'>alert('Login failed. Invalid username or password');</script>";
      
    }
}
?>
