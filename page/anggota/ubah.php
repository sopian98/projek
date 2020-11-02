<?php

	$id = $_GET['id'];

	$sql = $koneksi->query("select * from tb_anggota where id='$id'");

    $tampil = $sql->fetch_assoc();
    
    $jkl =$tampil['jk'];

    $prodi =$tampil['prodi'];


?>

<div class="panel panel-default">
<div class="panel-heading">
        ubah data anggota
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form  method="POST" >
                                        <div class="form-group">
                                            <label>nim</label>
                                            <input class="form-control" name="id" value="<?php echo $tampil['id'];?>" readonly/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama'];?>"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>tampat lahir</label>
                                            <input class="form-control" name="tampat_lahir" value="<?php echo $tampil['tampat_lahir'];?>"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>tanggal lahir</label>
                                            <input class="form-control" name="tanggal_lahir" type="date" value="<?php echo $tampil['tgl_lahir'];?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>jenis kelamin</label><br/>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="l" name="jk" value <?php echo ($jkl==l)?"checked":"";?>/> laki-laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="p" name="jk" value <?php echo ($jkl==p)?"checked":"";?>/> wanita
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>lokasi </label>
                                            <select class="form-control" name="prodi">
                                                <option value="ti"<?php if ($prodi=='ti') { echo "selected";}?>> teknik informatika</option>
                                                <option value="grafik"<?php if ($prodi=='grafik') { echo "selected";}?>> disain</option>
                                            </select>
                                        </div>

                                        <input type="submit" name="simpan" value="ubah" class="btn btn-primary"/>
                                    </form>
                                </div>
                            </div>
</div>
</div>


<?php



 $id = @$_POST['id'];
 $nama = @$_POST['nama'];
 $tampat_lahir = @$_POST['tampat_lahir'];
 $tanggal_lahir = @$_POST['tanggal_lahir'];
 $jk = @$_POST['jk'];
 $prodi = @$_POST['prodi'];


 $simpan = @$_POST['simpan'];


    if ($simpan) {
        $sql = $koneksi->query("update tb_anggota set nama='$nama', tampat_lahir='$tampat_lahir', tgl_lahir='$tanggal_lahir', jk='$jk', prodi='$prodi' where id='$id'");

        if ($sql) {
            ?>
                <script type="text/javascript">
                alert ("Data berhasil disimpan");
                window.location.href="?page=anggota";
                </script>
            <?php
        }
    }
?>