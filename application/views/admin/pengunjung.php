    
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
                        <?php foreach ($pengunjung->result_array() as $key ): ?>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Stand
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Sebagai</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Sebagai</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $key['first_name']?></td>
                                            <td><?php echo $key['last_name']?></td>
                                            <td><?php echo $key['username']?></td>
                                            <td><?php echo $key['email']?></td>
                                            <td><?php echo $key['type']?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php endforeach?>
                    </div>
                </main>