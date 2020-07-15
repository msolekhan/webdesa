<?php 
 
 	include 'koneksi.php';

 	$query = mysqli_query($koneksi, "DELETE FROM berita_nasional WHERE id_bernas = '$_GET[id]'");

 	if ($query) {
 		echo "<script>
            alert('berhasil menghapus berita');
            window.location.assign('bernas.php');
            </script>";
    }else {
      echo "<script>
            alert('gagal menghapus berita');
            window.location.assign('bernas.php');
            </script>";
    }
  

?>