<main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Top Up Non Tunai</h1>
            <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Halaman Top Up Saldo Non Tunai</li>
                        </ol>
            <div class="card mb-4">
                <!-- <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div> -->
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Stand
                    
                </div>
                <div class="card-body">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nomor Pengunjung</th>
                                <th>Biaya Admin</th>
                                <th>Bukti Bayar</th>
                                <th>Bayar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($nontunai->result_array() as $key) : ?>
                            <tr>
                                <th><p><?=$key['id_user']?></p></th>
                                <th><p>Rp.1000</p></th>
                                <th>
                                    <img src="<?= base_url('') . 'img_bukti/' . $key['gambar']?>" width="183" height="183" alt="">        
                                </th>
                                <th>
                                    <a class="btn btn-success" type="submit"
                                        href="<?= base_url('admin/c_admin/proses_bayar/' . $key['id_bukti']) ?>">Proses
                                    </a>
                                </th>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>x