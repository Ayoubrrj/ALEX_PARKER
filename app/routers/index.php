<?php
// ROUTER PRINCIPAL


// ROUTE DU DETAIL D'UN POST
// PATTERN: ?posts=show&id=x
// URL: /posts/id/slug-du-post.html 
// CTRL: PostsController
// ACTION: showAction
// TITLE: Alex Parker - Title du post
if (isset($_GET['posts'])) :
include_once '../app/routers/posts.php';

// ROUTE PAR DEFAUT: liste des posts
// PATTERN: /
// CTRL: postsController
// ACTION: indexAction
// TITLE: Alex Parker - Blog
else : 
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connexion);
endif;