<?php

require "functions.php";

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {



    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan !');
                document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan !');
                document.location.href = 'index.php';
            </script>
        ";
        mysqli_error($conn);
    }
}
?>

<?php include "template/header.php" ?>

<div class="container py-5" style="margin-top: 50px;">

    <h3>Tambah Data Mahasiswa</h3>
    <div class="row mb-5 mt-4">
        <div class="col-12 col-lg-6">
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label" for="nim">NIM (Nomor Induk Mahasiswa)</label>
                    <input class="form-control" type="text" name="nim" id="nim" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="nama">Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama" id="nama" required>
                    <div class="form-text">Masukan nama lengkap dengan huruf capital di depan.
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="jurusan">Jurusan</label>
                    <input class="form-control" type="text" name="jurusan" id="jurusan" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="gambar">Gambar</label>
                    <input class="form-control" type="text" name="gambar" id="gambar" required>
                </div>
                <button class="btn btn-primary" type="submit" name="submit">Submit</button>

            </form>
        </div>
    </div>
</div>


<?php include "template/footer.php" ?>