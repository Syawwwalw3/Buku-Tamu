<?php

require "../koneksi.php";

$bukutamu = mysqli_query($conn , "SELECT * FROM resepsionis")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="repso.css">
</head>
<body>
<h1> RESEPSIONIS</h1>
<a href="tambah_resep.php">Tambah data</a>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>NO.</th>
        <th>Username</th>
        <th>Nama Lengkap</th>
        <th>Kelas</th>
        <th>Password</th>
        <th>Roles</th>
        <th>Apa Hayo</th>
</tr>
<?php $i = 1; ?>
<?php while($data = mysqli_fetch_array($bukutamu)) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $data["username"]; ?></td>
        <td><?= $data["nama_lengkap"]; ?></td>
        <td><?= $data["kelas"]; ?></td>
        <td><?= $data["password"]; ?></td>
        <td><?= $data["roles"]; ?></td>

        <td>
     <center> 
     <a href="editresep.php?id=<?= $data ["id_resepsionis"]; ?>">Edit</a>
     <a href="hapus.php?id=<?= $data["id_resepsionis"]; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a> </cente>
    </td>
        
</tr>
<?php $i++;?>
<?php endwhile; ?>
</body>
</html>