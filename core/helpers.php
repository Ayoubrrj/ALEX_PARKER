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
function formatDateIndex(string $dateFromDb): string {
    $date = new \DateTime($dateFromDb);
    return $date->format("y-m-j");
}

function formatDateShow(string $dateFromDb): string {
    $date = new \DateTime($dateFromDb);
    return $date->format("F d, Y");
}

function slugify(string $text): string
{
    // Strip html tags
    $text = strip_tags($text);
    // Replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    // Transliterate
    setlocale(LC_ALL, 'en_US.utf8');
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    // Remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    // Trim
    $text = trim($text, '-');
    // Remove duplicate -
    $text = preg_replace('~-+~', '-', $text);
    // Lowercase
    $text = strtolower($text);
    // Check if it is empty
    if (empty($text)) {
        return 'n-a';
    }
    // Return result
    return $text;
}