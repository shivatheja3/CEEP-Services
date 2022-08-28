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
$customer_email=$_POST['customer_email'];
$sql1="select * from work_assignments where customer_email='$customer_email';";
$result=mysqli_query($conn,$sql1);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
$row=mysqli_fetch_assoc($result);
if($row){
    $worker_email=$row['worker_email'];
    $sql="update workers set pending_tasks=pending_tasks-1 where email='$worker_email';";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "Error: ".mysqli_error($conn);
        exit;
    }
    $sql2="delete from work_assignments where customer_email='$customer_email';";
    $result=mysqli_query($conn,$sql2);
    if(!$result){
        echo "Error: ".mysqli_error($conn);
        exit;
    }
}
$sql="delete from carpentry_table where email='$customer_email';";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}

echo "<script>alert('Deletion successful');</script>";
echo "<script>location.href='http://localhost/sem3MiniProject/fetch_data_into_admin_by_customers.php';</script>";
mysqli_close($conn);
?>