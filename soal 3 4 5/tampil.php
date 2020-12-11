<?php
include "koneksi.php";
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
    <title>List Cuti Karyawan</title>
</head>

<body>
    <h2 class="text-center">
        List Cuti Karyawan
    </h2>

    <table class="table table-secondary">
        <tr>
            <td> NIK </td>
            <td> Nama </td>
            <td> Divisi </td>
            <td> Jabatan </td>
            <td> Alasan Cuti </td>
            <td> Tanggal Mulai Cuti</td>
            <td> Tanggal Selesai Cuti</td>
            <td> Pengajuan Cuti</td>
            <td> Sisa Cuti </td>
            <td>Action</td>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "select * from form_cuti");
        while ($sisa_cuti = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $sisa_cuti['nik']; ?></td>
                <td><?php echo $sisa_cuti['nama']; ?></td>
                <td><?php echo $sisa_cuti['divisi']; ?></td>
                <td><?php echo $sisa_cuti['jabatan']; ?></td>
                <td><?php echo $sisa_cuti['alasan_cuti']; ?></td>
                <td><?php echo $sisa_cuti['tgl_mulai']; ?></td>
                <td><?php echo $sisa_cuti['tgl_selesai']; ?></td>
                <td><?php echo $sisa_cuti['pengajuan_cuti']; ?></td>
                <td><?php echo $sisa_cuti['sisa_cuti']; ?></td>
                <td>
                    <a href="edit.php?id_karyawan=<?php echo $sisa_cuti['id_karyawan']; ?>">Edit
                        <a href="hapus.php?id_karyawan=<?php echo $sisa_cuti['id_karyawan']; ?>">Hapus
                </td>

            </tr>

        <?php } ?>

    </table>
    <table class="table table-dark">
        <tr>
            <td><a class="btn btn-danger" href="input.php" role="button">Kembali</a>
            <td>
        </tr>
    </table>


</body>

</html>