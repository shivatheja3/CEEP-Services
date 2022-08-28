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
$interest_area=$_POST['select1'];
$block=$_POST['select2'];
$flat_number=$_POST['flat_number'];
$mobile_number=$_POST['mobile_number'];
$sql="select * from registration";
$sql1="select * from workers";
$result1=mysqli_query($conn,$sql1);
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
if(!$result1){
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
while($row=mysqli_fetch_assoc($result1)){
    if($row['email']==$customer_email){
        echo "You are already working you are not allowed to apply";
        echo "<a href='home.html'>Go back</a>";
        exit;
    }
}
$sql="Insert into registration(name,email,interest_area,block,flat_number,mobile_number) values('$customer_name','$customer_email','$interest_area','$block','$flat_number','$mobile_number')";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
echo"Application succesful";
echo "<a href='dummy_home.html'>Go back</a>";
mysqli_close($conn);
?>