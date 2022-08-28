<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="p";
$db_name="mini_project";
$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn){
    echo "Connection failed ".mysqli_connect_error();
    exit;
}
$customer_email=$_POST['customer_email'];
$sql="delete from plumbing_table where email='$customer_email'";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
echo"Deletion succesful";
sleep(3);
header("location:http://localhost/sem3MiniProject/fetch_data_into_admin_by_customers.php");

mysqli_close($conn);
?>