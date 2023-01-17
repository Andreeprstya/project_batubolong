<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Profile</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Halaman Edit Profile</li>
        </ol>
        <div class="card-body">
        <form action="<?php echo base_url('admin/c_admin/edit_profile/') . $profile['id'] ?>" method="post">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputIdPengunjung" type="text" name="first_name" value="<?php echo $profile['first_name'] ?>"/>
                                    <label for="inputIdPengunjung">First Name</label>
                                    <?php echo form_error('id','<div class="alert alert-danger">','</div>') ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputIdPengunjung" type="text" name="last_name" value="<?php echo $profile['last_name'] ?>"/>
                                    <label for="inputIdPengunjung">Last Name</label>
                                    <?php echo form_error('id','<div class="alert alert-danger">','</div>') ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputIdPengunjung" type="text" name="username" value="<?php echo $profile['username'] ?>"/>
                                    <label for="inputIdPengunjung">Username</label>
                                    <?php echo form_error('id','<div class="alert alert-danger">','</div>') ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputIdPengunjung" type="text" name="password" value="<?php echo $profile['password'] ?>"/>
                                    <label for="inputIdPengunjung">Password</label>
                                    <?php echo form_error('id','<div class="alert alert-danger">','</div>') ?>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                            </form>
    </div>