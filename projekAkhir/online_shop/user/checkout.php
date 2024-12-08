<?php

include '../config/koneksi.php';
session_start();
if ($_SESSION['status_login'] != true) {
    echo "
        <script>
            alert('Anda harus login terlebih dahulu');
            window.location.href = 'login.php';
        </script>
    ";
} else {
    // var_dump($_POST);

    // tambah data ke keranjang
    if (isset($_POST['keranjang'])) {
        $id_produk = $_POST['id_produk'];
        $jumlah = $_POST['jumlah'];

        $sql = "SELECT a.*, b.nama_kategori as kategori FROM tb_produk as a JOIN tb_kategori as b ON a.id_kategori = b.id WHERE a.id = $id_produk";
        $get_data = mysqli_query($koneksi, $sql);
        $produk = $get_data->fetch_assoc();

        $_SESSION['keranjang'][$id_produk] = [
            'jumlah' => $jumlah,
            'nama_produk' => $produk['nama_produk'],
            'gambar' => $produk['gambar'],
            'harga' => $produk['harga'],
            'kategori' => $produk['kategori'],
            'id_produk' => $produk['id'],
            'status' => 'Pending',
        ];

        // $_SESSION['keranjang']['jumlah'] = $jumlah;
        // $_SESSION['keranjang']['nama_produk'] = $produk['nama_produk'];
        // $_SESSION['keranjang']['gambar'] = $produk['gambar'];
        // $_SESSION['keranjang']['harga'] = $produk['harga'];
        // $_SESSION['keranjang']['id_produk'] = $produk['id'];
        // $_SESSION['keranjang']['status'] = 'Pending';

        echo "
            <script>
                alert('Berhasil tambah ke keranjang');
                window.location.href = 'dashboard.php';
            </script>
        ";
    }

    // hapus data di keranjang
    if (isset($_POST['hapus_produk'])) {
        $id_produk = $_POST['id_produk'];

        if (isset($_SESSION['keranjang'][$id_produk])) {
            unset($_SESSION['keranjang'][$id_produk]);
        }

        echo "
            <script>
                alert('Produk berhasil di hapus dari keranjang');
                window.location.href = 'dashboard.php';
            </script>
        ";

    }

    // checkout semua di keranjang
    if (isset($_POST['checkout_produk'])) {

        foreach ($_SESSION['keranjang'] as $id_produk => $data) {
            $alamat_pengiriman = $_POST['alamat_pengiriman'];
            $kode_pos = $_POST['kode_pos'];
            $tipe_bayar = $_POST['tipe_bayar'];
            $kode_transaksi = 'TRS-000' . $id_produk;
            $total_bayar = $data['harga'] * $data['jumlah'];
            $id_akun = $_SESSION['id_akun'];
            $id_produk = $data['id_produk'];
            $tanggal_transaksi = date('Y-m-d');

            $sql = "INSERT INTO tb_transaksi (kode_transaksi, tanggal_transaksi, total_bayar, tipe_bayar, kode_pos, alamat_pengiriman, id_akun, id_produk)
            VALUES ('$kode_transaksi', '$tanggal_transaksi', '$total_bayar', '$tipe_bayar', '$kode_pos', '$alamat_pengiriman', '$id_akun', '$id_produk') ";

            if ($koneksi->query($sql) == FALSE) {
                echo "Error : " . $sql . "/n" . $koneksi->error;
            }
        }
        $_SESSION['keranjang'] = [];
        echo "
            <script>
                alert('Berhasil checkout barang');
                window.location.href = 'dashboard.php';
            </script>
        ";

    }
}
