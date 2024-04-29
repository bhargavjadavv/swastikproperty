<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <link rel="stylesheet" href="loginn.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = mysqli_connect("localhost", "root", "", "swastik", 3307);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get user input
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Query to check if the provided credentials match any user in the database
    $sql = "SELECT * FROM register WHERE email = '$email'";

    $result = mysqli_query($conn, $sql);

    // Check if a user with the provided email exists
    if (mysqli_num_rows($result) > 0) {
        // User exists, fetch user data
        $row = mysqli_fetch_assoc($result);
        
        // Verify password
        if (password_verify($password, $row['password'])) {
            // Password is correct, set a session variable to indicate login
            $_SESSION["loggedin"] = true;
            
            // Redirect to home.php
            echo "<script>alert('Login successful!'); window.location = 'index.php';</script>";
            mysqli_close($conn);
            exit;
        } else {
            // Password is incorrect
            mysqli_close($conn);
            echo "<script>alert('Incorrect password. Please try again.'); window.location = 'login.php';</script>";
            exit;
        }
    } else {
        // User does not exist
        mysqli_close($conn);
        echo "<script>alert('User does not exist. Please register.'); window.location = 'register.php';</script>";
        exit;
    }
}
?>


<body>

<div class="wrapper">
    <form method="post" >
        <h1>Login</h1>
        <div class="input-box">
            <input type="email" name="email" placeholder="Username & E-mail" required>
            <i class="bx bxs-user"></i>
        </div>
        <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox">Remember Me</label>
            <a href="#">Forgot Password?</a>
        </div>

        <button type="submit" class="btn">Login</button>
        <div class="register-link">
            <i>Don't have an account? <a href="register.php">Register </a></i>
        </div>
    </form>
</div>

</body>
</html>