<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Profile</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Halaman Edit Profile</li>
        </ol>
        <div class="card-body">
        <form action="<?php echo base_url('admin/c_admin/edit_profile') . $profile['id'] ?>" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single_input">
                                    <input name="first_name" id="input_first_name" cols="30" rows="10" value="<?php echo $profile['first_name'] ?>"></input>
                                </div>
                            </div>
                            <div class=" col-lg-12">
                                <div class="single_input">
                                    <input name="first_name" id="input_last_name" cols="30" rows="10" value="<?php echo $profile['last_name'] ?>"></input>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single_input">
                                    <input name="email" id="input_email" cols="30" rows="10" value="<?php echo $profile['email'] ?>"></input>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single_input">
                                    <input name="username" id="input_username" cols="30" rows="10" value="<?php echo $profile['username'] ?>"></input>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="submit_btn">
                                    <button class="boxed-btn4">
                                        <a href="<?= base_url('admin/c_admin/') ?>">Simpan</a>
                                    </button>
                                </div>
                                <br>
                                <div class="submit_btn">
                                    <button class="boxed-btn3">
                                        <a href="<?= base_url('admin/c_admin/') ?>">Kembali</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
    </div>