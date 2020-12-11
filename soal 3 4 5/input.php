<?php
include "koneksi.php";
if (isset($_POST['save'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $divisi = $_POST['divisi'];
    $jabatan = $_POST['jabatan'];
    $alasan_cuti = $_POST['alasan_cuti'];
    $tgl_mulai = $_POST['tgl_mulai'];
    $tgl_selesai = $_POST['tgl_selesai'];
    $pengajuan_cuti = $_POST['pengajuan_cuti'];
    $sisa_cuti = $_POST['sisa_cuti'];
    $query = mysqli_query($koneksi, "insert into form_cuti (nik,nama,divisi,jabatan,alasan_cuti,tgl_mulai,tgl_selesai,pengajuan_cuti,sisa_cuti)
    value('$nik', '$nama', '$divisi', '$jabatan', '$alasan_cuti', '$tgl_mulai', '$tgl_selesai', '$pengajuan_cuti', '$sisa_cuti') ");
    if ($query) {
        header("location:tampil.php");
    } else {
        echo mysqli_error();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengajuan Cuti</title>
</head>

<body>
    <h2 class="text-center">
        Silahkan Masukan Data Diri
    </h2>
    <form method="POST" action="">
        <table class="table table-secondary">
            <tr>
                <td>NIK</td>
                <td><input class="form-control" placeholder="masukan NIK" aria-label="default input example" type="int" name="nik"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input class="form-control" placeholder="masukan nama" aria-label="default input example" type="varchar" name="nama"></td>
            </tr>
            <tr>
                <td>Divisi</td>
                <td>
                    <select name="divisi">
                        <option value="">Pilih Divisi</option>
                        <option value="HRD">HRD</option>
                        <option value="Produksi">Produksi</option>
                        <option value="Marketing">Marketing</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>
                    <select name="jabatan">
                        <option value="">Pilih Jabatan</option>
                        <option value="Manager">Manager</option>
                        <option value="Supervisor">Supervisor</option>
                        <option value="Leader">Leader</option>
                        <option value="Staff">Staff</option>
                        <option value="Admin">Admin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alasan Cuti</td>
                <td><input class="form-control" placeholder="masukan alasan cuti" aria-label="default input example" type="varchar" name="alasan_cuti"></td>
            </tr>
            <tr>
                <td>Tanggal Mulai Cuti</td>
                <td><input type="date" name="tgl_mulai"></td>
            </tr>
            <tr>
                <td>Tanggal Selesai Cuti</td>
                <td><input type="date" name="tgl_selesai"></td>
            </tr>
            <tr>
                <td>Pengajuan Cuti</td>
                <td><input class="form-control" placeholder="masukan jumlah cuti" aria-label="default input example" type="int" name="pengajuan_cuti"></td>
            </tr>
            <tr>
                <td>Sisa Cuti Tersedia</td>
                <td><input class="form-control" placeholder="masukan sisa cuti" aria-label="default input example" type="int" name="sisa_cuti"></td>
            </tr>

            <tr>
                <td><input class="btn btn-danger" type="submit" name="save" value="Simpan"></td>
                <td><a class="btn btn-danger" href="tampil.php" role="button">Tampilkan Data</a></td>
            </tr>


        </table>
    </form>

</body>

</html>