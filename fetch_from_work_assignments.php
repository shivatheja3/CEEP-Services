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
$sql="select * from work_assignments";
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

<h1>Work allotments</h1>
<table class="table table-striped">
    <thead>
    <th>Worker Email</th>
    <th>Customer Email</th>
    <th>Work</th>
    <th>Unmap customer and worker (if work is completed)</th>
</thead>
<?php
while($row=mysqli_fetch_assoc($result)){
    if($row['worker_email']!=null){
    ?>
    <tr>
    <td>
        <input type="email" name="worker_email" disabled required value=<?php echo $row['worker_email']; ?>>
    </td>
    <td>
       <input type="email" name="customer_email" disabled required value=<?php echo $row['customer_email']; ?>>
    </td>
    <td>
        
       <input type="text" name="work" disabled required value=<?php echo $row['work']; ?>>
    </td>
    <td>
    <form action="unmap.php" method='POST'>

       <input type="text" name="work"  required value=<?php echo $row['work']; ?>>
       <input type="email" name="customer_email"  required value=<?php echo $row['customer_email']; ?>>
       <input type="email" name="worker_email" required value=<?php echo $row['worker_email']; ?>>

       <input type="submit" >  
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
    #home_page{
        position: fixed;
        font-size:20px;
        background-color:orange;
        left:45%;
    }
</style>
    



