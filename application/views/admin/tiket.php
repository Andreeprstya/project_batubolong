    
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Penjualan Tiket Pesona Batu Bolong</h1>
                        <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol> -->
                        <div class="card mb-4">
                            <!-- <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div> -->
                        </div>
                            <button class="btn btn-primary md-3" href="" >Semua Tiket</button>
                        <?php foreach ($tiket->result_array() as $key ): ?>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Tiket Hari ini
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID Tiket</th>
                                            <th>Tanggal</th>
                                            <th>waktu</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID Tiket</th>
                                            <th>Tanggal</th>
                                            <th>waktu</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $key['id_tiket']?></td>
                                            <td><?php echo $key['tanggal']?></td>
                                            <td><?php echo $key['waktu']?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php endforeach?>
                    </div>
                </main>