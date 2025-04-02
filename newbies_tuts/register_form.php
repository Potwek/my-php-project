<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #dddeee;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
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
        }
        input[type="submit"]:hover {
            background-color: darkgreen;
        }
        .login-link {
            text-align: center;
            margin-top: 15px;
        }
        .login-link a {
            color: green;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php include("SQLConnect.php"); ?>
    
    <div class="container">
        <h2>Student Registration</h2>
        <form method="POST" action="register.php">
            <table>
                <tr>
                    <td><input type="text" name="stud_ID" placeholder="Student ID" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="firstName" placeholder="First Name" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="lastName" placeholder="Last Name" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="MI" placeholder="Middle Initial"></td>
                </tr>
                <tr>
                    <td><input type="text" name="course" placeholder="Course" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="yearLevel" placeholder="Year Level" required></td>
                </tr>
                <tr>
                    <td><input type="password" name="password" placeholder="Password" required></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="btn_register" value="Register">
                    </td>
                </tr>
            </table>
        </form>
        <div class="login-link">
            Already have an account? <a href="login_form.php">Login here</a>
        </div>
    </div>
</body>
</html>