<a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;">tambah data anggota </a>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                              Data buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>no</th>
                                            <th>nim</th>
                                            <th>nama</th>
                                            <th>tampat lahir</th>
                                            <th>tanggal lahir</th>
                                            <th>jenis kelamin</th>
                                            <th>program studi</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_anggota");
                                            
                                            while ($data=$sql->fetch_assoc()) {

                                            $jk = ($data['jk']==l)?"laki-laki":"perempuan";
                                            $prodi = ($data['prodi']==ti)?"teknik informatika":"grafis/desain";
                                        ?>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['id'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['tampat_lahir'];?></td>
                                            <td><?php echo $data['tgl_lahir'];?></td>
                                            <td><?php echo $jk;?></td>  
                                            <td><?php echo $prodi;?></td> 
                                            <td>
                                                <a href="?page=anggota&aksi=ubah&id=<?php echo $data['id'];?>" class="btn btn-info" >ubah</a>
                                                <a onclick="return confirm('anda yakin menghapus file ini...???')" href="?page=anggota&aksi=hapus&id=<?php echo $data['id'];?>" class="btn btn-danger" >hapus</a>
                                            </td>   

                                        </tr>

                                        <?php
                                            }
                                        ?>
                                    </tbody>
                             </div>
                        </div>
                    </div>  
            </div>      
</div>      
   