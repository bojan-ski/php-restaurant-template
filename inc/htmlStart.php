<?php
// get current url
function getCurrentUrl(){
    $uri = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
    return $uri;
}

$currentUrl = getCurrentUrl();

// Check if a language is set & is valid, else default to sr
require './models/checkSelectedLanguage.php';

session_start();

if (isset($_GET['lang'])) {
    $selectedLang = $_GET['lang'];
    $isValidLanguage = checkSelectedLanguage($selectedLang);
    $_SESSION['lang'] = $isValidLanguage;
}

$lang = $_SESSION['lang'] ?? 'sr';
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <link rel="stylesheet" href="css/style.css">
    <title>
        <?= $currentUrl == '/' ? 'Početna' : 'Meni'  ?> | San Marco Plus
    </title>
</head>

<body class="bg-dark">
    
    <?php include 'appLayout/header.php' ?>