<!-- PHP code -->
<?php
// get current url
function getCurrentUrl(){
    $uri = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
    return $uri;
}

$currentUrl = getCurrentUrl();

// Check if a language is set, else default to Serbian
session_start();

if (isset($_GET['lang'])) {
    $selectedLang = $_GET['lang'];
    $_SESSION['lang'] = $selectedLang;
}

$lang = $_SESSION['lang'] ?? 'sr';
?>

<!-- HTML code -->
<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- title -->
    <title>
        <?= $currentUrl == '/' ? 'Početna' : 'Meni'  ?> | San Marco Plus
    </title>
</head>

<body class="bg-dark">

    <!-- PHP code -->
    <?php include 'appLayout/header.php' ?>