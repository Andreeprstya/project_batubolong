<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Profile</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Halaman Edit Profile</li>
        </ol>
        <div class="card-body">
            <form action="<?php echo base_url('admin/c_admin/edit_profile/') . $user['id'] ?>" method="post"
                enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>" />
               
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputId" type="text" name="first_name"
                        value="<?php echo $user['first_name'] ?>" />
                    <label for="inputIdPengunjung">First Name</label>
                    <?php echo form_error('first_name', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                
                <br>

                <div class="align-items-center mt-6 mb-0">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <a href="<?= base_url('admin/c_admin/User') ?>" class="btn btn-danger">Kembali</a>
                </div>
            </form>
    </div>