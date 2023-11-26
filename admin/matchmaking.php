<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 100px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            margin: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Home Page</h1>
    <a href="admin_login.php" class="button">Admin Panel</a>
    <a href="index.php" class="button">User Panel</a>
</body>
</html>
