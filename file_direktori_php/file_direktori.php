<?php

    $hasil=mkdir("coba1");

 

    if ($hasil) {

        echo "Direktori baru berhasil dibuat";

    } else {

        echo "Direktori baru gagal dibuat";

    }
    
    
        $isi_dir=scandir("../belajarphp");
    
        foreach ($isi_dir as $data) {
    
            echo "$data <br/>";
    
        }
    
     
    
        echo "<h1>Descending</h1>";
    
        $isi_dir=scandir("../belajarphp",1);
    
        foreach ($isi_dir as $data) {
    
            echo "$data <br/>";
    
        }
    
    ?>
    
    
?>
