<?php


include 'koneksi.php';

if (isset($_GET['stambuk'])) {
    $stambuk = $_GET['stambuk'];
    $sql = "SELECT * FROM tb_mahasiswa WHERE stambuk = '$stambuk' ";
    // eksekusi query sql nya
    $query = $koneksi->query($sql);

    // menarik data dari hasil eksekusi query dengan metode fetch_assoc
    // sama ji dengan mysqli_fetch_assoc()
    $data = $query->fetch_assoc();
}




if (isset($_POST['submit'])) {
    // shitf + alt + panah atas/bawah
    // block kata yg sama ctrl + d
    $stambuk = $_POST['stambuk'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST['tgl_lahir'];

    $stambuk_lama = $_GET['stambuk'];
    $sql = "
        UPDATE tb_mahasiswa SET 
        nama = '$nama' , 
        stambuk = '$stambuk' , 
        jurusan = '$jurusan' , 
        alamat = '$alamat' , 
        tgl_lahir = '$tgl_lahir' 
            WHERE stambuk = '$stambuk_lama'
    ";
    if ($koneksi->query($sql) === TRUE) {
        echo "
           <script>
                alert('Data berhasil di update');
                window.location.href = 'index.php';
           </script>
        ";
    } else {
        echo "
           <script>
                alert('$koneksi->error');
           </script>
        ";
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container-md">
        <h1 class="text-center mt-5">Form Edit</h1>

        <form method="POST" action="">

            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Stambuk</label>
                        <input maxlength="6" type="text" value="<?= $data['stambuk'] ?>" name="stambuk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                        <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                        <select name="jurusan" class="form-control" id="">
                            <option value="">-- pilih jurusan --</option>
                            <!-- ctrl + d -->
                            <option <?= $data['jurusan'] == 'TI' ? 'selected' : '' ?> value="TI">TI</option>
                            <option <?= $data['jurusan'] == 'SI' ? 'selected' : '' ?> value="SI">SI</option>
                            <option <?= $data['jurusan'] == 'RPL' ? 'selected' : '' ?> value="RPL">RPL</option>
                            <option <?= $data['jurusan'] == 'MI' ? 'selected' : '' ?> value="MI">MI</option>
                        </select>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control"
                            value="<?= $data['alamat'] ?>"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal lahir</label>
                        <input type="date" name="tgl_lahir" value="<?= $data['tgl_lahir'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-secondary" href="index.php">Kembali</a>

        </form>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>