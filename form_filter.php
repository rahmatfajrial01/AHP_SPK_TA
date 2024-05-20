<?php
session_start();
include('config.php');
include('fungsi.php');
if (!$_SESSION['username']) {
    header("location:login.php");
}

include('header.php');
?>
<section class="content">
    <form autocomplete="off" method="post" action="filterpenduduk.php">
        <table>
            <tr>
                <td>Jumlah Penghasilan</td>
                <td>
                    << /td>
                <td><input name="jumlahpenghasilan" type="number" placeholder="Silahkan masukan jumlah penghasilan"></input>
                </td>
            </tr>
            <tr>
                <td>Jumlah Tanggungan</td>
                <td>
                    << /td>
                <td><input name="jumlahtanggungan" type="number" placeholder="Silahkan masukan jumlah tanggungan"></input>
                </td>
            </tr>
            <tr>
                <td>Status Bantuan</td>
                <td>:</td>
                <td><select id="statusbantuan" name="statusbantuan">
                        <option value="">Silahkan Pilih Status Bantuan Calon Penerima</option>
                        <option value="belum">Belum</option>
                        <option value="sudah">Sudah</option>
                </td>
            </tr>
        </table>
        <button class="ui right green labeled icon button" style="float: right;" type="submit" name="filterp"><i class="filter icon"></i>Filter</button>
    </form>
    <section>