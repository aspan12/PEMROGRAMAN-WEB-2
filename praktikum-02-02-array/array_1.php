<!DOCTYPE html>
<html lang="en">
<head>

    <title>Mengakses Variabel Array</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <?php
        $mahasiswa = array
            (
                    array("nim"=>"TI-001", "nama_mahasiswa"=>"Andi", "program_studi"=>"Teknik Informatika"),
                    array("nim"=>"TI-002", "nama_mahasiswa"=>"Budi", "program_studi"=>"Teknik Informatika"),
                    array("nim"=>"TI-003", "nama_mahasiswa"=>"Wati", "program_studi"=>"Teknik Informatika"),
                    array("nim"=>"SI-001", "nama_mahasiswa"=>"Fatma", "program_studi"=>"Sistem Informasi"),
                    array("nim"=>"SI-002", "nama_mahasiswa"=>"Wawan", "program_studi"=>"Sistem Informasi")
            );
    ?>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Program Studi</th>
        </tr>
        <tr>
            <td>1</td>
            <td>TI-001</td>
            <th>Andi</th>
            <th>Teknik Informatika</th>
        </tr>
        <tr>
            <td>1</td>
            <td>TI-002</td>
            <th>Budi</th>
            <th>Teknik Informatika</th>
        </tr>
        <tr>
            <td>1</td>
            <td>TI-003</td>
            <th>Wati</th>
            <th>Teknik Informatika</th>
        </tr>
        <tr>
            <td>1</td>
            <td>SI-001</td>
            <th>Fatma</th>
            <th>Sistem Informasi</th>
        </tr>
        <tr>
            <td>1</td>
            <td>SI-002</td>
            <th>Wawan</th>
            <th>Sistem Informasi</th>
        </tr>
        <?php
            /* Tulis Code Anda di sini */
        ?>
    </table>
</body>
</html>