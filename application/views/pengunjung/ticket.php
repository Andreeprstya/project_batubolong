
  <!-- where_togo_area_start  -->
  <div class="where_togo_area">
        <div class="container">
            <div class="row align-items-center">
                    <?php foreach ($saldo->result_array() as $key) : ?>
                    <div class="form_area">
                        <h3>Saldo Anda : <?= $key['saldo']?></h3>
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
                    
                   
                    <div class="contact_join">
                        <h3>Beli Ticket</h3>
                        <form action="#">
                            <div class="row">
                            <div class="col-lg-12">
                                    <div class="single_input">
                                        <input name="" id="" cols="30" rows="10"placeholder="Jumlah" ></input>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_input">
                                        <input name="" id="" cols="30" rows="10"placeholder="Harga" ></input>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_input">
                                        <input name="" id="" cols="30" rows="10"placeholder="Total" ></input>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="submit_btn">
                                        <button class="boxed-btn4" type="submit">submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>