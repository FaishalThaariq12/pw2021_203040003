<?php

require 'php/functions.php';
$novel = query("SELECT * FROM novel");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <style>
    </style>

    <title>Buku kehidupan</title>
</head>

<body>

    <div class="container">
        <button class="tombol-admin"><a href="php/login.php">Silahkan Masuk</a></button>
    </div>
</body>

</html>