<!-- Header -->
<?php $this->load->view('admin/partials/header'); ?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php $this->load->view('admin/partials/sidebar'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php $this->load->view('admin/partials/navbar'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-3 text-gray-800">Tambah Data Perusahaan</h1>

                    <!-- DataTales Example -->
                    <form method="post" action="<?= site_url('admin/PerusahaanController/update/' . $bisnis[0]->ID_BISNIS) ?>" enctype="multipart/form-data">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Nama Perusahaan</p>
                                        <input name="id" id="id" type="text" value="<?= $bisnis[0]->ID_BISNIS ?>" hidden>
                                        <div class="input-group">
                                            <input name="nama_bisnis" id="nama_bisnis" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan nama perusahaan ..." aria-describedby="basic-addon2" value="<?= $bisnis[0]->NAMA_BISNIS ?>">
                                            
                                        </div>
                                        <?= form_error('nama_bisnis', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Slogan</p>
                                        <div class="input-group">
                                            <input name="slogan" id="slogan" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan slogan perusahaan ..." aria-describedby="basic-addon2" value="<?= $bisnis[0]->SLOGAN ?>">
                                        </div>
                                        <?= form_error('slogan', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Email</p>
                                        <div class="input-group">
                                            <input name="email" id="email" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan email perusahaan ..." aria-describedby="basic-addon2" maxlength="100" value="<?= $bisnis[0]->EMAIL ?>">
                                        </div>
                                        <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Contact Person</p>
                                        <div class="input-group">
                                            <input name="no_telpon" id="no_telpon" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan No Telepon/Whatsapp perusahaan ..." aria-describedby="basic-addon2" value="<?= $bisnis[0]->CONTACT_PERSON ?>">
                                        </div>
                                        <?= form_error('no_telpon', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                </div>

                                <p>Alamat</p>
                                <div class="input-group">
                                    <textarea name="alamat" id="alamat" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan alamat lengkap perusahaan ..." aria-describedby="basic-addon2"><?= $bisnis[0]->ALAMAT ?></textarea>
                                </div>
                                <?= form_error('alamat', '<small class="text-danger pl-2">', '</small>'); ?>                                

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Facebook</p>
                                        <div class="input-group">
                                            <input name="fb" id="fb" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan link/tautan facebook perusahaan ..." aria-describedby="basic-addon2" maxlength="100" value="<?= $bisnis[0]->FB ?>">
                                        </div>
                                        <?= form_error('fb', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Instagram</p>
                                        <div class="input-group">
                                            <input name="ig" id="ig" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan link/tautan instagram perusahaan ..." aria-describedby="basic-addon2" value="<?= $bisnis[0]->IG ?>">
                                        </div>
                                        <?= form_error('ig', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                </div>

                                <p>Deskripsi Perusahaan</p>
                                <div class="input-group">
                                    <textarea name="deskripsi" id="deskripsi" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan deskripsi singkat perusahaan ..." aria-describedby="basic-addon2"><?= $bisnis[0]->ABOUT_US ?></textarea>
                                </div>
                                <?= form_error('deskripsi', '<small class="text-danger pl-2">', '</small>'); ?>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Upload Foto Perusahaan</p>
                                        <div class="input-group">
                                            <input name="foto" id="foto" type="file" accept="image/*" onchange="tampilkanPreview(this,'preview')" class="form-control border-dark small mb-3" placeholder="" aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p>Foto Lama</p>
                                        <div class="input-group">
                                            <img src="<?= base_url('./uploads/perusahaan/'). $bisnis[0]->FOTO ?>" alt="img" width="250px">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Foto Baru</p>
                                        <div class="input-group">
                                            <img id="preview" src="" alt="" width="250px" /> <br>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" href="<?= site_url('admin/PerusahaanController') ?>" class="btn btn-success btn-icon-split ml-2" style="float: right;">
                                    <span class="icon text-white-50">
                                        <i class="fa fa-save"></i>
                                    </span>
                                    <span class="text">Simpan Data</span>
                                </button>
                                <a href="<?= site_url('admin/PerusahaanController') ?>" class="btn btn-danger btn-icon-split" style="float: right;">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-reply"></i>
                                    </span>
                                    <span class="text">Kembali</span>
                                </a>
                            </div>
                            <!-- Card Body -->
                        </div>
                        <!-- Card -->
                    </form>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <script>
                function tampilkanPreview(gambar, idpreview) {
                    //                membuat objek gambar
                    var gb = gambar.files;
                    //                loop untuk merender gambFar
                    for (var i = 0; i < gb.length; i++) {
                        //                    bikin variabel
                        var gbPreview = gb[i];
                        var imageType = /image.*/;
                        var preview = document.getElementById(idpreview);
                        var reader = new FileReader();
                        if (gbPreview.type.match(imageType)) {
                            //                        jika tipe data sesuai
                            preview.file = gbPreview;
                            reader.onload = (function(element) {
                                return function(e) {
                                    element.src = e.target.result;
                                };
                            })(preview);
                            //                    membaca data URL gambar
                            reader.readAsDataURL(gbPreview);
                        } else {
                            //                        jika tipe data tidak sesuai
                            alert(
                                "Hanya dapat menampilkan preview tipe gambar. Harap simpan perubahan untuk melihat dan merubah gambar.");
                        }
                    }
                }
            </script>

            <!-- Footer -->
            <?php $this->load->view('admin/partials/footer'); ?>