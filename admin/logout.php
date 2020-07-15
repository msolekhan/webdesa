<?php 
	session_start();
	session_destroy();
	echo "<script>
           alert('yakin ingin keluar?');
           window.location.assign('index.php');
	      </script>";

?>