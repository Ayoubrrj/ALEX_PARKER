<?php
namespace App\Models\PostsModel;

use \PDO;

function findAll (PDO $connexion, int $limit = 10) : array {
    $sql = "SELECT *, p.id AS postID, c.id AS categoryID
            FROM posts p 
            JOIN categories c ON p.category_id = c.id
            ORDER BY p.created_at DESC
            LIMIT :limit;";
            // vu que je rentre un parametre (int) je fais pas query mais un prepare
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $conn, int $id): array
{
    $sql = "SELECT p.*, c.name
            FROM posts p
            JOIN categories c ON p.category_id = c.id
            WHERE p.id = :id;";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}