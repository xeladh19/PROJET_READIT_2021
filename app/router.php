<?php 
/*
    ./app/router.php
 */

//ROUTE DU DETAIL D'UN POST
//PATTERN: /
//CTRL: postsController
//ACTION: show

if (isset($_GET['postID'])) :
    include_once '../app/controllers/postsController.php';
    showAction($conn, $_GET['postID']);




 // ROUTE PAR DÉFAUT: liste des 10 derniers posts 
 // PATTERN: /
 // CTRL: postsController
 // ACTION: index
else:
 include_once '../app/controllers/postsController.php';
 indexAction($conn);
endif;
