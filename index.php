<?php
require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari di klik
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<?php include "template/header.php" ?>

<!-- START : Tabel Data Mahasiswa -->
<div class="container py-5" style="margin-top: 50px;">

    <h3>Data Mahasiswa</h3>
    <div class="row mb-5">
        <div class="col-12 col-lg-2 mb-2 mb-lg-0">
            <a href="tambah.php" class="btn btn-primary">Tambah Data +</a>
        </div>
        <div class="col-8 col-lg-3">
            <form class="input-group" action="" method="POST">
                <input class="form-control" type="text" name="keyword" placeholder="Search" aria-label="Search"
                    autocomplete="off">
                <button class="btn btn-outline-success" type="submit" name="cari">Cari</button>
            </form>
        </div>
    </div>


    <!-- Tabel Mahasiswa -->
    <div class="table-responsive">
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                </tr>
            </thead>
            <tbody>

                <?php $i = 1; ?>
                <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td>
                        <div class="d-flex">
                            <a href="ubah.php?id=<?= $mhs["id"]; ?>" class="btn btn-warning me-1" type="submit">Ubah</a>
                            <a href="hapus.php?id=<?= $mhs["id"]; ?>" class="btn btn-danger" type="submit">Hapus</a>
                        </div>
                    </td>
                    <td><img src="img/<?= $mhs["gambar"]; ?>" width="100px"></td>
                    <td><?= $mhs["nim"]; ?></td>
                    <td><?= $mhs["nama"]; ?></td>
                    <td><?= $mhs["email"]; ?></td>
                    <td><?= $mhs["jurusan"]; ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- END : Tabel Data Mahasiswa -->

<?php include "template/footer.php" ?>