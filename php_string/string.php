<?php

$nama = 'Cantika'; # tanda petik satu

$pesan = "Selamat datang {$nama}"; # tanda petik dua
$pesan2 = 'Selamat datang {$kamu}'; # tanda petik satu

# ketika di-echo
echo $pesan . '<br>'; # Selamat datang Cantika
echo $pesan2 . '<br>'; # Selamat datang {$kamu}