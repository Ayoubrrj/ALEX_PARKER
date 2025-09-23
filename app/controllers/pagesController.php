<?php

namespace App\Controllers\PagesController;

use \PDO;

function homeAction(PDO $connexion) {

    // Je vais demander des données aux modèles
    include_once '../app/models/postsModel.php';
    $posts = \App\Models\PostsModel\findAll($connexion);

    include_once '../app/models/categoriesModel.php';
    $categories = \App\Models\CategoriesModel\findAll($connexion);

    // Je charge la vue 'home' dans $content
    global $content, $title;
    $title = "Alex Parker - Blog";
    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
}