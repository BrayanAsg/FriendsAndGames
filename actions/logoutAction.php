<?php
session_start();
$_SESSION = [];
session_destroy();
header('Location:/FriendsAndGames/login.php');