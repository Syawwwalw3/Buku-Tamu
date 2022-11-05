<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>
    <h1>Tambah Data Resepsionis</h1>

    <form action="simpan.php" method="POST" enctype="multipart/from-data">
        <label for="usernam">Username</label><br/>
        <input type="text" name="username" id="username"
        class="form-control">
        <br/> <br/>

        <label for="nama_lengkap">Nama Lengkap</label><br/>
        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
        <br/> <br/>

        <label for="kelas">Kelas</label><br/>
        <input type="text" name="kelas" id="kelas" class="form-control">
        <br/> <br/>

        <label for="password">Password</label><br/>
        <input type="text" name="password" id="password" class="form-control">
        <br/> <br/>

        <label for="roles">Roles</label><br/>
        <select name="roles" class="form-control" value="<?= $user["roles"]; ?>">
                <option value="Admin">Admin</option>
                <option value="Customer">Resepsionis</option>
            </select></br></br>
      
        <button type="submit" class="btn-tambah">Tambah</button>
</form> 
</body>
</html>
