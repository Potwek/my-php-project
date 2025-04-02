<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #dddeee;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: 100px auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
        }
        td {
            padding: 5px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: green;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: darkgreen;
        }
        .register-link {
            text-align: center;
            margin-top: 15px;
        }
        .register-link a {
            color: green;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php include("SQLConnect.php"); ?>
    
    <div class="container">
        <h2>Student Login</h2>
        <form method="POST" action="login.php">
            <table>
                <tr>
                    <td>Student ID:</td>
                    <td><input type="text" name="uname" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="pwd" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btn_login" value="Login">
                    </td>
                </tr>
            </table>
        </form>
        <div class="register-link">
            Don't have an account? <a href="register_form.php">Register here</a>
        </div>
    </div>
</body>
</html>