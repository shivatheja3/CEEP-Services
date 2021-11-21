<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
    <style>
        #admin_login_image {
            width: 600px;
            height: 500px;
            opacity: 0.4;
        }

        marquee {
            height: 50px;
            font-size: 20px;

        }

        #admin_login_page {
            display: flex;
        }

        #right_part {
            position: relative;
            top: 200px;
            left: 150px;
            border: 2px solid black;
            width: 300px;
            height: 250px;
            padding: 5px;
            display: inline;
        }

        #left_part {
            position: relative;
            left: 50px;
            top: 50px;
        }
    </style>
</head>

<body>
    <marquee behavior="" direction="left" bgcolor="orange">Welcome to Admin page </marquee>
    <button onclick="func()">Home Page</button>
    <div id="admin_login_page">
        <span id="left_part">
            <img src="Capture.PNG" alt="" id="admin_login_image">
        </span>
        <span id="right_part">
            <h2>Login</h2>
            <form action="validate_Admin_page.php" method="POST">
            <label for="Username">Username</label><br>
            <input type="text" style="width:150px;height:20px;" id="input_1" name="email">
            <br>
            <label for="Username">Password</label><br>
            <input type="password" style="width:150px;height:20px;" id="input_2" name="password">
            <a href="Forgot_Password.php">Forgot Password?</a>
            <br>
            <br>
            <input type="checkbox" name="remember">Remember Me
            <br>
            <br>
            <input type="submit" value="login" name="login">
            </form>
        </span>
    </div>
    <script>
        function func(){
            window.location.replace("home.html");
        }
    </script>
</body>

</html>