<?php
session_start();
session_unset();
session_destroy();
// header("Location:Admin_page.php");
?>
<!-- <script>
    window.close();
</script> -->
<?php
echo "Succesfully Logged out <a href='Admin_page.php' target='_blank'>Login Again</a>";
?>


