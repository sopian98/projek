<div class="panel panel-default">
<div class="panel-heading">
        tambah data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form  method="POST" >
                                        <div class="form-group">
                                            <label>judul</label>
                                            <input class="form-control" name="judul"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>pengarang</label>
                                            <input class="form-control" name="pengarang"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>penerbit</label>
                                            <input class="form-control" name="penerbit"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>tahun terbit</label>
                                            <select class="form-control" name="tahun">
                                                <?php

                                                    $tahun = date("Y");

                                                    for ($i=$tahun-30; $i <= $tahun ; $i++) { 
                                                        echo'
                                                        
                                                            <option value="'.$i.'">'.$i.'</option>

                                                        ';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>isbn</label>
                                            <input class="form-control" name="isbn"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>jumlah buku</label>
                                            <input class="form-control" type="number" name="jumlah"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>lokasi </label>
                                            <select class="form-control" name="lokasi">
                                                <option value="rak1"> rak 1</option>
                                                <option value="rak2"> rak 2</option>
                                                <option value="rak3"> rak 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>tanggal input</label>
                                            <input class="form-control" name="tanggal" type="date"/>
                                            
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
        $sql = $koneksi->query("insert into tb_buku (judul, pengarang, penerbit, tahun_terbit, isbn, jumlah, lokasi, tgl_input ) value('$judul','$pengarang','$penerbit','$tahun','$isbn','$jumlah','$lokasi','$tanggal')");

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