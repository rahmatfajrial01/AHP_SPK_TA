

<!-- // session_start();
// unset($_SESSION['username']);
// unset($_SESSION['nama']);
// header("location:login.php"); -->


<?php
session_start();


//menghancurkan session pelanggan
session_destroy();

echo "<script>alert('anda telah logout');</script>";
echo "<script> location='login.php' ; </script>";
?>