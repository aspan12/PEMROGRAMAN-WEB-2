<?php

    $programmer_php = ["Andi", "Budi", "Wati", "Gunawan", "Baco", "Becce", "Fatma"];
    $programmer_phyton = ["Andi", "Fatma", "Fadil", "Haris", "Baco"];

    /** Nilai Variabel $programmer_php secara Ascending
     */
    sort($programmer_php);
    echo "Daftar nama \$Programmer_php <br>";
    print_r($programmer_php);
    echo "<br> <br>";
    
     /** Nilai Variabel $programmer_phyton secara Descending
     */
    rsort($programmer_phyton);
    echo "Daftar nama \$Programmer_phyton <br>";
    print_r($programmer_phyton);
    echo "<br> <br>";

     /** Nilai Selisih Variabel $programmer_php dan Programmer_Phyton
     */
    echo "Daftar nama \$programmer_php <br>";
    print_r($programmer_php);
    echo "<br>";
    echo "Daftar nama \$Programmer_phyton <br>";
    print_r($programmer_phyton);
    echo "<br>";
    $kelompok_programmer_php= array_diff($programmer_php, $programmer_phyton);
    echo "Daftar nama yang ada di Programmer_php yang tidak termasuk Programmer_phyton<br>";
    print_r($kelompok_programmer_php);
    echo "<br> <br>";

    /** Nilai Selisih Variabel $programmer_php dan Programmer_Phyton
     */
    echo "Daftar nama \$Programmer_phyton <br>";
    print_r($programmer_phyton);
    echo "<br>";
    echo "Daftar nama \$programmer_php <br>";
    print_r($programmer_php);
    echo "<br>";
    $kelompok_programmer_phyton= array_diff($programmer_phyton, $programmer_php);
    echo "Daftar nama yang ada di Programmer_Phyton yang tidak termasuk Programmer_Php<br>";
    print_r($kelompok_programmer_phyton);
    echo "<br> <br>";
  
    /** Daftar nama yang sama pada $programmer_php dan $programmer_phyton
     */
    $result = array_intersect($programmer_php, $programmer_phyton);
    echo "Daftar nama yang sama pada Programmer_Php dan Programmer_Phyton <br>";
    print_r($result);
    echo "<br> <br>";

    /** Menyatukan nama mahasiswa yang ada pada $programmer_php dan $programmer_phyton
     */
    print_r(array_merge($programmer_php, $programmer_phyton));
    echo "<br> <br>";

    /**Penambahan data kedalam Kelompok PHP menggunakan array_push
     */    
    echo "Menambahkan nama mahasiswa ke Kelompok PHP<br>";
    array_push($programmer_php, "Muhammad_Riyaldi");
    print_r($programmer_php);
?>