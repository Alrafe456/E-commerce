<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css"> <!-- Ensure the correct stylesheet name -->
    <style>
        /* Inline CSS for quick styling, you can move this to style.css */
        body {
            font-family: 'Poppins', sans-serif;
            background: url('bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #444;
            text-align: center;
            padding: 50px;
        }
        .welcome-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        .options {
            margin: 20px 0;
        }
        .btn {
            background-color: #ff6384;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
        }
        .btn:hover {
            background-color: #e05770;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to Our Shop!</h1>
        <p>Join us to explore amazing products and offers.</p>
        
        <div class="options">
            <h2>Sign In</h2>
            <p>If you already have an account, please sign in.</p>
            <button class="btn" onclick="location.href='login.php'">Sign In</button>
        </div>

        <div class="options">
            <h2>Sign Up</h2>
            <p>Don't have an account? Create one now!</p>
            <button class="btn" onclick="location.href='register.php'">Sign Up</button>
        </div>
    </div>
</body>
</html>