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
$work=$_POST["work"];
$customerEmail=$_POST["customer_email"];
$workerEmail=$_POST["worker_email"];
$sql="delete from work_assignments where worker_email='$workerEmail'";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
$sql="update workers set pending_tasks=pending_tasks-1, completed_tasks=completed_tasks+1 where email='$workerEmail' and interest_area='$work'";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}

if($work=='carpentry'){
    $sql="delete from carpentry_table where email='$customerEmail'";
    $result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
}
else if($work=='plumbing'){
    $sql="delete from plumbing_table where email='$customerEmail'";
    $result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
}
else if($work=='electricals'){
    $sql="delete from electricals_table where email='$customerEmail'";
    $result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
}
else if($work=='electronics'){
    $sql="delete from electronics_table where email='$customerEmail'";
    $result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
}
echo "<script>alert(Updated successfully);</script>";
echo "<script>location.href='http://localhost/sem3MiniProject/fetch_from_work_assignments.php';</script>";
// echo "Updated successfully <a href='http://localhost/sem3MiniProject/fetch_from_work_assignments.php'></a>";
?>

<script>
    function sendEmail() {
	Email.send({
		Host: "smtp.gmail.com",
		Username: "shivatheja.l@gmail.com",
		Password: "cmsqfzcguojvxzks",
		To: '<?php echo $customer_email; ?>',
		From: "shivatheja.l@gmail.com",
		Subject: "CEEP Services-Carpentry Registration",
		Body: "Your work has been successfully completed by <?php echo $worker_email;?>",
	})
</script>
