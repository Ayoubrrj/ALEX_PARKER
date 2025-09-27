<?php

namespace App\Controllers\PostsController;

use \PDO;

function indexAction(PDO $connexion) {

    // Je vais demander des données aux modèles
    include_once '../app/models/postsModel.php';
    $posts = \App\Models\PostsModel\findAll($connexion, 10);

    include_once '../app/models/categoriesModel.php';
    $categories = \App\Models\CategoriesModel\findAllWithPostCount($connexion);

    // Je charge la vue 'index' dans $content
    global $content, $title;
    $title = "Alex Parker - Blog";
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();
}

function showAction (PDO $connexion, int $id) {
    // Je vais demander des données aux modèles
    include_once '../app/models/postsModel.php';
    $post = \App\Models\PostsModel\findOneById($connexion, $id);
    // Je charge la vue 'show' dans $content
    global $content, $title;
    $title = "Alex Parker - " . $post["title"];
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}

function formAction (PDO $connexion) {
    // Je vais demander des données aux modèles (categories)
    include_once '../app/models/categoriesModel.php';
    $categories = \App\Models\CategoriesModel\findAll($connexion);
    // Je charge la vue 'form' dans $content
    global $content, $title;
    $title = "Alex Parker - Add a post";
    ob_start();
    include '../app/views/posts/form.php';
    $content = ob_get_clean();
}

function insertAction(PDO $connexion, array $data)
{
    // Je vais demander des données aux modèles
    include_once '../app/models/postsModel.php';
    $id = \App\Models\PostsModel\insertOne($connexion, $data);

    // Redirige vers la page d'accueil
    header('Location: ' . PUBLIC_BASE_URL);
}

function editFormAction(PDO $connexion, int $id) {
    // Je vais demander des données aux modèles
    include_once '../app/models/postsModel.php';
    $post = \App\Models\PostsModel\findOneById($connexion, $id);

    include_once '../app/models/categoriesModel.php';
    $categories = \App\Models\CategoriesModel\findAll($connexion);
    // Je charge la vue 'form' dans $content
    global $content, $title;
    $title = "Alex Parker - Edit a post";
    ob_start();
    include '../app/views/posts/editForm.php';
    $content = ob_get_clean();
}


function updateAction(PDO $connexion, $id, array $data) {
    include_once '../app/models/postsModel.php';
    \App\Models\PostsModel\updateOne($connexion, $id, $data);

    header('Location: ' . PUBLIC_BASE_URL);
    exit;
}

function deleteAction (PDO $connexion, int $id) {
    // Je demande au modèle de supprimer le post
    include_once '../app/models/postsModel.php';
    $return = \App\Models\PostsModel\deleteOneById($connexion, $id);
    // je redirige vers la liste des posts
    header('Location: ' . PUBLIC_BASE_URL);
}