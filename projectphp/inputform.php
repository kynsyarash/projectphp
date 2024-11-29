<?php
// panggil koneksi database
include "koneksidb.php";
// uji jika tombol simpan diklik
if (isset($_POST['btnsimpan'])) {
    //persiapan simpan data
    $simpan = mysqli_query($koneksidb, "INSERT INTO tb_member(Nama,Alamat,Telp,Email,Hobi)
    Values ('$_POST[Nama]','$_POST[Alamat]','$_POST[Telp]','$_POST[Email]','$_POST[Hobi]')");

    //jika simpan sukses
    if ($simpan) {
        echo "<script> alert ('berhasil Simpan Registrasi')</script>";
        echo "<script> window.location.href='inputform.php'</script>";
    } else
    echo "<script> alert ('Gagal Simpan Registrasi')</scipt)";
    echo "<script> window.location.href='inputform.php'</scipt>";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </div>
        <title>Latihan PHP</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="menu.php">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inputform.php">Input Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="datamember.php">Data Member</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<hr>
    <div class="container">
        <h2 class="text-center">Data Input Member</h2>
        <form method="post" name="form1">
            <div class="col-md-6 mx-auto">
                <div class="mb-2">
                    <label for="Nama">Nama Lengkap</label>
                    <input type="text" required name="Nama" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="Alamat">Alamat</label>
                    <input type="text" required name="Alamat" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="Telp">Telp</label>
                    <input type="number" required name="Telp" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="Email">Email</label>
                    <input type="email" required name="Email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Hobi">Hobi  :</label><br>
                    <div class="col-md-4">
                        <select class="form-control" name="Hobi">
                            <option value=""></option>
                            <option value="Menyanyi">Menyanyi</option>
                            <option value="Menari">Menari</option>
                            <option value="Berenang">Berenang</option>
                            <option value="Lari">Lari</option>
                            <option value="Tidur">Tidur</option>
                            <option value="Lainnya">Lainnya..</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-grid gap-2 col-6 mx mx-auto">
                <button class="btn btn-primary" name="btnsimpan" type="submit">Simpan</button>
                <button class="btn btn-danger" type="reset">Reset</button>
            </div>
        </form>
    </div>
    </body>
</html>