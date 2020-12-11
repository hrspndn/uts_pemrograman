<?php
include 'koneksi.php';

$hapus=mysqli_query($koneksi, "delete from form_cuti where id_karyawan='".$_GET['id_karyawan']."'");
if($hapus){
    header("location:tampil.php");
}else{
    echo mysqli_eror();

}
