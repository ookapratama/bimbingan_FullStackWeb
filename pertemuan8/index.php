<?php

session_start();

// echo $_SESSION['email'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];

// unset($email);
// unset($password);

if ($email == '' && $password == '') {
    echo "
    <script>
        alert('Anda harus login dulu!');
        window.location.href = 'login.php';
    </script>
    ";
}

if (isset($_POST['logout'])) {
    unset($email);
    unset($password);

    echo "
    <script>
        alert('Anda telah logout!, terimakasih');
        window.location.href = 'login.php';
    </script>
    ";
    session_destroy();
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




    <div class="container px-5 mt-5">
    <h1>Hi, <?php echo $email ?? ''; ?> </h1>

    <form action="" method="POST">
        <button name="logout" type="submit" class="btn btn-danger">Logout</button>
    </form>


    <h1>Form PHP</h1>
        <!-- name -->
        <form action="table_data.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Username</label>
                <input name="username" type="text" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama lengkap</label>
                <input name="nama_lengkap" type="text" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">No Telepon</label>
                <input name="no_telepon" type="number" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                <select class="form-control" name="gender" id="">
                    <option value="">-- pilih gender --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <button type="submit" name="kirim" class="btn btn-primary">Submit</button>
        </form>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>