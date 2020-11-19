<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM absen_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Presensi Mahasiswa UNIGA Malang</title>
</head>

<body>
    <header>
        <h3>Edit Presensi Mahasiswa UNIGA Malang</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="nim">NIM: </label>
            <textarea name="nim"><?php echo $siswa['nim'] ?></textarea>
        </p>
        <p>
            <label for="jurusan">Jurusan: </label>
            <?php $jurusan = $siswa['jurusan']; ?>
            <select name="agama">
                <option <?php echo ($jurusan == 'Fakultas Sistem Informasi') ? "selected": "" ?>>Fakultas Sistem Informasi</option>
                <option <?php echo ($jurusan == 'Fakultas Ekonomi & Bisnis') ? "selected": "" ?>>Fakultas Ekonomi & Bisnis</option>
                <option <?php echo ($jurusan == 'Fakultas Ilmu Sosial & Budaya') ? "selected": "" ?>>Fakultas Ilmu Sosial & Budaya</option>
                <option <?php echo ($jurusan == 'Pasca Sarjana') ? "selected": "" ?>>Pasca Sarjana</option>
            </select>
        </p>

        <p>
            <label for="alamat">Alamat: </label>
            <input type="text" name="alamat" placeholder="alamat" value="<?php echo $siswa['alamat'] ?>" />
        </p>
        <p>
            <label for="telepon">Telepon: </label>
            <input type="text" name="telepon" placeholder="telepon" value="<?php echo $siswa['telepon'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>