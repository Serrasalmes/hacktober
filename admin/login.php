<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>HALAMAN UTAMA</title>

  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

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

  <?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
  <div class="container" style="margin-top: 1rem">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            DATA SISWA
          </div>
          <div class="card-body">
            <a href="../tambah-siswa.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
            <table class="table table-bordered" id="myTable">
              <thead>
                <tr>
                  <th scope="col">NO.</th>
                  <th scope="col">NISN</th>
                  <th scope="col">NAMA LENGKAP</th>
                  <th scope="col">ALAMAT</th>
                  <th scope="col">AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                      include('../koneksi.php');
                      $no = 1;
                      $query = mysqli_query($koneksi,"SELECT * FROM tbl_siswa");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $row['nisn'] ?></td>
                  <td><?php echo $row['nama_lengkap'] ?></td>
                  <td><?php echo $row['alamat'] ?></td>
                  <td class="text-center">
                    <a href="../edit-siswa.php?id=<?php echo $row['id_siswa'] ?>"
                      class="btn btn-sm btn-primary">EDIT</a>
                    <a href="../hapus-siswa.php?id=<?php echo $row['id_siswa'] ?>"
                      class="btn btn-sm btn-danger">HAPUS</a>
                  </td>
                </tr>

                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.jss"></script>

    <script>
      $(document).ready(function () {
        $('#myTable').DataTable();
      });
    </script>

</body>

</html>