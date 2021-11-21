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
$sql="select * from electronics_table";
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

$sql="Insert into electronics_table (name,email,SELECT1,flat_number,mobile_number,payment) values ('$customer_name','$customer_email','$block','$flat_number','$mobile_number','$payment')";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
echo"Application succesful";
echo "<a href='home.html'>Go back</a>";

mysqli_close($conn);
?>