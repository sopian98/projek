<a href="?page=buku&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;">tambah buku </a>
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
                                            <th>judul</th>
                                            <th>pengarang(s)</th>
                                            <th>penerbit</th>
                                            <th>isbn</th>
                                            <th>jumlah buku</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_buku");
                                            
                                            while ($data=$sql->fetch_assoc()) {
                                        ?>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['judul'];?></td>
                                            <td><?php echo $data['pengarang'];?></td>
                                            <td><?php echo $data['penerbit'];?></td>
                                            <td><?php echo $data['isbn'];?></td>
                                            <td><?php echo $data['jumlah'];?></td> 
                                            <td>
                                                <a href="?page=buku&aksi=ubah&id=<?php echo $data['id'];?>" class="btn btn-info" >ubah</a>
                                                <a onclick="return confirm('anda yakin menghapus file ini...???')" href="?page=buku&aksi=hapus&id=<?php echo $data['id'];?>" class="btn btn-danger" >hapus</a>
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
   