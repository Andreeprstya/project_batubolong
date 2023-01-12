<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Stand</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Halaman Tambah Stand</li>
                        </ol>
                        <div class="card-body">
                            <form action="<?= base_url('auth/r_auth')?>" method="post">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputIdPengunjung" type="text" name="first_name" />
                                    <label for="inputIdPengunjung">First Name</label>
                                    <?php echo form_error('first_name','<div class="alert alert-danger">','</div>') ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputHarga" type="text" name="last_name"/>
                                    <label for="inputJumlah">Last Name</label>
                                    <?php echo form_error('last_name','<div class="alert alert-danger">','</div>') ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputbayar" type="email" name="email"/>
                                    <label for="inputbayar">Email</label>
                                    <?php echo form_error('email','<div class="alert alert-danger">','</div>') ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputJumlah" type="text" name="username"/>
                                    <label for="inputJumlah">Username</label>
                                    <?php echo form_error('username','<div class="alert alert-danger">','</div>') ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="password" type="password" name="password"></input>
                                    <label for="password">Password</label>
                                    <?php echo form_error('password','<div class="alert alert-danger">','</div>') ?>
                                </div>
                                <div class="mb-3">
                                    <label for="inputEmail">Pilih Akun</label><br>
                                    <?php echo form_error('type','<div class="alert alert-danger">','</div>') ?>
                                    <input type="radio" name="type" value="Resto"/> Resto<br>
                                    <input type="radio" name="type" value="Penyewaan"/> Penyewaan<br>
                                </div> 
                                <div class="align-items-center mt-6 mb-0">
                                    <button class="btn btn-primary" type="submit">Buat Akun</button>
                                    <a href="<?= base_url('admin/c_admin/stand') ?>" class="btn btn-danger">Kembali</a>
                                </div>
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