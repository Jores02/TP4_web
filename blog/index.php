<?php
require('src/model.php');
$posts = getPosts();
require('templates/homepage.php');
 /* défaut du code :
            1: utilisation du die au lieu du catch 
            2: aucun filtre 
            3: PHP et html mélanger
               
            */ 
?>

