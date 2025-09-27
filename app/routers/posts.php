<?php

use \App\Controllers\PostsController;

include '../app/controllers/postsController.php';

switch ($_GET['posts']):
    case 'show':
        //ROUTE DU DETAIL D'UN POST
			//PATTERN: ?posts=form
			//URL: /posts/id/slug-du-post.html
			//CTRL: PostsController
			//ACTION: showAction
			//TITLE: Alex Parker - Title du post
        PostsController\showAction($connexion, $_GET['id']);
        break;
    case 'form':
        //ROUTE D'AJOUT D'UN POST: affichage du formulaire
			//PATTERN: /posts/add/form.html
			//CTRL: PostsController
			//ACTION: formAction
			//TITLE: Alex Parker - Add a post
        PostsController\formAction($connexion);
        break;
    case 'insert':
        //ROUTE D'AJOUT D'UN POST: INSERT
    		//PATTERN: /posts/add/insert.html
    		//CTRL: PostsController
    		//ACTION: insertAction
    		//PAS DE TITLE CAR REDIRECTION VERS LA PAGE D'ACCUEIL
        PostsController\insertAction($connexion, $_POST);
        break;
    default:
        // ACTION: index
        PostsController\indexAction($connexion);
        break;
endswitch;