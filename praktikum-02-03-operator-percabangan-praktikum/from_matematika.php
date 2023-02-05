<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Operator Aritmatika</title>
</head>
<body>
    <style>
        form{
            margin: 0px 500px auto;
        }
        h2,p{
            text-align: center;
        }
        .alert{
            text-align: center;
            font-weight: bold;
        }
    </style>
        <form method = "post">
            <h2>Operator Aritmatika</h2>
            <p>20192205145 - Muhammad Riyaldi</p><br>
            <p>Minggu, 13 November 2022 08:52:32</p>
            <div class="row mb-3">
                <label for="inputnumber3" class="col-sm-3 col-form-label">Angka Pertama</label>
                <div class="col-sm-8">
                <input type="number1" class="form-control" id="inputnumber3" name = "angka1">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputnumber3" class="col-sm-3 col-form-label">Angka Kedua</label>
                <div class="col-sm-8">
                <input type="number2" class="form-control" id="inputnumber3" name = "angka2">
                </div>
            </div>
            <button type="submit" class="btn btn-success col-sm-2" name = "simpan" value = "submit">HITUNG</button><br><br>


            <?php 
              echo "<h3>Hasil Operasi Matematika</h3>";

                if(isset($_POST['simpan'])=="submit"){
                    if(empty($_POST['angka1']))
                    {
                        echo '<div class="alert alert-primary" role="alert">Angka pertama tidak boleh kosong</div>';
                    }
                    elseif(empty($_POST['angka2']))
                    {
                        echo'<div  class="alert alert-warning" role="alert">Angka kedua tidak boleh kosong</div>';
                    }
                    else{
                        $angka1=22;
                        $angka2= 7;

                        $hasil1=$angka1 + $angka2;
                        $hasil2=$angka1 - $angka2;
                        $hasil3=$angka1 * $angka2;
                        $hasil4=$angka1 / $angka2;
                        $hasil5=$angka1 % $angka2;

                        echo "Hasil Penjumlahan : $hasil1 <br>";
                        echo "Hasil Pengurangan : $hasil2 <br>";
                        echo "Hasil Perkalihan  : $hasil3 <br>";
                        echo "Hasil Pembagian   : $hasil4 <br>";
                        echo "Sisa Bagi Hasil   : $hasil5 <br>";
                    }
                }
                
            ?>
            
        </form>
</body>
</html>