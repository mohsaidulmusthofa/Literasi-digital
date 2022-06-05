<section id="portfolios" class="section">
  <!-- Container Starts -->
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Produk Kami</h2>
      <p class="section-subtitle" style="font-size: 1rem;">
      Nusantara Coco Indo Indonesia menyediakan produk turunan kelapa terbaik di Indonesia dengan mengutamakan Kualitas, Kuantitas dan
         Kontinuitas suatu produk.
      </p>
    </div>

    <!-- Portfolio Recent Projects -->
    <div id="portfolio" class="row">
      <?php foreach ($produk as $produks) : ?>
        <div class="col-lg-4 col-md-6 col-xs-12 mix development print">
          <div class="portfolio-item">
            <div class="shot-item">
              <a href="<?= base_url('Pages/product_details/' . $produks->ID_PRODUK) ?>" target="_blank">
                <img src="<?= base_url('./uploads/produk/' . $produks->FOTO) ?>" alt="<?= $produks->NAMA_PRODUK ?>" style="height: 20rem;" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <span style="font-weight: bolder; font-size: 1rem; color: white"><?= $produks->NAMA_PRODUK ?></span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach ?>

    </div>
  </div>
  <!-- Container Ends -->
</section>