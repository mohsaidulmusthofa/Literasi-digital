    <section id="contact" class="section">      
      <div class="contact-form">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle">Contact us for more information</p>
          </div>
          <div class="row">          
            <div class="col-lg-9 col-md-9 col-xs-12">
              <div class="contact-block">
                <form  method="POST" action="<?= site_url('admin/Pesan/create/') ?>" enctype="multipart/form-data" >
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name" value="<?= set_value('name'); ?>">
                        <div class="help-block with-errors"></div>
                        <?= form_error('name', '<small class="text-danger pl-2">', '</small>'); ?>
                      </div>                                 
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" placeholder="Your No Phone" id="telepon" name="telepon" class="form-control" required data-error="Please enter your No Phone" value="<?= set_value('telepon'); ?>">
                        <div class="help-block with-errors"></div>
                        <?= form_error('telepon', '<small class="text-danger pl-2">', '</small>'); ?>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email" value="<?= set_value('email'); ?>">
                        <div class="help-block with-errors"></div>
                        <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" name="message" placeholder="Your Message" rows="7" data-error="Write your message" value="<?= set_value('message'); ?>" required></textarea>
                        <div class="help-block with-errors"></div>
                        <?= form_error('message', '<small class="text-danger pl-2">', '</small>'); ?>
                      </div>
                      <div class="submit-button">
                        <button class="btn btn-common btn-effect" href="<?= site_url("admin/Pesan")?>" id="submit" type="submit">Send Message</button>
                        <div id="msgSubmit" class="h3 hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12">
              <div class="contact-deatils">
                <!-- Content Info -->
                <div class="contact-info_area">
                  <div class="contact-info">
                    <i class="lni-map"></i>
                    <h5>Location</h5>
                    <p><?= $perusahaan[0]->ALAMAT ?></p>
                  </div>
                  <!-- Content Info -->
                  <div class="contact-info">
                    <i class="lni-envelope"></i>
                    <h5>E-mail</h5>
                    <p><?= $perusahaan[0]->EMAIL ?></p>
                  </div>
                  <!-- Content Info -->
                  <div class="contact-info">
                    <i class="lni-phone"></i>
                    <h5>Phone</h5>
                    <p><?= $perusahaan[0]->CONTACT_PERSON ?></p>
                  </div>
                  <!-- Icon -->
                  <ul class="footer-social">
                    <?php if ($perusahaan[0]->IG != NULL) {
                      echo '<li  class="twitter">
                              <a href="https://www.instagram.com/'.$perusahaan[0]->IG.'">
                                <i class="lni-instagram-filled"></i>
                              </a>
                            </li>';
                    }?>
                    <?php if ($perusahaan[0]->FB != NULL) {
                      echo '<li class="facebook">
                              <a href="http://www.facebook.com/'.$perusahaan[0]->FB.'">
                                <i class="lni-facebook-filled"></i>
                              </a>
                            </li>';
                    }?>
                    <?php if ($perusahaan[0]->EMAIL != NULL) {
                      echo '<li class="google-plus" >
                              <a href="mailto:'.$perusahaan[0]->EMAIL.'">
                                <i class="lni-envelope"></i>
                              </a>
                            </li>';
                    }?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>            
    </section>
    