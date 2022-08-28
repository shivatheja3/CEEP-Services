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
$customer_name=$_POST['customer_name'];
$customer_email=$_POST['customer_email'];
$block=$_POST['select1'];
$flat_number=$_POST['flat_number'];
$mobile_number=$_POST['mobile_number'];
$payment=$_POST['payment'];
$sql="select * from carpentry_table";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
while($row=mysqli_fetch_assoc($result)){
    if($row['email']==$customer_email){
        echo "Application already existing we will get you seen";
        echo "<a href='dummy_home.html'>Go back</a>";
        exit;
    }
}
$sql="Insert into carpentry_table (name,email,SELECT1,flat_number,mobile_number,payment) values ('$customer_name','$customer_email','$block','$flat_number','$mobile_number','$payment')";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
$sql="select * from workers where interest_area='carpentry' order by pending_tasks,completed_tasks;";
$work='carpentry';
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
$row=mysqli_fetch_assoc($result);
if($row){
	$worker_email=$row['email'];
	$sql2="insert into work_assignments(worker_email,customer_email,work) values('$worker_email','$customer_email','$work')";
	$result=mysqli_query($conn,$sql2);
    if(!$result){
        echo "Error: ".mysqli_error($conn);
        exit;
    }
	$sql1="update workers set pending_tasks=pending_tasks+1 where email='$worker_email' and interest_area='carpentry';";
    $result=mysqli_query($conn,$sql1);
    if(!$result){
		echo "Error: ".mysqli_error($conn);
        exit;
    }
	$sql="update carpentry_table set work_assigned='yes' where email='$customer_email'";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            echo "fdsnfs";
        }
	?>
	<form method="post">
    <input type="button" value="Get mail" onclick="sendEmail()" />
    </form>
    <script src="https://smtpjs.com/v3/smtp.js">
    </script>

    <script type="text/javascript">
        function sendEmail() {
            Email.send({
                Host: "smtp.gmail.com",
                Username: "shivatheja.l@gmail.com",
                Password: "cmsqfzcguojvxzks",
                To: '<?php echo $customer_email; ?>',
                From: "shivatheja.l@gmail.com",
                Subject: "CEEP Services-Carpentry Registration",
                Body: "Your work is assigned to <?php echo $worker_email?>",

            })
            Email.send({
                Host: "smtp.gmail.com",
                Username: "shivatheja.l@gmail.com",
                Password: "cmsqfzcguojvxzks",
                To: '<?php echo $worker_email; ?>',
                From: "shivatheja.l@gmail.com",
                Subject: "CEEP Services-Carpentry Registration",
                Body: "You are assigned to <?php echo $customer_email?>",
            })
                .then(function (message) {
				    alert('Application succesful and check your mail worker has been successfully assigned');
                    location.href='submit_carpentry_1.php';
                });
        }
    </script>
<?php
exit;
}
else{
?>
<p>Successfully Registered</p>
<a href="dummy_home.html">Go Back</a>
<form method="post">
	<input type="button" value="Get Mail" onclick="sendEmail()" />
</form>
<script src="https://smtpjs.com/v3/smtp.js"></script>

<script type="text/javascript">
	function sendEmail() {
	Email.send({
		Host: "smtp.gmail.com",
		Username: "shivatheja.l@gmail.com",
		Password: "cmsqfzcguojvxzks",
		To: '<?php echo $customer_email; ?>',
		From: "shivatheja.l@gmail.com",
		Subject: "CEEP Services-Carpentry Registration",
		Body: "Thank you for registering we will get back you soon",
	})
		.then(function (message) {
		alert("Mail sent successfully")
		});
	   location.replace("C:\xampp\htdocs\sem3MiniProject\dummy_home.html");
    }
</script>

<?php
}
mysqli_close($conn);
?>