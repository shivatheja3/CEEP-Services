<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<?php
if(isset($_SESSION['name'])){
    
}
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="mini_project";
$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn){
    echo "Connection failed ".mysqli_connect_error();
    exit;
}
$sql="select * from carpentry_table order by work_assigned";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
?>
<div id="home_page" style="background-color:skyblue;width:100%;">
        <?php
        echo "<a href='http://localhost/sem3MiniProject/Admin_login_page.php'>Home</a>";
        ?>
    </div>
<h1>Carpentry Service Registrations</h1>
<table class="table table-striped">
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Delete</th>
    <th>Status</th>
    <th>Assign the work</th>
    </tr>
<?php
while($row=mysqli_fetch_assoc($result)){
    if($row['email']!=null){
    ?>
    <tr>
    <td>
    <?php
        echo $row['id'];
    ?>
    </td>
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
   <form method='POST' action='delete_application_carpentry.php'>
        Email:<input type="email" name="customer_email" required value=<?php echo $row['email']; ?>>
        <input type="submit">
    </form>
    </td>
    <td id="work_assigned">
        <?php
           echo $row['work_assigned'];
        ?>
    </td>
    <td>
        <form action="http://localhost/sem3MiniProject/assign_worker.php" method='POST'>
        Email:<input type="email" name="customer_email" required value=<?php echo $row['email']; ?>>
        <input type="text" name="interest_area" required value=<?php echo "carpentry"; ?>>
    <input type="submit" >   
        </form>
    </td>
    </tr>
    <?php
    }
}
?>
</table>
<h1>Plumbing Service Registrations</h1>
<?php
$sql="select * from plumbing_table";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
?>
<style>
    th,tr,td{
        border:1px solid black;
    }
</style>
<table class="table table-striped">
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Delete</th>
    <th>Status</th>
    <th>Assign the work</th>
    </tr>
<?php
while($row=mysqli_fetch_assoc($result)){
    if($row['email']!=null){
    ?>
    <tr>
    <td>
    <?php
        echo $row['id'];
    ?>
    </td>
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
<form method='POST' action='delete_application_plumbing.php'>
        Email:<input type="email" name="customer_email" required value=<?php echo $row['email']; ?>>
        <input type="submit">
    </form>
</td>
<td>
        <?php
           echo $row['work_assigned'];
        ?>
    </td>
    <td>
        <form action="http://localhost/sem3MiniProject/assign_worker.php" method='POST'>
        Email:<input type="email" name="customer_email" required value=<?php echo $row['email']; ?>>
        <input type="text" name="interest_area" required value=<?php echo "plumbing";?>>
    <input type="submit" >   
        </form>
</td>
</tr>
    <?php
    }
}
?>
</table>
<h1>Electronics Service Registrations</h1>
<?php
$sql="select * from electronics_table";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
?>

<h1><table class="table table-striped">
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Delete</th>
    <th>Status </th>
    <th>Assign the work</th>
    </tr>
<?php
while($row=mysqli_fetch_assoc($result)){
    if($row['email']!=null){
    ?>
    <tr>
    <td>
    <?php
        echo $row['id'];
    ?>
    </td>
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
<form method='POST' action='delete_application_electronics.php'>
        Email:<input type="email" name="customer_email" required value=<?php echo $row['email']; ?>>
        <input type="submit">
    </form>
</td>
<td>
        <?php
           echo $row['work_assigned'];
        ?>
    </td>
    <td>
        <form action="http://localhost/sem3MiniProject/assign_worker.php" method='POST'>
        Email:<input type="email" name="customer_email" required value=<?php echo $row['email']; ?>>
        <input type="text" name="interest_area" required value=<?php echo "electronics"; ?>>
    <input type="submit" >   
        </form>
</td>
</tr>
    <?php
    }
}
?>
</table>
<br>
<h1>Electricals Service Registrations</h1>
<?php
$sql="select * from electricals_table";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
?>
<table class="table table-striped">
    <tr>
        <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Delete</th>
    <th>Status </th>
    <th>Assign the work</th>
    </tr>
<?php
while($row=mysqli_fetch_assoc($result)){
    if($row['email']!=null){
    ?>
    <tr>
    <td>
    <?php
        echo $row['id'];
    ?>
    </td>
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
    ?>
    <form method='POST' action='delete_application_electricals.php'>
        Email:<input type="email" name="customer_email" required value=<?php echo $row['email']; ?>>
        <input type="submit">
    </form>
    <?php
    ?>
</td>
<td>
        <?php
           echo $row['work_assigned'];
        ?>
    </td>
    <td>
        <form action="http://localhost/sem3MiniProject/assign_worker.php" method='POST'>
        Email:<input type="email" name="customer_email" required value=<?php echo $row['email']; ?>>
        <input type="text" name="interest_area" required value=<?php echo "electricals"; ?>>
    <input type="submit" >   
        </form>
</td>
</tr>
    <?php
    }
}
?>
</table>
<?php
mysqli_close($conn);
?>
<style>
    table,h1{
        position: relative;
        top:30px;
    }
    #home_page{
        position: fixed;
        font-size:20px;
        background-color:orange;
        left:85%;
    }
</style>