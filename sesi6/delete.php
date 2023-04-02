<?php
    require_once'dbkoneksi.php';
    $delete= $_GET['id'];
    $sql = "DELETE FROM pelanggan WHERE id = ? ";
    $stmt= $conn -> prepare($sql);
    $stmt->execute([$delete]);      
?>