<?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "invoice");
    // Check connection
    if(!$link){
        die("ERROR: Could not connect. " . mysqli_error($link));
    }

    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $pass   = $_POST['pass'];

     $query = "INSERT INTO sign_up (name,email,pass) VALUES ('$name','$email', '$pass')";

if(mysqli_query($link,$query))
 {
    echo "<script>alert('SUCCESSFULLY REGISTER PLEASE LOGIN');</script>";
    header('Location: /home.php');
}
else
 {
 echo "<script>alert('FAILED TO REGISTER');</script>";
 }
    // Close connection
    mysqli_close($link);
?>
