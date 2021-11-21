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

$sql="select * from carpentry_table";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
?>
<h1>Carpentry Service Registrations</h1>
<table>
    <tr>
    <th>Customer_Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Block</th>
    <th>Flat Number</th>
    <th>Mobile Number</th>
    <th>Payment Mode</th>
    <!-- <th>Applied on</th> -->
    <th>Delete</th>
    </tr>
<?php
$c1=0;
while($row=mysqli_fetch_assoc($result)){
    $c1++;
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
        echo $row['SELECT1'];
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
    <?php
        echo $row['payment'];
   ?>
   </td>
   <td>
   <form method='POST' action='delete_application_carpentry.php'>
        Email:<input type="email" name="customer_email" required value=<?php echo $row['email']; ?>>
        Submit:<input type="submit">
    </form>
    </td>
    </tr>
    <?php
    }
}
if($c1==0){
    echo "There are no problems regarding electrical";
}
else{
    echo "There are some problems";
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
<table>
    <tr>
        <th>Customer_Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Block</th>
    <th>Flat Number</th>
    <th>Mobile Number</th>
    <th>Payment Mode</th>
    <th>Delete</th>
    </tr>
<?php
$c2=0;
while($row=mysqli_fetch_assoc($result)){
    $c2++;
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
        echo $row['SELECT1'];
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
    <?php
        echo $row['payment'];
?>
</td>
<td>
<form method='POST' action='delete_application_plumbing.php'>
        Email:<input type="email" name="customer_email" required value=<?php echo $row['email']; ?>>
        Submit:<input type="submit">
    </form>
</td>
</tr>
    <?php
    }
}
if($c2==0){
    echo "There are no problems regarding electrical";
}
else{
    echo "There are some problems";
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


<h1><table>
    <tr>
        <th>Customer_Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Block</th>
    <th>Flat Number</th>
    <th>Mobile Number</th>
    <th>Payment Mode</th>
    <th>Delete</th>
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
        echo $row['SELECT1'];
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
    <?php
        echo $row['payment'];
?>
</td>
<td>
<form method='POST' action='delete_application_electronics.php'>
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
Electricals Service Registrations</h1>
<?php
$sql="select * from electricals_table";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error: ".mysqli_error($conn);
    exit;
}
?>
<table>
    <tr>
        <th>Customer_Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Block</th>
    <th>Flat Number</th>
    <th>Mobile Number</th>
    <th>Payment Mode</th>
    <th>Delete</th>
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
        echo $row['SELECT1'];
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
    <?php
        echo $row['payment'];
?>
</td>
<td>
    <?php
    ?>
    <form method='POST' action='delete_application_electricals.php'>
        Email:<input type="email" name="customer_email" required value=<?php echo $row['email']; ?>>
        Submit:<input type="submit">
    </form>
    <?php
    ?>
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