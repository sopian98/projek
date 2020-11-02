<?php

$id = $_GET['id'];
$judul = $_GET['judul'];

$sql = $koneksi->query("update * from tb_transaksi set status='kembali' whare id='$id'");

$swl = $koneksi->query("update * from tb_buku set jumlah=(jumlah+1) where judul='$judul'");

    ?>
    
        <script type="text/javascript">
            alert("preses kembalikan buku berhasil")
            window.location.href="?page=transaksi";
        </script>
    
    <?php

?>