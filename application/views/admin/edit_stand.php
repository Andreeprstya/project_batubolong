<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Data Stand</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Silahkan melakukan edit data stand</li>
                        </ol>
                        <div class="card-body">
                            <form action="<?= base_url('admin/c_admin/prosestopup') ?>" method="post">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputIdPengunjung" type="text" name="id" />
                                    <label for="inputIdPengunjung">Nama Toko</label>
                                    <?php echo form_error('id','<div class="alert alert-danger">','</div>') ?>
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputJumlah" type="text" name="jumlah"/>
                                    <label for="inputJumlah">Nama Pemilik</label>
                                    <?php echo form_error('jumlah','<div class="alert alert-danger">','</div>') ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputJumlah" type="text" name="jumlah"/>
                                    <label for="inputJumlah">Tipe Stand</label>
                                    <?php echo form_error('jumlah','<div class="alert alert-danger">','</div>') ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputJumlah" type="text" name="jumlah"/>
                                    <label for="inputJumlah">Keterangan</label>
                                    <?php echo form_error('jumlah','<div class="alert alert-danger">','</div>') ?>
                                </div>
                                
                                <td class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                    <a class="btn btn-danger" href="<?= base_url('admin/c_admin/stand')?>" type="submit">Batal</a>
                                </td>
                                
                            </form>
                            <!-- <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div> -->
                    </div>