<?php $this->load->view('user/partials/header'); ?>
</header>
<!-- penutup header karena carousel di header -->
<div class="container" style="margin-top: 1rem;">
    <section class="section" id="details-product" style="height: 100%;">
        <div class="row">
            <div class="col-lg-4">
                <div class="title-product" style="text-align: center; margin: 2rem 0">
                    <h4>Cocofiber</h4>
                </div>
                <div class="image-product">
                    <img src="<?= base_url('assets/img/user/produk/cocofiber.jpg')?>" alt=""
                    style="width: 100%;">
                </div>
            </div>
            <div class="col-lg-4" style="padding: 1rem;">
                <div class="card" 
                style="border: 2px solid black; border-radius: 9px;margin: 2rem 0; height: 100%">
                    <div class="card-body">
                        <span style="margin: auto 0; font-size: 1rem">
                            Coconut Fiber Colour : Golden Brown
                            <br>
                            Length of Fiber : 15cm to 30cm
                            <br>
                            Moisture Content : 18% - 20%
                            <br>
                            Impurity : 2% Max
                            <br>
                            Dust : 3% Max
                            <br>
                            Husk : 4% Max
                            <br>
                            Weight/Ball : 90 - 130 kg
                            <br>
                            Container : 40 HC (17MT)
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="title-product-info" style="text-align: center; margin: 2rem 0">
                    <h4>Product Info</h4>
                </div>
                <div class="info-product" style="text-align: justify;">
                    <span style="padding: 4rem; font-size: 1rem">
                        Coconut fiber, is a natural fiber extracted from the husk of coconut and used in products such as floor mats, doormats, brushes and mattresses. Coir is the fibrous material found between the hard, internal shell and the outer coat of a coconut. Other uses of brown coir (made from ripe coconut) are in upholstery padding, sacking and horticulture. White coir, harvested from unripe coconuts, is used for making finer brushes, string, rope and fishing net.
                        <br>
                        Please contact us for other specifications
                    </span>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('user/partials/footer'); ?>