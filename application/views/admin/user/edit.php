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
                    <h1 class="h3 mb-3 text-gray-800">Edit Tim</h1>

                    <!-- DataTales Example -->
                    <form method="post" action="<?= site_url('admin/User/update/' . $bagian[0]->ID_MEMBER) ?>" enctype="multipart/form-data">

                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input name="id" id="id" type="text" class="form-control border-dark small mb-3" value="<?= $bagian[0]->ID_MEMBER ?>" hidden>
                                        <p>Nama Lengkap</p>
                                        <div class="input-group">
                                            <input name="nama" id="nama" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan nama lengkap ..." aria-describedby="basic-addon2" value="<?= $bagian[0]->NAMA_MEMBER ?>">
                                        </div>
                                        <?= form_error('nama', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Email</p>
                                        <div class="input-group">
                                            <input name="email" id="email" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan Email ..." aria-describedby="basic-addon2" maxlength="100" value="<?= $bagian[0]->EMAIL ?>">
                                        </div>
                                        <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                </div>

                                <p>Motto</p>
                                <div class="input-group">
                                    <textarea name="motto" id="motto" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan motto ..." aria-describedby="basic-addon2"><?= $bagian[0]->MOTTO ?></textarea>
                                </div>
                                <?= form_error('motto', '<small class="text-danger pl-2">', '</small>'); ?>

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
                                            <Select class="form-control border-dark small mb-3" id="jabatan" name="jabatan" aria-describedby="basic-addon2">
                                                <option value="<?= set_value('row') ?>">--- Pilih ---</option>
                                                <?php foreach ($row as $aaa) { ?>
                                                    <option value="<?= $aaa['ID_JABATAN']; ?>" <?= ($data[0]->ID_JABATAN == $aaa['ID_JABATAN'] ? 'selected' : '') ?>><?= $aaa['JABATAN'] ?></option>
                                                <?php } ?>
                                            </Select>
                                        </div>
                                        <?= form_error('jabatan', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p>Foto Lama</p>
                                        <div class="input-group">
                                            <img src="<?= base_url('./uploads/user/') . $data[0]->FOTO ?>" alt="img" width="250px">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Foto Baru</p>
                                        <div class="input-group">
                                            <img id="preview" src="" alt="" width="250px" /> <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Facebook</p>
                                        <div class="input-group">
                                            <input name="fb" id="fb" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan link/tautan facebook ..." aria-describedby="basic-addon2" maxlength="100" value="<?= $bagian[0]->FACEBOOK ?>">
                                        </div>
                                        <?= form_error('fb', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Instagram</p>
                                        <div class="input-group">
                                            <input name="ig" id="ig" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan link/tautan instagram ..." aria-describedby="basic-addon2" value="<?= $bagian[0]->IG ?>">
                                        </div>
                                        <?= form_error('ig', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>LinkedIn</p>
                                        <div class="input-group">
                                            <input name="linkedin" id="linkedin" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan link/tautan LinkedIn ..." aria-describedby="basic-addon2" maxlength="100" value="<?= $bagian[0]->LINKEDIN ?>">
                                        </div>
                                        <?= form_error('linkedin', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input name="created_at" id="created_at" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan Password" aria-describedby="basic-addon2" value="<?= $bagian[0]->CREATED_AT ?>" hidden>
                                        </div>
                                        <?= form_error('created_at', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                </div>

                                <button type="submit" href="<?= site_url('admin/User') ?>" class="btn btn-success btn-icon-split ml-2" style="float: right;">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-save"></i>
                                    </span>
                                    <span class="text">Simpan Data</span>
                                </button>
                                <a href="<?= site_url('admin/User') ?>" class="btn btn-danger btn-icon-split" style="float: right;">
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