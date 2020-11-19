<!DOCTYPE html>
<html>
<head>
    <title>Presensi Mahasiswa UNIGA Malang</title>
</head>

<body>
    <header>
        <h3>Presensi Mahasiswa UNIGA Malang</h3>
        <h1>UNIGA Malang</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Presensi</a></li>
            <li><a href="list-siswa.php">Presensi</a></li>
</ul>

        <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </nav>

    </body>
</html>