<!-- where_togo_area_start  -->
<div class="where_togo_area">
    <div class="container">
        <div class="row align-items-center">
            <?php foreach ($saldo->result_array() as $key) : ?>
                <div class="form_area">
                        <h3>Saldo Anda : Rp.<?= number_format($key['saldo'], 0,',','.')?></h3>
                </div>
                <?php endforeach ?>


        </div>
    </div>
</div>
<!-- where_togo_area_end  -->



<!-- popular_destination_area_start  -->
<div class="popular_destination_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>Stand</h3>
                    <p>Berikut daftar-daftar stand yang terdapat pada pantai Batu Bolong.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <a href="<?= base_url('pengunjung/c_pengunjung/menustand') ?>">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="<?= base_url('template_pengunjung/img/destination/2.png') ?>" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Stand A </p>

                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>
<!-- popular_destination_area_end  -->