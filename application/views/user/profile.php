<!-- Services Section Start -->
<section id="services" class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <img src="<?= base_url('uploads/perusahaan/' . $perusahaan[0]->FOTO) ?>" alt="<?php $perusahaan[0]->FOTO ?>" style="width: 100%; height: 50vh; border-radius: 10%">
      </div>
      <div class="col-lg-6 mt-5 mt-lg-0">
        <div class="section-header">
          <h2 class="section-title">
            Siapa Kami
          </h2>
          <p class="section-subtitle" style="font-size: 1rem">
            <?= $perusahaan[0]->ABOUT_US ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Services Section End -->

<!-- Call to Action Start -->
<section class="call-action section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <div class="cta-trial text-center">
          <p class="section-subtitle" style="font-size:1.3rem; margin-bottom: 10px">
            <b>
              Nusantara Coco Indo
            </b>
          </p>
          <h2 class="section-title" style="color: #c79c72;">
            <?= $perusahaan[0]->SLOGAN ?>
          </h2>
          <p class="section-subtitle">
            Kami percaya bahwa Indonesia mampu bersaing di tingkat internasional dalam bidang ekspor, petani Indonesia memiliki
            potensi besar dan merupakan daerah yang sangat berkembang.
            Nusantara Coco Indo membangun rantai pasokan yang kuat. Pemberdayaan lingkungan dan sumber daya manusia untuk menghasilkan yang terbaik
            produk unggulan.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Call to Action End -->