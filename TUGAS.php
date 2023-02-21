<?php
    $ns1 = ['id'=>1, 'nim'=>'102202', 'uts'=>80, 'uas'=>84, 'tugas'=>78];
    $ns2 = ['id'=>2, 'nim'=>'102203', 'uts'=>82, 'uas'=>85, 'tugas'=>79];
    $ns3 = ['id'=>3, 'nim'=>'102204', 'uts'=>83, 'uas'=>86, 'tugas'=>80];
    $ns4 = ['id'=>4, 'nim'=>'102205', 'uts'=>84, 'uas'=>97, 'tugas'=>81];
               
    $ar_nilai=[$ns1, $ns2, $ns3, $ns4];
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NIM</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TUGAS</th>
      <th scope="col">NILAI AKHIR</th>
      
    </tr>
  </thead>
  <tbody>

    <?php
        $nomor = 1;
        foreach($ar_nilai as $ns){
             $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;

    ?>

    <tr>
        <td> <?= $nomor ?>  </td>
        <td> <?= $ns ['nim']?>  </td>
        <td> <?= $ns ['uts']?>  </td>
        <td> <?= $ns ['uas']?>  </td>
        <td> <?= $ns ['tugas']?>  </td>
        <td> <?= number_format($nilai_akhir,2,',',',') ?>  </td>
    </tr> 
    
<?php
    $nomor++;
    }
?>   
</tbody>
</table>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>