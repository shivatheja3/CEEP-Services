
<style>
    th,
    tr,
    td {
        border: 1px solid black;
    }
</style>
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
$work=$_POST['interest_area'];
if($work=='carpentry'){
    $sql='select * from work_assignments where work="carpentry"';
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "Error: ".mysqli_error($conn);
        exit;
    }
    while($row=mysqli_fetch_assoc($result)){
        if($row['customer_email']==$customer_email){
            echo "This customer is already alloted with the worker<a href='http://localhost/sem3MiniProject/fetch_data_into_admin_by_customers.php'>Go back</a>";
            exit;
        }
    }
    $sql="select * from workers where interest_area='carpentry' order by pending_tasks,completed_tasks;";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "Error: ".mysqli_error($conn);
        exit;
    }
    $row=mysqli_fetch_assoc($result);
    $worker_email=$row['email'];
    if(!$row){
        echo "There are no workers in carpentry dept <a href='http://localhost/sem3MiniProject/fetch_data_into_admin_by_customers.php'>Go back</a>";
    }
    else{
        $sql="update carpentry_table set work_assigned='yes' where email='$customer_email'";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            echo "fdsnfs";
        }
        $sql1="update workers set pending_tasks=pending_tasks+1 where email='$worker_email' and interest_area='carpentry';";
        $result=mysqli_query($conn,$sql1);
        if(!$result){
            echo "fdsnfs";
        }
        $sql2="insert into work_assignments values('$worker_email','$customer_email','$work')";
        $result=mysqli_query($conn,$sql2);
        if(!$result){
            echo "fdsnfs";
        }
        echo "Worker is successfully assigned to a customer <a href='http://localhost/sem3MiniProject/fetch_data_into_admin_by_customers.php'>Go back</a>";
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
                alert("Mail sent successfully and a worker has been assigned to you");
            });
    }
</script>

<?php
    }
}
else if($work=='electricals'){
    $sql='select * from work_assignments where work="electricals"';
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "Error: ".mysqli_error($conn);
        exit;
    }
    while($row=mysqli_fetch_assoc($result)){
        if($row['customer_email']==$customer_email){
            echo "This customer is already alloted with the worker<a href='http://localhost/sem3MiniProject/fetch_data_into_admin_by_customers.php'>Go back</a>";
            exit;
        }
    }
    $sql="select * from workers where interest_area='electricals' order by pending_tasks,completed_tasks;";
    $result=mysqli_query($conn,$sql); 
    if(!$result){
        echo "Error: ".mysqli_error($conn);
        exit;
    }
    $row=mysqli_fetch_assoc($result);
    $worker_email=$row['email'];
    if(!$row){
        echo "There are no problems in electronics <a href='http://localhost/sem3MiniProject/fetch_data_into_admin_by_customers.php'>Go back</a>";
    }
    else{
        $sql="update electricals_table set work_assigned='yes' where email='$customer_email'";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            echo "fdsnfs";
        }
        ?>
        <?php
        $sql1="update workers set pending_tasks=pending_tasks+1 where email='$worker_email' and interest_area='electricals';";
        $result=mysqli_query($conn,$sql1);
        if(!$result){
            echo "fdsnfs";
        }
        $sql2="insert into work_assignments values('$worker_email','$customer_email','$work')";
        $result=mysqli_query($conn,$sql2);
        if(!$result){
            echo "fdsnfs";
        }
        echo "Worker is successfully assigned to a customer <a href='http://localhost/sem3MiniProject/fetch_data_into_admin_by_customers.php'>Go back</a>";
        ?>
<form method="post">
    <input type="button" value="Send mail" onclick="sendEmail()" />
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
                alert("mail sent successfully")
            });
    }
</script>

<?php
    }
}
else if($work=='plumbing'){
    $sql='select * from work_assignments where work="carpentry"';
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "Error: ".mysqli_error($conn);
        exit;
    }
    while($row=mysqli_fetch_assoc($result)){
        if($row['customer_email']==$customer_email){
            echo "This customer is already alloted with the worker<a href='http://localhost/sem3MiniProject/fetch_data_into_admin_by_customers.php'>Go back</a>";
            exit;
        }
    }
    $sql="select * from workers where interest_area='plumbing' order by pending_tasks,completed_tasks";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "Error: ".mysqli_error($conn);
        exit;
    }
    $row=mysqli_fetch_assoc($result);
    $worker_email=$row['email'];
    if(!$row){
        echo "There are no problems in plumbing <a href='http://localhost/sem3MiniProject/fetch_data_into_admin_by_customers.php'>Go back</a>";
    }
    else{
        $customer_email=$_POST['customer_email'];
        $sql="update plumbing_table set work_assigned='yes' where email='$customer_email'";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            echo "fdsnfs";
        }
        ?>
        <?php
        $sql1="update workers set pending_tasks=pending_tasks+1 where email='$worker_email' and interest_area='plumbing';";
        $result=mysqli_query($conn,$sql1);
        if(!$result){
            echo "fdsnfs";
        }
        $sql2="insert into work_assignments values('$worker_email','$customer_email','$work')";
        $result=mysqli_query($conn,$sql2);
        if(!$result){
            echo "fdsnfs";
        }
        echo "Worker is successfully assigned to a customer <a href='http://localhost/sem3MiniProject/fetch_data_into_admin_by_customers.php'>Go back</a>";
        ?>
<form method="post">
    <input type="button" value="Send mail" onclick="sendEmail()" />
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
                alert("mail sent successfully")
            });
    }
</script>

<?php
    }
}
else{
    $sql='select * from work_assignments where work="electronics"';
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "Error: ".mysqli_error($conn);
        exit;
    }
    while($row=mysqli_fetch_assoc($result)){
        if($row['customer_email']==$customer_email){
            echo "This customer is already alloted with the worker<a href='http://localhost/sem3MiniProject/fetch_data_into_admin_by_customers.php'>Go back</a>";
            exit;
        }
    }
    $sql="select * from workers where interest_area='electronics' order by pending_tasks,completed_tasks;";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "Error: ".mysqli_error($conn);
        exit;
    }
    $row=mysqli_fetch_assoc($result);
    if(!$row){
        echo "There are no workers in electronics <a href='http://localhost/sem3MiniProject/fetch_data_into_admin_by_customers.php'>Go back</a>";
    }
    else{
        $sql="update electronics_table set work_assigned='yes' where email='$customer_email'";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            echo "fdsnfs";
        }
        ?>
<?php
        $sql2="insert into work_assignments values('$worker_email','$customer_email','$work')";
        $result=mysqli_query($conn,$sql2);
        if(!$result){
            echo "fdsnfs";
        }
        echo "Worker is successfully assigned to a customer <a href='http://localhost/sem3MiniProject/fetch_data_into_admin_by_customers.php'>Go back</a>";
        ?>
<form method="post">
    <input type="button" value="Send mail" onclick="sendEmail()" />
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
                alert("mail sent successfully")
            });
    }
</script>

<?php
    }
}
?>
</tr>
</table>