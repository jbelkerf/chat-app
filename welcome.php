<?php
// Check if the 'name' parameter is passed in the URL
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']); // Sanitize the input to prevent XSS
} else {
    $name = "Guest"; // Default if no name is passed
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
            background-color: #f0f8ff;
        }
        h1 {
            color: #4CAF50;
            font-size: 3em;
        }
        p {
            color: #333;
            font-size: 1.2em;
        }
        .welcome-container {
            margin-top: 100px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .welcome-button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.2em;
        }
        .welcome-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="welcome-container">
        <h1>Welcome, <?php echo $name; ?>!</h1>
        <p>We're so glad to have you here. Enjoy your stay!</p>
        <a href="index.html" class="welcome-button">Logout</a>
    </div>

</body>
</html>
