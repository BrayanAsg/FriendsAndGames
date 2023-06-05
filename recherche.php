<?php session_start();
if(!$_SESSION['pseudo']){
    header('location:login.php');
}
 require('actions/database.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<title>Recherche</title>
<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>
    <?php
    $recupUser = $bdd->query('SELECT * FROM users');
    while($user = $recupUser->fetch()){
        ?>
        <a href="message.php?id=<?php echo $user ['id']; ?>">
            <p><?php echo $user['pseudo']; ?></p>
        </a>  
        <?php  
    }
    ?>

</body>
</html>