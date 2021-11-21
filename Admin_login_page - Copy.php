<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background:radial-gradient(white,gray);
        }
        #reg{
            position: relative;
            left:550px;
            top:30px;
            border: black 1px solid;
            border-radius: 4px;
            width:140px;
            height:300px;
            padding:15px;
        }
        #cus{
            position: relative;
            left:800px;
            top:30px;
            border: black 1px solid;
            border-radius: 4px;
            width:140px;
            height:300px;
            padding:15px;
        }
        #but1{
            position: relative;
            left:30px;
            text-decoration: none;
            border:1px solid black;
            padding:2px;
            color:black;
            background-color: white;

        }
        #but2{
            text-decoration: none;
            border:1px solid black;
            padding:2px;
            color:black;
            background-color: white;
            position: relative;
            left:20px;
            top:10px;
        }
        #but3{
            text-decoration: none;
            border:1px solid black;
            padding:2px;
            color:black;
            background-color: white;
            position: relative;
            left:30px;
            top:40px;
        }
        #Logout{
            position: relative;
            height:25px;
            top:-50px;
            left:600px;
            text-decoration:none;
            border:1px solid black;
            width:75px;
        }
        #abcd{
            color:black;
            text-decoration:none;
            font-size:25px;
        }
        #worker{
            border: black 1px solid;
            border-radius: 4px;
            width:140px;
            height:300px;
            padding:15px;
            position: relative;
            left:300px;
            top:22px;
        }
        #fgh{
            display:flex;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">WELCOME TO ADMIN PAGE</h1>
    <div id="fgh">
    <div id="worker">
        <h2>Workers</h2>
        <img style="position:relative;left:20px;top:30px;" src="https://img.icons8.com/dusk/110/000000/workers-male.png"/>
        <br><br>
        <a href="" id="but3">Check it now</a>
    </div>
    <div id="reg">
        <h2>Registrations</h2>
        <img src="https://img.icons8.com/external-flatart-icons-lineal-color-flatarticons/150/000000/external-applicants-management-flatart-icons-lineal-color-flatarticons.png"/>
        <br>
        <br>
        <a id="but1" href="">
            Check it now
        </a>
    </div>
    <div id="cus">
        <h2>Customers</h2>
        <img src="https://img.icons8.com/doodle/150/000000/group.png"/>
        <a id="but2" href="http://localhost/sem3MiniProject/fetch_data_into_admin_by_customers.php">
            Check it now
        </a>
    </div>
    <div id="Logout">
    <?php
    echo "<a href='Logout.php' id='abcd'>Logout</a>";
    ?>
    </div>
    </div>
</body>
</html>