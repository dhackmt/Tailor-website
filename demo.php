<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMFIT</title>

    <!-- External CSS -->
    <link href="pro.css" rel="stylesheet" type="text/css">
    <link href="nav.css" rel="stylesheet" type="text/css">
    <style>
        /* Additional CSS for styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343a40;
            padding: 10px 0;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }
        .navbar img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        .navbar h5 {
            margin: 0;
            font-size: 18px;
        }
        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .navbar ul li {
            margin-right: 20px;
        }
        .navbar ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }
        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            padding: 20px;
            max-width: 600px;
        }
        .imgbox {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .imgbox img {
            width: 30%;
            border-radius: 5px;
        }
        .text {
            font-size: 16px;
        }
        .f {
            margin-bottom: 20px;
        }
        .box {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            max-width: 400px;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .box form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            box-sizing: border-box;
        }
        .box form input[type="button"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        #x {
            display: block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <img src="icon.jpg" alt=" " class="icon">
        <h5 class="tailored-text">Tailored For You</h5>
        
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="registration.php">Add shop</a></li>
            <li><a href="aboutus.html">About us</a></li>
            <li><a href="admin.html">Admin</a></li>
        </ul>

        <button class="button"><a href="signup.php " target="_parent">log out</a></button>
    </nav>

    <!-- PHP code goes here -->

    <div class="box">
        <div>
            <form name="f1" method="get">
                <h1>Coupon</h1>
                Enter username:
                <input type="text" name="t1"><br><br>
                Enter password:
                <input type="text" name="f"><br><br>
                <input type="button" value="submit" onclick="display()">
            </form><br>
        </div>
        <span id="x"></span>
    </div>

    <!-- External JavaScript -->
    <script src="pro.js"></script>
    <script src="nav.js"></script>
</body>
</html>
