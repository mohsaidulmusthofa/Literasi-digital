<section id="features" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Our Mission</h2>
          <p class="section-subtitle"></p>
        </div>
        <div class="row">
          <?php 
          foreach ($ourmission as $ourmission) {
          ?>
            <div class="col-lg-4" style="margin-top: 4rem;">
            <div style="padding: 0rem 8.5rem; margin-bottom:2rem">
              <img src="<?= base_url('uploads/ourmission/'.$ourmission->FOTO)?>" alt=""
              style="width: 100%;">
            </div>
            <p style="font-weight: 600; text-align:center; font-size: 1rem">
              <?= $ourmission->DESCRIPTION ?>
            </p>
          </div>
          <?php } ?>

        </div>
      </div>
    </section>