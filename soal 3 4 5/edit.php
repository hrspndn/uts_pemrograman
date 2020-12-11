<?php
include "koneksi.php";
$id = $_GET['id_karyawan'];
$query = mysqli_query($koneksi, "SELECT * FROM form_cuti WHERE id_karyawan=$id ");
$response = mysqli_fetch_row($query);
$data = ['nik', 'nama', 'divisi', 'jabatan', 'alasan_cuti', 'tgl_mulai', 'tgl_selesai', 'pengajuan_cuti', 'sisa_cuti'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Cuti Karyawan</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <h2 class="text-center">
        Form Edit Cuti Karyawan
    </h2>
    <form method="POST" action="">
        <input type="hidden" name="id_karyawan" value="<?= $id ?>" />
        <table class="table table-secondary">
            <tr>
                <td>Input NIK</td>
                <td><input class="form-control" placeholder="masukan nama" aria-label="default input example" type="varchar" name="nik" value="<?= $response[1] ?>" />
            </tr>
            <tr>
                <td>Input Nama</td>
                <td><input class="form-control" placeholder="masukan nama" aria-label="default input example" type="varchar" name="nama" value="<?= $response[2] ?>" />
            </tr>
            <tr>
                <td>Input Divisi</td>
                <td>
                    <select name="divisi">
                        <option value="">Pilih Divisi</option>
                        <option value="HRD">HRD</option>
                        <option value="Produksi">Produksi</option>
                        <option value="Marketing">Marketing</option>
                        value="<?= $response[3] ?>"
                    </select>
                </td>
            </tr>
            <tr>
                <td>Input Jabatan</td>
                <td>
                    <select name="jabatan">
                        <option value="">Pilih Jabatan</option>
                        <option value="Manager">Manager</option>
                        <option value="Supervisor">Supervisor</option>
                        <option value="Leader">Leader</option>
                        <option value="Staff">Staff</option>
                        <option value="Admin">Admin</option>
                        value="<?= $response[4] ?>"
                    </select>
                </td>

            </tr>
            <tr>
                <td>Input Alasan Cuti</td>
                <td><input class="form-control" placeholder="masukan nama" aria-label="default input example" type="varchar" name="alasan_cuti" value="<?= $response[5] ?>" />
            </tr>
            <tr>
                <td>Input Tanggal Mulai Cuti</td>
                <td><input class="form-control" placeholder="masukan nama" aria-label="default input example" type="date" name="tgl_mulai" value="<?= $response[6] ?>" />
            </tr>
            <tr>
                <td>Input Tanggal Selesai Cuti</td>
                <td><input class="form-control" placeholder="masukan nama" aria-label="default input example" type="date" name="tgl_selesai" value="<?= $response[7] ?>" />
            </tr>
            <tr>
                <td>Pengajuan Cuti</td>
                <td><input class="form-control" placeholder="masukan nama" aria-label="default input example" type="int" name="pengajuan_cuti" value="<?= $response[8] ?>" />
            </tr>
            <tr>
                <td>Sisa Cuti</td>
                <td><input class="form-control" placeholder="masukan nama" aria-label="default input example" type="int" name="sisa_cuti" value="<?= $response[9] ?>" />
            </tr>

            <tr>
                <td>
                    <button class='btn btn-danger' type="submit" name="submit">Simpan Perubahan</button>
                </td>
                <td>

                </td>
            </tr>
        </table>
    </form>

</body>

</html>

<?php
include "koneksi.php";
if (isset($_POST['submit'])) {
    // ambil smua inputan
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $divisi = $_POST['divisi'];
    $jabatan = $_POST['jabatan'];
    $alasan_cuti = $_POST['alasan_cuti'];
    $tgl_mulai = $_POST['tgl_mulai'];
    $tgl_selesai = $_POST['tgl_mulai'];
    $pengajuan_cuti = $_POST['pengajuan_cuti'];
    $sisa_cuti = $_POST['sisa_cuti'];

    // simpan data ke databse
    $query = mysqli_query($koneksi, "UPDATE form_cuti SET nik='$nik', nama='$nama', divisi='$divisi', jabatan='$jabatan', alasan_cuti='$alasan_cuti', tgl_mulai='$tgl_mulai', pengajuan_cuti='pengajuan_cuti', sisa_cuti='sisa_cuti' WHERE id_karyawan='$id' ");
    if ($query) {
        echo "<script> alert('Data Berhasil diupdate ke DB !');</script>";
        echo "<script> location='tampil.php'; </script>";
    } else {
        echo "Data gagal di masukan ke databse";
    }
}
