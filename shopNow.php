<?php
$con = mysqli_connect("localhost", "root", "", "ghome");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

    $sql = "SELECT * FROM productlist order by id ASC ;
    $result = mysqli_query($con, $sql);
    $num=mysqli_num_rows($result);
    if($num > 0)
    {
        while($
}

