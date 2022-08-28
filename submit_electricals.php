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
$sql="select * from electricals_table";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
while($row=mysqli_fetch_assoc($result)){
    if($row['email']==$customer_email){
        echo "Application already existing we will get you seen";
        echo "<a href='home.html'>Go back</a>";
        exit;
    }
}
$sql="Insert into electricals_table (name,email,SELECT1,flat_number,mobile_number,payment) values ('$customer_name','$customer_email','$block','$flat_number','$mobile_number','$payment')";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
echo"Application succesful";
echo "<a href='dummy_home.html'>Go back</a>";
?>
<form method="post">
    <!-- <p>If your email id is correct please click Go back or else please correct and click on Go back</p> -->
    <!-- <input type="email" name="previous_email" value=<?php echo $customer_email; ?>>
    <input type="email" name="correct_email"  value=<?php echo $customer_email; ?>> -->
	<input type="button" value="Get Mail"
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
		To: '<?php echo $customer_email; ?>',
		From: "shivatheja.l@gmail.com",
		Subject: "CEEP Services-Electricals Registration",
		Body: "Thank you for registering we will get back you soon",
	})
		.then(function (message) {
		alert("mail sent successfully")
		});
        // window.location.href='C:\xampp\htdocs\sem3MiniProject\dummy_home.html';
	//    location.replace("C:\xampp\htdocs\sem3MiniProject\dummy_home.html");
    }
</script>

<?php
mysqli_close($conn);
?>