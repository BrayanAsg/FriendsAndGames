<?php 
    session_start();
    if(!$_SESSION['pseudo']){
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>
    
</body>
</html>