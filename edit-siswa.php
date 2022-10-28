<?php 
  include('koneksi.php');
  $id = $_GET['id'];
  $query = "SELECT * FROM tbl_siswa WHERE id_siswa = $id LIMIT 1";
  $result = mysqli_query($koneksi, $query);
  $row = mysqli_fetch_array($result);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Edit Siswa</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Halaman Admin</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container" style="margin-top: 2rem">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            EDIT SISWA
          </div>
          <div class="card-body">
            <form action="update-siswa.php" method="POST">

              <div class="form-group mb-3">
                <label>NISN</label>
                <input type="text" name="nisn" value="<?php echo $row['nisn'] ?>" placeholder="Masukkan NISN Siswa"
                  class="form-control">
                <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa'] ?>">
              </div>

              <div class="form-group mb-3">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap'] ?>"
                  placeholder="Masukkan Nama Siswa" class="form-control">
              </div>

              <div class="form-group mb-4">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa"
                  rows="4"><?php echo $row['alamat'] ?></textarea>
              </div>

              <button type="submit" class="btn btn-success">UPDATE</button>
              <button type="reset" class="btn btn-warning">RESET</button>
              <a href="admin/login.php" class="btn btn-primary">KEMBALI</a>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
</body>
</html>