<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = htmlspecialchars($_POST['fullname']);
    $email    = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $confirm  = $_POST['confirm_password'];
    $gender   = $_POST['gender'];
    $dob      = htmlspecialchars($_POST['dob']);
    $phone    = htmlspecialchars($_POST['phone']);
    $address  = htmlspecialchars($_POST['address']);

    if ($password !== $confirm) {
        echo "<h3 style='color:red;'>❌ Passwords do not match.</h3>";
        exit;
    }

    echo "<h2 style='color:green;'>✅ Registration Successful</h2>";
    echo "<b>Full Name:</b> $name<br>";
    echo "<b>Email:</b> $email<br>";
    echo "<b>Gender:</b> $gender<br>";
    echo "<b>Date of Birth:</b> $dob<br>";
    echo "<b>Phone:</b> $phone<br>";
    echo "<b>Address:</b> $address<br>";
    
}
?>
