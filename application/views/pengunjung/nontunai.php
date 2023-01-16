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
<div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div class="destination_info">
                        <h3>Cara Melakukan Top Up Non Tunai</h3>
                        
                        <div class="single_destination">
                            <h4>Day-01</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                        </div>
                        <div class="single_destination">
                            <h4>Day-02</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                        </div>
                        <div class="single_destination">
                            <h4>Day-03</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                        </div>
                    </div>
                    <form >
                    <div class="single_destination">
                        
                        <h4>Day-03</h4>
                            <p>Upload Bukti Pembayaran</p>
                            <input type="file" name="bukti_pembayaran" class="form-control">
                        
                    </div>
                    <center><div class="mt-3">
                        <div class="">
                            <div class="submit_btn">
                                <button class="boxed-btn4" type="submit">submit</button>
                            </div>
                        </div>
                    </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="travel_variation_area">
        
        </div>