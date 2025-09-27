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
    case 'editForm':
        // ROUTE DE MODIFICATION D'UN POST: Affichage du formulaire
            // PATTERN: /posts/id/slug-du-post/edit/form.html
            // CTRL: PostsController
            // ACTION: editAction
            // TITLE: Alex Parker - Edit a post
        PostsController\editFormAction($connexion, $_GET['id']);
    break;
    case 'update':
        // ROUTE DE MODIFICATION D'UN POST: UPDATE
            // PATTERN: ?posts=update&id=x
            // URL: /posts/id/slug-du-post/edit/update.html
            // CTRL: PostsController
            // ACTION: updateAction
            // PAS DE TITLE CAR REDIRECTION
        PostsController\updateAction($connexion, $_GET['id']);
    break;
    case 'delete':
        // ROUTE DE MODIFICATION D'UN POST: UPDATE
            // PATTERN: ?posts=update&id=x
            // URL: /posts/id/slug-du-post/edit/update.html
            // CTRL: PostsController
            // ACTION: updateAction
            // PAS DE TITLE CAR REDIRECTION
        PostsController\deleteAction($connexion, $_GET['id']);
    break;
    default:
        // ACTION: index
        PostsController\indexAction($connexion);
        break;
endswitch;