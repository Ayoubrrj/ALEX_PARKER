<?php
namespace App\Models\CategoriesModel;

use \PDO;

function findAll (PDO $connexion) : array {
    $sql = "SELECT *
            FROM categories
            ORDER BY created_at DESC;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}