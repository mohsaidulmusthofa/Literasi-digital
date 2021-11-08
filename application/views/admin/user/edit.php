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
                    <h1 class="h3 mb-3 text-gray-800">Edit Akun</h1>

                    <!-- DataTales Example -->
                    <form method="post" action="" enctype="multipart/form-data">
                    <?php foreach ($option as $row) {?>
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row">
                                <input name="id" id="id" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan nama lengkap ..." aria-describedby="basic-addon2" value="<?= $row->ID_USER ?>" hidden>
                                    <div class="col-sm-6">
                                        <p>Nama Lengkap</p>
                                        <div class="input-group">
                                            <input name="nama" id="nama" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan nama lengkap ..." aria-describedby="basic-addon2" value="<?= $row->NAMA ?>">
                                        </div>
                                        <?= form_error('nama', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Username</p>
                                        <div class="input-group">
                                            <input name="username" id="username" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan username ..." aria-describedby="basic-addon2" value="<?= $row->USERNAME ?>">
                                        </div>
                                        <?= form_error('username', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Email</p>
                                        <div class="input-group">
                                            <input name="email" id="email" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan Email ..." aria-describedby="basic-addon2" maxlength="100" value="<?= $row->EMAIL ?>">
                                        </div>
                                        <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Telepon/Whatsapp</p>
                                        <div class="input-group">
                                            <input name="no_telpon" id="no_telpon" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan No Telepon/Whatsapp ..." aria-describedby="basic-addon2" value="<?= $row->NO_HP ?>">
                                        </div>
                                        <?= form_error('no_telpon', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                </div>

                                <p>Alamat</p>
                                <div class="input-group">
                                    <textarea name="alamat" id="alamat" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan Alamat ..." aria-describedby="basic-addon2"><?= $row->ALAMAT ?></textarea>
                                </div>
                                <?= form_error('alamat', '<small class="text-danger pl-2">', '</small>'); ?>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Upload Foto Profil</p>
                                        <div class="input-group">
                                            <input name="foto" id="foto" type="file" accept="image/*" onchange="tampilkanPreview(this,'preview')" class="form-control border-dark small mb-3" placeholder="" aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Jabatan</p>
                                        <div class="input-group">
                                            <Select class="form-control border-dark small mb-3" id="jabatan" name="jabatan" aria-describedby="basic-addon2" value="<?= $row->JABATAN ?>">
                                                <?php foreach ($tes as $data) { ?>
                                                    <option value="<?= $data['ID_JABATAN'] ?>" <?=($row->ID_JABATAN == $data['ID_JABATAN'] ? 'selected' : '') ?>><?= $data['JABATAN'] ?></option>
                                                <?php } ?>
                                            </Select>
                                        </div>
                                        <?= form_error('jabatan', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <img id="preview" src="" alt="" width="320px" /> <br>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="hidden" name="blank" id="blank" class="form-control border-dark small mb-3" placeholder="blank" aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Facebook</p>
                                        <div class="input-group">
                                            <input name="fb" id="fb" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan link/tautan facebook ..." aria-describedby="basic-addon2" maxlength="100" value="<?= $row->FB ?>">
                                        </div>
                                        <?= form_error('fb', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Instagram</p>
                                        <div class="input-group">
                                            <input name="ig" id="ig" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan link/tautan instagram ..." aria-describedby="basic-addon2" value="<?= $row->IG ?>">
                                        </div>
                                        <?= form_error('ig', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Password</p>
                                        <div class="input-group">
                                            <input name="password1" id="password" type="password" class="form-control border-dark small mb-3" placeholder="Masukkan Password" aria-describedby="basic-addon2">
                                        </div>
                                        <?= form_error('password1', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Konfirmasi Password</p>
                                        <div class="input-group">
                                            <input name="password2" id="password2" type="password" class="form-control border-dark small mb-3" placeholder="Konfirmasi Password" aria-describedby="basic-addon2">
                                        </div>
                                        <?= form_error('password2', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                </div>

                                <a href="<?= site_url('admin/UserController') ?>" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-reply"></i>
                                    </span>
                                    <span class="text">Kembali</span>
                                </a>
                                <button type="submit" href="<?= site_url('admin/UserController') ?>" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Edit Akun</span>
                                </button>
                            </div>
                            <!-- Card Body -->
                        </div>
                        <!-- Card -->
                        <?php } ?>
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