<?php
session_start();
include("config.php");
if (isset($_POST['submit'])) {

  $username = $_POST["uname"];
  $password = $_POST["password"];

  $sql = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
  // $sql = "SELECT count(*) as total FROM `login` WHERE email = '".$emailid."' AND password = '".$password."' ";
  // $result = $koneksi->query($sql);

  if (mysqli_num_rows($sql) > 0) {
    $data = mysqli_fetch_array($sql);
    $_SESSION['username'] = $data['username'];
    $_SESSION['nama'] = $data['nama'];
    header("location:index.php");
    die;
  } else {
    header("location:login.php");
  }
}
