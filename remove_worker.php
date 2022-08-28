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
$sql="delete from workers where email='$worker_email'";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
$sql="select * from work_assignments where worker_email='$worker_email';";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
$sql="delete from work_assignments where worker_email='$worker_email';";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
echo "Worker has been successfully removed";
echo "<a href='http://localhost/sem3MiniProject/fetch_data_into_admin_of_workers.php'>Go back</a>"
?>
