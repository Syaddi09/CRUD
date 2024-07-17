<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
     
    <!--ambil data dari navbar-->
    <?php include('navbar.php'); ?>

    <div class="container" style="margin-top: 15%;">
        <div class="title text-center centered">
            <h2 class="mb-3">Welcome JWP TIKOM</h2>
            <h4 class="mb-4">website sederhana ini dibuat untuk pendataan peserta</h4>
            <a href="formdaftar.php" class="btn btn-primary px-3 mx-2">Daftar Sekarang</a>
            <a href="datapeserta.php" class="btn btn-primary px-3 mx-2">Data Peserta</a>
        </div>
    </div>

</body>
</html>