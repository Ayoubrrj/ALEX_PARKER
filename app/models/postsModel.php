<?php
namespace App\Models\PostsModel;

use \PDO;

function findAll (PDO $connexion) : array {
    $sql = "SELECT *, p.id AS postID, c.id AS categoryID
            FROM posts p 
            INNER JOIN categories c ON p.category_id = c.id
            ORDER BY p.created_at DESC
            LIMIT 10;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}