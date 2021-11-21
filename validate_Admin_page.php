<?php
if(isset($_POST['login'])){
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="mini_project";
    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn){
        echo "Connection failed ".mysqli_connect_error();
        exit;
    }
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select email,password from admin_table";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "Error: ".mysqli_error($conn);
        exit;
    }
    $row=mysqli_fetch_assoc($result);
    if($row['email']==$email){
        if($row['password']==$password){
            if(isset($_POST['remember'])){
            setcookie('email',$email,time()+60*60*2);
            }
            session_start();
            $_SESSION['email']=$email;
            header("location:Admin_login_page.php");
        }
        else{
            echo "Password is incorrect <a href='Admin_page.php'>Try Again</a>";
        }
    }   
    else{
        echo "Email is incorrect <br> <a href='Admin_page.php'>Try Again</a>";
    }
    mysqli_close($conn);
    
}else{
    header("location:Admin_page.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            text-decoration:none;
            border:solid 2px black;
            border-radius:5px;
        }
    </style>
</head>
<body>
</body>
</html>