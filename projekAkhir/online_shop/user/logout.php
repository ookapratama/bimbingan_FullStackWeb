<?php

session_start();

unset($_SESSION['username']);
unset($_SESSION['nama_lengkap']);
unset($_SESSION['status_login']);

echo "
    <script>
        alert('Anda berhasil logout, Terimakasih!');
        window.location.href = 'index.php';
    </script>
";

session_destroy();