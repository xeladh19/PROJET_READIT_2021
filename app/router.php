<?php 
/*
    ./app/router.php
 */


 //ROUTE PAR DEFAUT:liste des 1à derniers posts
 //PATTERN: /
 //CTRL: postsController
 //ACTION:index

 include_once '../app/controllers/postsController.php';
 indexAction($conn);