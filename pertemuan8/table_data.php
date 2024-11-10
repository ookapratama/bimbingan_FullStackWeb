<?php

if (isset($_POST['kirim'])) {

    $email = $_POST['email'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $no_telepon = $_POST['no_telepon'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
}

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>



    <h2>Data Form</h2>

    <table class="table table-bordered border-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <td scope="col"> <?php echo $email ?? 'belum terisi'; ?> </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <th>Nama lengkap</th>
                <td><?php echo $nama_lengkap ?? 'belum terisi'; ?> </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <th>Username</th>
                <td><?php echo $username ?? 'belum terisi'; ?> </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <th>No Telepon</th>
                <td><?php echo $no_telepon ?? 'belum terisi'; ?> </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <th>Alamat</th>
                <td><?php echo $alamat ?? 'belum terisi'; ?> </td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <th>Jenis Kelamin</th>
                <td><?php echo $gender ?? 'belum terisi'; ?> </td>
            </tr>

        </tbody>
    </table>

    <a href="index.php">Kembali ke home</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>