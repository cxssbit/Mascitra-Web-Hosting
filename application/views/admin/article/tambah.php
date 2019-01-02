       <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tambah Article Baru</strong>
                            </div>
                            <div class="card-body">
                              <form action="<?=base_url('article/tambah')?>" method="post">
                                <div class="form-group">
                                  <label for="input-1">Judul</label>
                                  <input type="text" class="form-control" id="input-1" placeholder="Judul Article" name="judul">
                                </div>
                                  <div class="form-group">
                                  <label for="input-2">Tanggal</label>
                                  <input type="text" class="form-control" id="input-2" placeholder="dd/mm/yy" name="tanggal">
                                </div>
                                <div class="form-group">
                                  <label for="input-3">Isi</label>
                                  <textarea class="form-control" id="input-3" rows="3" name="isi"></textarea>
                                </div>
                                <a href="<?=base_url('article')?>" class="btn btn-danger">
                                    <i class="fa fa-sign-out"></i>&nbsp; cancel
                                </a>
                                <button type="submit" class="btn btn-primary float-right" name="submit" value="submit">
                                    <i class="fa fa-save"></i>&nbsp; Simpan
                                </button>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

