<?php
require 'function.php';

$jus = query("SELECT * FROM warungjus");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Jus Afar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-primary border-bottom border-body" data-bs-theme="primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        
        Warung Jus Afar
        </a>
    </div>
    </nav>
    <div class="container text-center pt-3">
        <h2>DATA STOK WARUNG JUS AFAR</h2>
    </div>
    <div class="container pt-4">
        <table class="table table-dark table-hover ">
            <tr class="">
                <th>nomor</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Fitur</th>
            </tr>
            <tr>
                <?php $i = 1; ?>
                <?php foreach ($jus as $row) : ?>
            </tr>
            <tr>
                <td class=""><?= $i; ?></td>
                <td><?= $row ["id"];?></td>
                <td><?= $row ["nama"];?></td>
                <td><?= $row ["harga"];?></td>
                <td><?= $row ["stok"];?></td>
                <td><a class="btn btn-secondary" href="../latihan 4/hapus.php?id=<?= $row["id"];?> "role="button">hapus</a> <a class="btn btn-secondary" href="#">ubah</a></td>
               
            </tr>
            <?php $i++; ?>
            <?php endforeach;?>
        </table>
    </div>
    <div class="container text-center">
        <a class="btn btn-secondary btn-lg" href="../Latihan 3/tambah.php" role="button">TAMBAH DATA</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>