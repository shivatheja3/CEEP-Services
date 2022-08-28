<?php 
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="mini_project";
    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn){
        echo "Connection failed ".mysqli_connect_error();
        exit;
    }
    $u_email=$_POST['email'];
    $u_pass=$_POST['password'];
    if(isset($_SESSION['u_email'])){
        session_start();
        header('location: Admin_login_page.php');
    }
if(isset($_POST['LOGIN'])){
    $email =$_POST['email'];
    $password = $_POST['password'];
    $check_email = "select email,password,name FROM admin_table";
    $res = mysqli_query($conn, $check_email);
    $fetch = mysqli_fetch_assoc($res);
    if($password==$fetch['password']){
        if($email==$fetch['email']){

    ?>
    <script>
    console.log($u_email,$u_pass);
    </script>
    <?php
        // echo "Email:".$u_email."Password:".$u_pass."<br>";
        echo "<script>alert(`Login successful ${u_email} ${u_pass}`)</script>";
        echo "<script>location.href='Admin_Login_page.php';</script>";
    }
    else{
    ?>
        <script>
    console.log($u_email,$u_pass);
    </script>
    <?php
        // echo "Email:".$u_email."Password:".$u_pass."<br>";
        echo "<script>alert(`Email or password Wrong ${u_email} ${u_pass}`);</script>";
        echo "<script>location.href='Admin_page.php';</script>";
    }
}
    else{
        ?>
        <script>
    console.log($u_email,$u_pass);
    </script>
    <?php
        // echo "Email:".$u_email."Password:".$u_pass."<br>";
        echo "<script>alert(`Email or password Wrong ${u_email} ${u_pass}`);</script>";
        echo "<script>location.href='Admin_page.php';</script>";
    }
}
?>
<style>
        a{
            text-decoration:none;
            border:solid 2px black;
            border-radius:5px;
        }
</style>