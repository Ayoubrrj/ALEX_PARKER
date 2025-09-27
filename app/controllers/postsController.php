<?php

namespace App\Controllers\PostsController;

use \PDO;

function indexAction(PDO $connexion) {

    // Je vais demander des données aux modèles
    include_once '../app/models/postsModel.php';
    $posts = \App\Models\PostsModel\findAll($connexion, 10);

    include_once '../app/models/categoriesModel.php';
    $categories = \App\Models\CategoriesModel\findAllWithPostCount($connexion);

    // Je charge la vue 'home' dans $content
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
    // Je charge la vue 'home' dans $content
    global $content, $title;
    $title = "Alex Parker - " . $post["title"];
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}

function formAction (PDO $connexion) {
    // Je vais demander des données aux modèles (categories)
    include_once '../app/models/postsModel.php';
    $categories = \App\Models\PostsModel\findAll($connexion, 5);
    // Je charge la vue 'home' dans $content
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
    exit;
}