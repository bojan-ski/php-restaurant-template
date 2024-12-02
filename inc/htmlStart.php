<!-- PHP code -->
<?php $current_url = $_SERVER['REQUEST_URI']; ?>

<!-- HTML code -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- title -->
    <title>
        <?= $current_url == '/index.php' ? 'Početna' : 'Meni'  ?> | San Marco Plus
    </title>
</head>

<body class="bg-dark">

    <!-- PHP code -->
    <?php include 'appLayout/header.php' ?>