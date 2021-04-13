<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// mengambil id dari url 
$id = $_GET['id'];

//melakukan query dengan parameter id yang diambil dari url
$prakpw_tubes_203040003 = query("SELECT * FROM prakpw_tubes_203040003 WHERE id = $id")[0];

?>

<!Doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!-- css style -->
        <link rel="stylesheet" href="../css/style2.css">
        <title>Buku Kehidupan</title>
    </head>
<body>
<script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">
    <div class="gambar">
			<img src="../assets/img/<?= $prakpw_tubes_203040003["gambar"]; ?>" alt="">
		</div>
		<div class="keterangan">
			<p><?= $prakpw_tubes_203040003["judul"]; ?></p>
			<p><?= $prakpw_tubes_203040003["pengarang"]; ?></p>
            <p><?= $prakpw_tubes_203040003["sinopsis"]; ?></p>
			<p><?= $prakpw_tubes_203040003["harga"]; ?></p>
			<p><?= $prakpw_tubes_203040003["kategori"]; ?></p>
		</div>

		<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</table>
