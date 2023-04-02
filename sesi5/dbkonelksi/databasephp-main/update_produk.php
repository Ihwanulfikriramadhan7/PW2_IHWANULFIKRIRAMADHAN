<?php
    require_once 'dbkoneksi.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM produk WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $tmp_lahir = $_POST['tmp_lahir'];
        $tgl_lahir = $_POST['tgl_lahir']; 
        $email = $_POST['email'];
        $kartu_id = $_POST['kartu_id'];

        $sql = "UPDATE pelanggan SET kode = :kode, nama = :nama, jk = :jk, tmp_lahir = :tmp_lahir,
                        tgl_lahir = :tgl_lahir, email = :email, kartu_id = :kartu_id WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':kode', $_kode);
        $stmt->bindParam(':nama', $_nama);
        $stmt->bindParam(':harga_beli', $_harga);
        $stmt->bindParam(':stok', $_stok);
        $stmt->bindParam(':min_stok', $_minstok);
        $stmt->bindParam(':jenis', $_jenis);
        $stmt->bindParam(':proses', $_proses);
        $stmt->execute();

        header('Location: index.php');


    }



    $sqljenis = "SELECT * FROM kartu ";
    $rowjenis = $conn -> prepare($sqljenis);
    $rowjenis->execute();

  
?>


<form method="post">
    <label>Kode</label>
    <input type="text" name="kode" value="<?php echo $row['kode']; ?>">
    <br>
    <label>Nama Produk</label>
    <input type="text" name="nama" value="<?php echo $row['nama']; ?>">
    <br>
    <label>Harga Beli</label>
    <input type="text" name="harga_beli" value="<?php echo $row['harga_beli']; ?>">
    <br>
    <label>Stok</label>
    <input type="date" name="stok" value="<?php echo $row['stok']; ?>">
    <br>
    <label>Minimu Stok</label>
    <input type="text" name="min_stok" value="<?php echo $row['min_stok']; ?>">
    <br>


    <label>Jenis Produk</label>
    <select name="jenis" id="jenis">
        <?php
            while($jenis = $rowjenis->fetch(PDO::FETCH_ASSOC)){              
        ?>
            <option value="<?= $jenis['id'] ?>">         <?= $jenis['nama']  ?>          </option>
        <?php
            }
        ?>


    </select>
    

    <br>
    <button type="submit" name="submit">Save</button>
</form>