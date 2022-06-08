<?php $this->load->view('user/partials/header'); ?>
</header>
<!-- penutup header karena carousel di header -->
<div class="container" style="margin-top: 1rem;">
    <section class="section" id="details-product" style="height: 100%;">
        <div class="row">
            <div class="col-lg-4">
                <div class="title-product" style="text-align: center; margin: 2rem 0">
                    <h4><?= $detailproduk[0]->NAMA_PRODUK ?></h4>
                </div>
                <div class="image-product">
                    <img src="<?= base_url('./uploads/produk/' . $detailproduk[0]->FOTO) ?>" alt="<?= $detailproduk[0]->NAMA_PRODUK ?>" style="width: 100%;">
                </div>
            </div>
            <div class="col-lg-4" style="padding: 1rem;">
                <div class="card" style="border: 2px solid black; border-radius: 9px;margin: 2rem 0; height: 100%">
                    <div class="card-body">
                        <span style="margin: auto 0; font-size: 1rem">
                            <?= htmlspecialchars_decode($detailproduk[0]->RINCIAN) ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="title-product-info" style="text-align: center; margin: 2rem 0">
                    <h4>Info Produk</h4>
                </div>
                <div class="info-product" style="text-align: justify;">
                    <span style="padding: 4rem; font-size: 1rem">
                        <?= htmlspecialchars_decode($detailproduk[0]->DESKRIPSI) ?>
                    </span>
                    <div style="position:fixed; right:70px; bottom:10px;">
                        <a href="<?= htmlspecialchars_decode($detailproduk[0]->link) ?>" target="_blank">
                            <img src="<?= base_url('') ?>assets/img/shope.png" style="margin-bottom: 10px; width: 10em;"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('user/partials/footer'); ?>