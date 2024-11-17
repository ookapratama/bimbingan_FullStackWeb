<?php
include 'koneksi.php';

if (isset($_GET['stambuk'])) 
{
    $stambuk = $_GET['stambuk'];
    $sql = "DELETE FROM tb_mahasiswa WHERE stambuk = '$stambuk' ";

    if($koneksi->query($sql) === TRUE)
    {
        header('Location: index.php');
    }
    else
    {
        echo "Error : " . $koneksi->error;
    }

}
