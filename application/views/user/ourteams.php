<section id="team" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Our Teams</h2>
          <p class="section-subtitle">Let's get to know our teams</p>
        </div>
        <div class="row row-eq-height justify-content-center">

        <?php foreach ($jabatan as $jabatan) {?>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team h-100" style="padding: 10px;">
              <img src="<?= base_url('assets/img/user/teams/'.$jabatan->FOTO)?>" alt="<?= $jabatan->JABATAN ?>-<?= $perusahaan[0]->NAMA_BISNIS ?>" 
              style="border-radius: 50%;">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title"><?= $jabatan->NAMA_MEMBER ?></h4>
                  <p><?= $jabatan->JABATAN ?></p>
                  <p><?= $jabatan->MOTTO ?></p>
                  <ul class="social-list">
                    <?php if ($jabatan->IG != NULL) {
                      echo 
                      '<li><a class="twitter" href="https://www.instagram.com/'.$jabatan->IG.'"><i class="lni-instagram-filled"></i></a></li>';
                    }?>
                    <?php if ($jabatan->FACEBOOK != NULL) {
                      echo 
                      '<li><a class="facebook" href="http://www.facebook.com/'.$jabatan->FACEBOOK.'"><i class="lni-facebook-filled"></i></a></li>';
                    }?>
                    <?php if ($jabatan->EMAIL != NULL) {
                      echo 
                      '<li><a class="google-plus" href="mailto:' .$jabatan->EMAIL. '"><i class="lni-envelope"></i></a></li>';
                    }?>
                    <?php if ($jabatan->LINKEDIN != NULL) {
                      echo 
                      '<li class="linkedin"><a href="'.$jabatan->LINKEDIN.'"><i class="lni-linkedin-original"></i></a></li>';
                    }?>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        <?php }?>

        </div>
      </div>
    </section>