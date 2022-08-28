<?php
// if(isset($_POST['submit'])){
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="mini_project";
    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn){
        echo "Connection failed ".mysqli_connect_error();
        exit;
    }
    $password1=$_POST['password'];
    $password2=$_POST['confirm_password'];
    echo strlen($password1).'<br>';
    if(strlen($password1)<8){
        echo "Your password must contain atleast 8 characters <a href='Forgot_Password_new_password_submit.php'>Try Again</a>";
        exit;
    }
    $c1=0;
    $c2=0;
    $c3=0;
    $c4=0;
    for($i=0;$i<strlen($password1);$i++){
        if(ord($password1[$i])>=65&&ord($password1[$i])<=90){
            $c1++;
        }
        else if(ord($password1[$i])>=97&&ord($password1[$i])<=122){
            $c2++;
        }
        else if(ord($password1[$i])>=48&&ord($password1[$i])<=57){
            $c3++;
        }
        else{
            $c4++;
        }
    }
    if($c1==0){
        // header("Forgot_Password_new_password_submit.php");
        // echo 'alert("Your password must contain 1 capital letter")';
        echo "Your password must contain 1 capital letter <a href='Forgot_Password_new_password_submit.php'>Try Again</a>";      
        exit;
    }
    if($c2==0){
        echo "Your password must contain atleast 1 small letter <a href='Forgot_Password_new_password_submit.php'>Try Again</a>";
        exit;
    }
    if($c3==0){
        echo "Your password must contain atleast 1 number from 0 to 9 <a href='Forgot_Password_new_password_submit.php'>Try Again</a>";
        exit;
    }
    if($c4==0){
        echo "Your password must contain atleast 1 special character like @#,.><?/%& <a href='Forgot_Password_new_password_submit.php'>Try Again</a>";
        exit;
    }
    $sql="select * from admin_table";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "Error: ".mysqli_error($conn);
        exit;
    }
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $email=$row['email'];
    if($password1==$password2){
        $sql1="delete from Admin_table";
        $result1=mysqli_query($conn,$sql1);
        if(!$result1){
            echo "Error: ".mysqli_error($conn);
            exit;
        }
        echo "ffr";
        $sql2="insert into Admin_table values('$name','$email','$password1')";
        $result2=mysqli_query($conn,$sql2);
        if(!$result2){
            echo "Error: ".mysqli_error($conn);
            exit;
        }
        echo "vrgv <br>";
        echo "Password changed successfully <a href='Admin_page.php'>Login</a><br>";
    }
    else{
        echo "passwords doesnt match <a href='Forgot_Password_new_password_submit.php'>TryAgain</a>";
    }
// }
// else{
//     echo "ghjgj";
//     // header("location:http://localhost/sem3MiniProject/Admin_page.php");
// }
?>
