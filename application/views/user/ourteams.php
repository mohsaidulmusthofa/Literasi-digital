<section id="team" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Tim Kami</h2>
          <p class="section-subtitle">Kenali Tim kami</p>
        </div>
        <div class="row row-eq-height justify-content-center">

          <?php foreach ($jabatan as $jabatan) {?>
            <div class="col-lg-3 col-md-6 col-xs-12">
              <div class="single-team h-100" style="padding: 10px;">
                <img src="<?= base_url('uploads/user/'.$jabatan->FOTO)?>" alt="<?= $jabatan->JABATAN ?>-<?= $perusahaan[0]->NAMA_BISNIS ?>" 
                style="border-radius: 50%;">
                <div class="team-details">
                  <div class="team-inner">
                    <h4 class="team-title"><?= $jabatan->NAMA_MEMBER ?></h4>
                    <p><?= $jabatan->JABATAN ?></p>
                    <p><?= $jabatan->MOTTO ?></p>
                    <ul class="social-list">
                      <?php if ($jabatan->IG != NULL) {
                        echo 
                        '<li class="twitter">
                          <a href="https://www.instagram.com/'.$jabatan->IG.'">
                            <i class="lni-instagram-filled"></i>
                          </a>
                        </li>';
                      }?>
                      <?php if ($jabatan->FACEBOOK != NULL) {
                        echo 
                        '<li class="facebook">
                          <a href="http://www.facebook.com/'.$jabatan->FACEBOOK.'">
                            <i class="lni-facebook-filled"></i>
                          </a>
                        </li>';
                      }?>
                      <?php if ($jabatan->EMAIL != NULL) {
                        echo 
                        '<li class="google-plus">
                          <a href="mailto:' .$jabatan->EMAIL. '">
                            <i class="lni-envelope"></i>
                          </a>
                        </li>';
                      }?>
                      <?php if ($jabatan->LINKEDIN != NULL) {
                        echo 
                        '<li class="linkedin">
                            <a href="'.$jabatan->LINKEDIN.'">
                              <i class="lni-linkedin"></i>
                            </a>
                        </li>';
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