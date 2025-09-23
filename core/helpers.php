<?php
namespace Core\Helpers;

// tronqué le text a 150 caractères
function truncate(string $string, int $length = 150): string
{
    if (strlen($string) > $length) {
        $cut = substr($string, 0, $length);
        $cut = substr($cut, 0, strrpos($cut, ' '));
        return $cut . '...';
    } else {
        return $string;
    }
}
// Formate la date
function formatDate(string $dateFromDb): string {
    $date = new \DateTime($dateFromDb);
    return $date->format("F j, Y");
}