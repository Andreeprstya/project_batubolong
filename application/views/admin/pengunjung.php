    
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Pengunjung Pesona Batu Bolong</h1>
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
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Pengunjung
                                <a href="<?= base_url('admin/c_admin/tambah_pengunjung') ?>"><button
                            class="btn btn-primary float-end">Tambah
                            Pengunjung</button></a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($pengunjung->result_array() as $key ): ?>
                                        <tr>
                                            <td><?php echo $key['first_name']?></td>
                                            <td><?php echo $key['last_name']?></td>
                                            <td><?php echo $key['username']?></td>
                                            <td><?php echo $key['email']?></td>
                                            <td>
                                                <a class="btn btn-success" type="submit" href="<?= base_url('admin/c_admin/tambah_pengunjung')?>">Edit</a>
                                                <button class="btn btn-danger">Hapus</button>
                                            </td>
                                        </tr>
                                        <?php endforeach?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>