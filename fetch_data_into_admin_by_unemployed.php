<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
$sql="select * from registration order by interest_area";

$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
?>
<div id="home_page">
        <?php
        echo "<a href='http://localhost/sem3MiniProject/Admin_login_page.php'>Home</a>";
        ?>
    </div>
<h1>Unemployed Applications</h1>
<table class="table table-striped">
    <thead>
        <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Interest Area</th>
    <th>Block</th>
    <th>Flat Number</th>
    <th>Mobile Number</th>
    <th>Add into Workers List</th>
    </tr>
    </thead>
    <?php
    $c1=0;
    while($row=mysqli_fetch_assoc($result)){
        $c1++;
    if($row['email']!=null){
    ?>
    <tr>
    <td>
    <?php
        echo $row['name'];
    ?>
    </td>
    <td>
    <?php
        echo $row['email'];
    ?>
    </td>
    <td>
    <?php
        echo $row['interest_area'];
    ?>
    </td>
    <td>
    <?php
        echo $row['block'];
    ?>
    </td>
    <td>
    <?php
        echo $row['flat_number'];
    ?>
    </td>
    <td>
    <?php
        echo $row['mobile_number'];
    ?>
    </td>
    
    <td>
    <form method='POST' action='add_into_workers.php'>
        Email:<input type="email" name="customer_email" required value=<?php echo $row['email']; ?>>
        Submit:<input type="submit">
    </form>
    </td>
    </tr>
    <?php
    }
}
?>
</table>
<style>
    th,tr,td{
        border:1px solid black;
    }
    table,h1{
        position: relative;
        top:30px;
    }
    #home_page{
        position: fixed;
        font-size:20px;
        background-color:orange;
        left:45%;
    }
</style>