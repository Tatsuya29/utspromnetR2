<!DOCTYPE html>
<html>
<head>
    <title>Daftar Presensi Kampus UNIGA Malang</title>
</head>

<body>
    <header>
        <h3>Daftar Presensi Mahasiswa UNIGA Malang</h3>
    </header>

    <form action="proses-presensi.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="nim">NIM: </label>
            <textarea name="NIM"></textarea>
        </p>
        <p>
            <label for="jurusan">Jurusan: </label>
            <select name="jurusan">
                <option>Fakultas Sistem Informasi</option>
                <option>Fakultas Ekonomi & Bisnis</option>
                <option>Fakultas Ilmu Sosial & Budaya</option>
                <option>Pasca Sarjana</option>
            </select>
        </p>
        <p>
             <label for="alamat">Alamat: </label>
             <textarea name="alamat"></textarea>
        </p>
         <p>
              <label for="telepon">Telepon: </label>
            <textarea name="telepon"></textarea>
        </p>
        <p>
            <input type="submit" value="Presensi" name="Presensi" />
        </p>

        </fieldset>

    </form>

    </body>
</html>