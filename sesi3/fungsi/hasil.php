<?php 
//jika belum mengisi maka tidak bis masuk
    if(!isset($_POST['submit'])){
        header("Location: index.php");
        exit;
    }

//menyimpan
$nama   =   $_POST['nama'];
$matkul =   $_POST['matkul'];
$uts    =   $_POST['uts'];
$uas    =   $_POST['uas'];
$tugas  =   $_POST['tugas'];

//menentukan nilai akhir

$nilai_akhir=($uts+$uas+$tugas)/3;
// mengambil sekaligus menjalankan skip yang ada di libfungsi untuk cetak
require_once'libfungsi.php'; 
$_nilai = $nilai_akhir;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Matakuliah</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">Tugas</th>
      <th scope="col">Nilai Akhir</th>
      <th scope="col">grade</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?=$nama?></td>
      <td><?=$matkul?></td>
      <td><?=$uts?></td>
      <td><?=$uas?></td>
      <td><?=$tugas?></td>
      <td><?=grade($_nilai)?></td> 
      <td><?= kelulusan($_nilai)?></td>
    </tr>

  </tbody>
</table>
</table>
</body>
</html>