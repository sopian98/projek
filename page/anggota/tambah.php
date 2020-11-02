<div class="panel panel-default">
<div class="panel-heading">
        tambah data anggota
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form  method="POST" >
                                        <div class="form-group">
                                            <label>nim</label>
                                            <input class="form-control" name="id"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>nama</label>
                                            <input class="form-control" name="nama"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>tampat lahir</label>
                                            <input class="form-control" name="tampat_lahir"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>tanggal lahir</label>
                                            <input class="form-control" name="tanggal_lahir" type="date"/>
                                        </div>

                                        <div class="form-group">
                                            <label>jenis kelamin</label><br/>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="l" name="jk"/> laki-laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="p" name="jk"/> wanita
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>lokasi </label>
                                            <select class="form-control" name="prodi">
                                                <option value="ti"> teknik informatika</option>
                                                <option value="grafik"> disain</option>
                                            </select>
                                        </div>

                                        <input type="submit" name="simpan" value="simpan" class="btn btn-primary"/>
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
        $sql = $koneksi->query("insert into tb_anggota (id, nama, tampat_lahir, tgl_lahir, jk, prodi ) value('$id','$nama','$tampat_lahir','$tanggal_lahir','$jk','$prodi')");

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