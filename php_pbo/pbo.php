<?php
// buat class sepeda_motor
class sepeda_motor {
// buat property untuk class sepeda_motor
var $pemilik;
var $merk;
var $jenis;
// buat method untuk class sepeda_motor
function hidupkan_sepeda_motor() {
return "Hidupkan sepeda_motor";
}
function matikan_sepeda_motor() {
return "Matikan sepeda_motor";
}
}
// buat objek dari class sepeda_motor (instansiasi)
$sepeda_motor_cantika = new sepeda_motor();
// set property
$sepeda_motor_cantika->pemilik="cantika";
$sepeda_motor_cantika->merk="scoopy";
$sepeda_motor_cantika->jenis="Metik";
// tampilkan property
echo $sepeda_motor_cantika->pemilik;
echo "<br />";
echo $sepeda_motor_cantika->merk;
echo "<br />";
echo $sepeda_motor_cantika->jenis;
echo "<br />";
// tampilkan method
echo $sepeda_motor_cantika->hidupkan_sepeda_motor();
echo "<br />";
echo $sepeda_motor_cantika->matikan_sepeda_motor();
?>