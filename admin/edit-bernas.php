<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="admin.css">

  <title>Halaman Admin</title>
</head>
<body>

  <div class="wrapper">
    <nav class="navbar navbar-dark bg-biru">
      <a class="navbar-brand" href="#">Administator</a>
    </nav>
    <aside class="sidebar">
      <div class="menu">
        <ul>
          <li>
            <a href="dashboard.php"><i class="fas fa-home"></i><span>Home</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-camera"></i><span>Publikasi</span></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Kelola Foto</a>
              <a class="dropdown-item" href="#">Kelola Video</a>
              <a class="dropdown-item" href="#">Kelola Agenda</a>
            </div>
          </li>
           <li>
            <a href="berdes.php"><i class="fas fa-tv"></i><span>kelola berita desa</span></a>
          </li>
           <li>
            <a href="bernas.php"><i class="fas fa-tv"></i><span>kelola berita nasional</span></a>
          </li>
           <li>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>log out</span></a>
          </li>

        </ul>
      </div>
    </aside>
    <section class="konten">
      <div class="inner">
        <h3><i class="fas fa-edit"></i> EDIT BERITA</h3>

    <?php 
      include 'koneksi.php';

      $id = $_GET["id"];
      $query = mysqli_query($koneksi, " SELECT * FROM berita_nasional WHERE id_bernas='$id'");
      $result = mysqli_fetch_array($query);
    ?>
       <form method="post" enctype="multipart/form-data">
          <div class="form-group">
            <img src="../img/berita/<?= $result['foto'] ?>" width="100">
            <label for="exampleFormControlFile1">Pilih Foto</label>
            <input value="<?= $result['foto'] ?>" type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal</label>
            <input value="<?= $result['tanggal'] ?>"required type="date" name="tanggal">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Judul</label>
            <input value="<?= $result['judul'] ?>" type="text" name="judul" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea  class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"><?= $result['deskripsi'] ?></textarea>
          </div>
          <button class="btn btn-danger"><a  class="text-white" href="bernas.php" style="text-decoration: none; border: none;">kembali</a></button>
          <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </section>
  </div>

  <?php 
    if (isset($_POST['submit'])) {
      
    $foto = $_FILES['foto']['name'];
    $tanggal = $_POST['tanggal'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

     $dir = '../img/berita/'. $foto;
         if (!$foto) {

    $query = "UPDATE berita_nasional SET tanggal = '$tanggal', judul = '$judul' , deskripsi = '$deskripsi' WHERE id_bernas = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
      echo "<script>
            alert('berhasil mengedit berita');
            window.location.assign('bernas.php');
            </script>";
    }else {
      echo "<script>
            alert('gagal mengedit berita');
            window.location.assign('tambah-bernas.php');
            </script>";
      }
    }  else {
        
         move_uploaded_file($_FILES['foto']['tmp_name'], $dir);
          $query = "UPDATE berita_nasional SET foto = '$foto', tanggal = '$tanggal', judul = '$judul' , deskripsi = '$deskripsi' WHERE id_bernas = '$id'";
          $result = mysqli_query($koneksi, $query);


    if ($result) {
      echo "<script>
            alert('berhasil mengedit berita');
            window.location.assign('bernas.php');
            </script>";
    }else {
      echo "<script>
            alert('gagal mengedit berita');
            window.location.assign('tambah-bernas.php');
            </script>";
   }
  }
}
  ?>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="fontawesome/js/all.min.js"></script>
</body>
</html>