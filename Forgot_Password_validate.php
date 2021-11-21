<?php
if(isset($_POST['submit'])){
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
    $password1=$_POST['pass'];
    $password2=$_POST['confirm_pass'];
    $sql="select * from admin_table";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "Error: ".mysqli_error($conn);
        exit;
    }
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    if($row['email']==$email){
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
            echo "vrgv";
        }
        else{
            echo "passwords doesnt match <a href='Forgot_Password.php'>TryAgain</a>";
        }
    }
    else{
        echo "Email doesnt match <a href='Forgot_Password.php'>TryAgain</a>";
    }
    header("location:http://localhost/sem3MiniProject/Admin_page.php");
    // echo
}
else{
    header("loaction:Admin_page.php");
}
?>
