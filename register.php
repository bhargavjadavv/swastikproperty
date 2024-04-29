<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

    <link rel="stylesheet" href="registerr.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost", "root", "", "swastik", 3307);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO register (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registration successful!'); window.location = 'index.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>


<body>
    
<div class="wrapper">
    <form action="" method="post">
        <h1>Register</h1>

        <div class="input-box">
            <input type="text" name="name" placeholder="Full Name" required>

            <div class="input-box">
                <input type="text" name="email" placeholder="Email Id" required>

        </div>
        </div>
        <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
    
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox">Remember Me</label>
            <a href="#">Forgot Password?</a>
        </div>

        <button type="submit" class="btn">Register</button>
        <div class="register-link">
            <i>I already have an account <a href="login.php">Login</a></i>
        </div>
    </form>
</div>

</body>
</html>