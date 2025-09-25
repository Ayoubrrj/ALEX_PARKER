<?php

use \App\Controllers\PostsController;

include '../app/controllers/postsController.php';

switch ($_GET['posts']):
    case 'show':
        // ACTION: show
        PostsController\showAction($connexion, $_GET['id']);
        break;
    case 'form':
        // ACTION: form
        PostsController\formAction($connexion);
        break;
    default:
        // ACTION: index
        PostsController\indexAction($connexion);
        break;
endswitch;