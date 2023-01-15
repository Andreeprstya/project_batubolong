<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Stand</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Halaman Edit Stand</li>
        </ol>
        <div class="card-body">

            <?php foreach ($stand->result_array() as $key) {
            ?>
            <form action="<?php echo base_url('admin/c_admin/edit_stand/') . $key['id_stand'] ?>" method="post"
                enctype="multipart/form-data">
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputIdStand" type="text" name="nama_stand"
                        value="<?php echo $key['nama_stand'] ?>" />
                    <label for="inputIdPengunjung">Nama Stand</label>
                    <?php echo form_error('nama_stand', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="NamaPemilik" type="text" name="nama_pemilik"
                        value="<?php echo $key['nama_pemilik'] ?>" />
                    <label for="inputJumlah">Nama Pemilik</label>
                    <?php echo form_error('nama_pemilik', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <div class="mb-3">
                    <label for="inputEmail">Pilih Tipe</label><br>
                    <?php echo form_error('tipe_stand', '<div class="alert alert-danger">', '</div>') ?>
                    <input type="radio" name="tipe_stand" value="Resto" /> Resto<br>
                    <input type="radio" name="tipe_stand" value="Penyewaan" /> Penyewaan<br>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputJumlah" type="text" name="keterangan"
                        value="<?php echo $key['keterangan'] ?>" />
                    <label for="inputJumlah">Keterangan</label>
                    <?php echo form_error('keterangan', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <label for="inputGambar">Gambar :</label>
                <div class="form mb-2">
                    <input class="form-control" id="inputGambar" type="file" name="gambar"
                        value="<?php echo $key['gambar'] ?>" />
                    <?php echo form_error('gambar', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <br>

                <div class="align-items-center mt-6 mb-0">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <a href="<?= base_url('admin/c_admin/stand') ?>" class="btn btn-danger">Kembali</a>
                </div>
            </form>
            <?php
            }
            ?>
        </div>
    </div>