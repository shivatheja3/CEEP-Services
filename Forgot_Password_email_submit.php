<?php
$email=$_POST['email'];
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="mini_project";
$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn){
    echo "Connection failed ".mysqli_connect_error();
    exit;
}
$sql="select * from admin_table where email='$email'";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
$c=0;
$row=mysqli_fetch_assoc($result);
if(!$row){
	echo "<script>alert('Your email does not exist');</script>";
	echo "<script>location.href='Forgot_Password_email.php';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=q, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
	<input type="button" value="Send Email"
		onclick="sendEmail()" />
</form>
<script src=
	"https://smtpjs.com/v3/smtp.js">
</script>
<script type="text/javascript">
    function sendEmail() {
	Email.send({
		Host: "smtp.gmail.com",
		Username: "shivatheja.l@gmail.com",
		Password: "cmsqfzcguojvxzks",
		To: '<?php echo $email ?>',
		From: "shivatheja.l@gmail.com",
		Subject: "CEEP Services Forgot Password Link",
		Body: " This is your link localhost/sem3MiniProject/Forgot_Password_new_password_submit.php" ,
	})
    .then(function (message) {
		alert("mail sent successfully")
		});
    }
</script>
</body>
</html>