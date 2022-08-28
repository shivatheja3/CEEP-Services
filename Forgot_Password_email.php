<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            position: relative;
            left:42%;
        }
        #input1{
            position: relative;
            left: 43.5%;
        }
        #submit1{
            position: relative;
            left: 47%;
        }
        body{
            border-width:5px;
            border-color:black;
            border-style: solid;
            height:700px;
            border-radius: 10px;
            background-color: gray;
        }
    </style>
</head>
<body>
    <form action="Forgot_Password_email_submit.php" method="POST">
        <h1>Enter your mail</h1>
        <input type="email" name="email" id="input1">
        <br>
        <br>
        <input type="submit" id="submit1" placeholder="Submit">
    </form>
    </script>
</body>
</html>