
        <div class="content mb-5">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Daftar User</strong>
                                <a href="<?=base_url('user/tambah')?>" class="btn btn-primary btn-outline-primary btn-sm float-right">
                                    <i class="fa fa-plus"></i>&nbsp; Tambah User
                                </a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Nama</th>
                                            <th>E-Mail</th>
                                            <th>Level</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0;foreach($user as $data){$no++;?>
                                      <tr>
                                        <td class="text-center"><?=$no?></td>
                                        <td><?=$data->name?></td>
                                        <td><?=$data->email?></td>
                                        <td>
                                            <?php if ($data->level==1) {?>
                                                Admin
                                            <?php }else{?>
                                                Member
                                            <?php }?>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                              <a class='btn btn-primary btn-sm' href="<?=base_url('index.php/user/ubah/'.$data->id)?>">Ubah</a>
                                              <a class='btn btn-primary btn-sm' href="<?=base_url('index.php/user/ubah/'.$data->id)?>">Lihat</a>
                                              <button class='btn btn-danger btn-sm' data-toggle="modal" data-target="#hapus-<?=$data->id?>">Hapus</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div>

<?php foreach($user as $data){?>
  <div class="modal fade" id="hapus-<?=$data->id?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p>
                    Data ini akan dihapus secara Permanent..
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="<?=base_url('index.php/user/hapus/'.$data->id)?>" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>