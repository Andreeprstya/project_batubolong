    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Stand Pesona Batu Bolong</h1>
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
                    Data Stand
                    <a href="<?= base_url('admin/c_admin/tambah_stand') ?>"><button
                            class="btn btn-primary float-end">Tambah
                            Stand</button></a>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Nama Toko</th>
                                <th>Nama Pemilik</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Tipe Stand</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($stand->result_array() as $key) : ?>
                            <tr>
                                <td><?php echo $key['first_name'] ?></td>
                                <td><?php echo $key['last_name'] ?></td>
                                <td><?php echo $key['username'] ?></td>
                                <td><?php echo $key['email'] ?></td>
                                <td><?php echo $key['type'] ?></td>
                                <td><?php echo $key['gambar'] ?></td>
                                <td>
                                    <button class="btn btn-success">Edit</button>
                                    <button class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>