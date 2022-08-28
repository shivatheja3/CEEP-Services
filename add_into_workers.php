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
$worker_email=$_POST['customer_email'];
$sql="insert into workers(name,email,interest_area,block,flat_number,mobile_number) (SELECT * FROM registration WHERE email='$worker_email');";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
$sql1="delete from registration where email='$worker_email';";
$result1=mysqli_query($conn,$sql1);
if(!$result1){
    echo "Error: ".mysqli_error($conn);
    exit;
}
echo "<script>alert(A person has been succesfully added to workers list);</script>";
echo "<script>location.href='localhost/sem3MiniProject/fetch_data_into_admin_by_unemployed.php';</script>";
mysqli_close($conn);
?>
