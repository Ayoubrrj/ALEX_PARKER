<?php
namespace App\Models\CategoriesModel;

use \PDO;

function findAll (PDO $connexion) : array {
    $sql = "SELECT *
            FROM categories
            ORDER BY created_at DESC;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function findAllWithPostCount(PDO $connexion) : array {
    $sql = "SELECT 
                c.id, 
                c.name, 
                COUNT(p.id) AS post_count
            FROM categories c
            LEFT JOIN posts p ON p.category_id = c.id
            GROUP BY c.id, c.name
            ORDER BY c.name ASC;";
    // Pas de paramètres → query()
    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}