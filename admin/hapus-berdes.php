<?php 
 
 	include 'koneksi.php';

 	$query = mysqli_query($koneksi, "DELETE FROM berita_desa WHERE id_berdes = '$_GET[id]'");

 	if ($query) {
 		echo "<script>
            alert('berhasil menghapus berita');
            window.location.assign('berdes.php');
            </script>";
    }else {
      echo "<script>
            alert('gagal menghapus berita');
            window.location.assign('berdes.php');
            </script>";
    }
  

?>