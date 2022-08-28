<?php
session_start();
if(isset($_SESSION['name'])){
    echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
    session_destroy();
    unset($_SESSION['name']);
}
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
echo "<script>alert('successfully logged out');</script>";
echo "<script>location.href='Admin_page.php';</script>";
?>


