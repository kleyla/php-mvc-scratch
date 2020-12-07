<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
    if (!isset($titulo) || empty($titulo)) {
        $titulo = 'Yo contribuyo';
    }
    echo "<title>$titulo</title>";

    ?>
    <link rel="stylesheet" href="public/bootstrap/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>