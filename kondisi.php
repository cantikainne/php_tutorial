<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Biodata </title>
    <style>
      body {
        background-color: #e8e8e8;
      }
      .kartu {
        width: 800px;
        margin: 0 auto;
        margin-top: 70px;
            box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,.03);
    transition: all .3s;
      } 
      .foto {
        padding: 20px;
      }
      tbody {
    font-size: 20px;
    font-weight: 300;
}
.biodata {
    margin-top: 30px;
}
    </style>
  </head>
  <body>
        
<div class="container">
  <div class="card kartu">
    <div class="row">
      <div class="col-md-4">
      <div class="foto">
        <img src="FTO.CANTIKA.jpeg" alt="" width="200" height="auto">
      </div>
      </div>
      <div class="col-md-8 kertas-biodata">
        <div class="biodata">
        <table width="100%" border="0">
    <tbody><tr>
        <td valign="top">
        <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
          <tbody>
            <tr>
              <td width="25%" valign="top" class="textt">Nama</td>
                <td width="2%">:</td>
                <td style="color: rgb(118, 157, 29); font-weight:bold">Cantika Inne Nurhayati</td>
            </tr>
          <tr>
              <td class="textt">Jenis Kelamin</td>
                <td>:</td>
                <td>Perempuan</td>
            </tr>
          <tr>
              <td class="textt">Tempat Lahir</td>
                <td>:</td>
                <td>Pasuruan,surabaya</td>
            </tr>
          <tr>
              <td class="textt">Tanggal Lahir</td>
                <td>:</td>
                <td>07/06/2007</td>
            </tr>
          <tr>
              <td class="textt">sekolah</td>
                <td>:</td>
                <td>Smkn 2 subang</td>
            </tr>
          <tr>
              <td valign="top" class="textt">kelas</td>
                <td valign="top">:</td>
                <td>XI</td>
            </tr>
            <tr>
              <td valign="top" class="textt">Jurusan</td>
                <td valign="top">:</td>
                <td>Rekayasa Perangkat Lunak dan Gim</td>
            </tr>
        </tbody></table>
        </td>
    </tr>
    </tbody></table>
  </div>
      </div>
    </div>
  </div>
</div>
  </body>
</html>
</body>
</html>
<?php
$total_belanja = 150000;

if($total_belanja > 100000){
    echo "Anda dapat hadiah";
}