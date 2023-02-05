<?php
    $cmdUnggah = isset($_POST["cmdUnggah"]) ? $_POST["cmdUnggah"] : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Unggah File Gambar</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3 class="text-center" >Unggah File Gambar</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="unggah.php" method="post" enctype="multipart/form-data">
                <div class="row mb-1">
                    <label class="col-sm-2 col-form-label">Pilih File Gambar</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control"  name="txtGambar">
                    </div>
                </div>
            <button type="submit" class="btn btn-success"  name="cmdUnggah" value="Unggah">Unggah</button>

                </form>
                </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
    <?php
        if ($cmdUnggah == "Unggah")
        {
        $txtGambar = $_FILES["txtGambar"];

        $fileSementara = $txtGambar["tmp_name"];
        $namaFile = $txtGambar["name"];
        $tipeFile = $txtGambar["type"];
        $ukuranFile = $txtGambar["size"];
        if ($txtGambar["tmp_name"])
        {
        if ($tipeFile == "image/jpeg" || $tipeFile == "image/png")
        {
        copy($fileSementara, $namaFile);
        echo "<img src='".$namaFile."' />";
        }
        else
        {
        echo "<div class='alert alert-danger
        text-center'>File harus berupa gambar bertipe JPG atau PNG</div>";

        }
        }
        }
    ?>
            </div>
        </div>
    </div>
</body>
</html>