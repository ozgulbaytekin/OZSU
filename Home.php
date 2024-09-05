<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: relative;
        }
        .header {
            background-color: white;
            padding: 20px;
            text-align: right;
        }
        .logo-container {
            text-align: center;
            margin-right: 20px;
        }
        .logo-image {
            max-width: 400px;
            height: auto;
            display: block;
            margin-bottom: 20px;
        }
        .container {
            text-align: center;
        }
        h1 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .btn {
            padding: 15px 30px;
            font-size: 20px;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        #tm-video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }
        #tm-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
<div id="tm-video-container">
    <video autoplay muted loop id="tm-video">
        <source src="Waterfall Clip.mp4" type="video/mp4">
    </video>
</div>

<div class="container">

    <div class="logo-container">
        <img src="ÖZSU logo.png" alt="ÖZSU Logo" class="logo-image">
    </div>
    <div class="btn-container">
        <button class="btn" onclick="window.location.href = '/ozsu/LoginRegister/register.php';">Register</button>
        <button class="btn" onclick="window.location.href = '/ozsu/LoginRegister/login.php';">Log In</button>
    </div>
</div>
</body>
</html>
