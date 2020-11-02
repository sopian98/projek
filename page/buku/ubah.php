<?php

	$id = $_GET['id'];

	$sql = $koneksi->query("select * from tb_buku where id='$id'");

	$tampil = $sql->fetch_assoc();

	$tahun1 = $tampil['tahun_terbit'];

	$lokasi = $tampil['lokasi'];
?>


<div class="panel panel-default">
<div class="panel-heading">
        Ubah data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form  method="POST" >
                                        <div class="form-group">
                                            <label>judul</label>
                                            <input class="form-control" name="judul" value="<?php echo $tampil['judul'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>pengarang</label>
                                            <input class="form-control" name="pengarang" value="<?php echo $tampil['pengarang'];?>"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>penerbit</label>
                                            <input class="form-control" name="penerbit" value="<?php echo $tampil['penerbit'];?>"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>tahun terbit</label>
                                            <select class="form-control" name="tahun">
                                                <?php

                                                    $tahun = date("Y");

                                                    for ($i=$tahun-30; $i <= $tahun; $i++) { 
                                                        
                                                        if ($i==$tahun1) {

                                                        echo'<option value="'.$i.'" selected>'.$i.'</option>';

                                                        }else{
                                                        
                                                        echo'<option value="'.$i.'">'.$i.'</option>';
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>isbn</label>
                                            <input class="form-control" name="isbn" value="<?php echo $tampil['isbn'];?>"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>jumlah buku</label>
                                            <input class="form-control" type="number" name="jumlah" value="<?php echo $tampil['jumlah'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>lokasi </label>
                                            <select class="form-control" name="lokasi">
                                                <option value="rak1" <?php if ($lokasi=='rak1') {echo "selected";} ?>>rak 1</option>
                                                <option value="rak2" <?php if ($lokasi=='rak2') {echo "selected";} ?>>rak 2</option>
                                                <option value="rak3" <?php if ($lokasi=='rak3') {echo "selected";} ?>>rak 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>tanggal input</label>
                                            <input class="form-control" name="tanggal" type="date" value="<?php echo $tampil['tgl_input'];?>"/>
                                            
                                        </div>

                                        <input type="submit" name="simpan" value="simpan" class="btn btn-primary"/>
                                    </form>
                                </div>
                            </div>
</div>
</div>


<?php



 $judul = @$_POST['judul'];
 $pengarang = @$_POST['pengarang'];
 $penerbit = @$_POST['penerbit'];
 $tahun = @$_POST['tahun'];
 $isbn = @$_POST['isbn'];
 $jumlah = @$_POST['jumlah'];
 $lokasi = @$_POST['lokasi'];
 $tanggal = @$_POST['tanggal'];


 $simpan = @$_POST['simpan'];


    if ($simpan) {
        $sql = $koneksi->query("update tb_buku set judul='$judul', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun', isbn='$isbn', jumlah='$jumlah', lokasi='$lokasi', tgl_input='$tanggal' where id='$id'");

        if ($sql) {
            ?>
                <script type="text/javascript">
                alert ("Data berhasil disimpan");
                window.location.href="?page=buku";
                </script>
            <?php
        }
    }
?>