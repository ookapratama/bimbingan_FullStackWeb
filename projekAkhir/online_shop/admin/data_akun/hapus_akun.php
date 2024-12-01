<?php

include '../../config/koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM tb_akun WHERE id = $id";

if ($koneksi->query($sql) === TRUE) {
    echo "
        <script>
            alert('Berhasil hapus data');
            window.location.href = 'index_akun.php';
        </script> 
    ";
}
else {
    echo "
        <script>
            alert('Gagal hapus data');
            window.location.href = 'index_akun.php';
        </script> 
    ";
}
