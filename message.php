<?php
session_start();
if(!$_SESSION['pseudo']){
    header('location:login.php');
}
 require('actions/database.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<title>Message privé</title>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>
    <?php
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupUser = $bdd->prepare('SELECT * FROM users WHERE id =?');
    $recupUser->execute(array($getid));
    if($recupUser->rowCount() > 0){
    if(isset($_POST['envoyer'])){
            $message = htmlspecialchars($_POST['message']);
            $insererMessage = $bdd->prepare('INSERT INTO message(message, id_destinataire, id_auteur)VALUES(?,?,?)');
            $insererMessage->execute(array($message, $getid, $_SESSION['id']));
        }
    }else{
        echo" Aucun utilisateur trouvé";
    }
}else{
    echo"Aucun identifiant trouvé";
}
?>
    <form class="container" method="POST" actions="">
    <div class="form-floating">
        <textarea class="form-control" id="floatingTextarea" style="height: 100px" name="message"></textarea>
        <label for="floatingTextarea2"></label>
    </div>
    <br>
    <br>
    <button type="submit" name="envoyer" class="btn btn-primary">Submit</button>
    </form>
    </div>

    <section id="messages">

    <?php
        $recupMessages = $bdd->prepare('SELECT * FROM message WHERE id_auteur =? AND id_destinataire =? OR id_auteur = ? AND id_destinataire =?');
        $recupMessages->execute(array($_SESSION['id'], $getid, $getid, $_SESSION['id']));
        while($message = $recupMessages->fetch()){
            if($message['id_destinataire'] ==$_SESSION['id']){
                    ?>
                    <p style="color:red;"><?=$message['message'];?>
                    <?php
            }elseif ($message['id_destinataire'] == $getid){
            ?>
            <p style="color:blue;"><?=$message['message'];?>
            <?php
            }
        }
    ?>

    </section>
</body>
</html>