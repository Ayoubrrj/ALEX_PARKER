<?php
// ROUTER PRINCIPAL


// ROUTE PAR DEFAUT: liste des posts
// PATTERN: /
// CTRL: postsController
// ACTION: homeAction
// TITLE: Alex Parker - Blog
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);