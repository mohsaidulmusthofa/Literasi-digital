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
                    <h1 class="h3 mb-3 text-gray-800">Edit Data Misi kami</h1>

                    <!-- DataTales Example -->
                    <form method="post" action="<?= site_url('admin/OurMission/update/' . $mission[0]->ID_OURMISSION) ?>" enctype="multipart/form-data">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Deskripsi</p>
                                        <input name="id" id="id" type="text" value="<?= $mission[0]->ID_OURMISSION ?>" hidden>
                                        <div class="input-group">
                                            <textarea name="description" id="description" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan Deksripsi Our Mission ..." aria-describedby="basic-addon2" > <?= $mission[0]->DESCRIPTION ?> </textarea>
                                        </div>
                                        <?= form_error('description', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Upload Foto Misi Kami</p>
                                        <div class="input-group">
                                            <input name="foto" id="foto" type="file" accept="image/*" onchange="tampilkanPreview(this,'preview')" class="form-control border-dark small mb-3" placeholder="" aria-describedby="basic-addon2">
                                        </div>
                                        <div class="row">
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <div class="input-group">
                                                        <input type="hidden" name="blank" id="blank" class="form-control border-dark small mb-3" placeholder="blank" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <p>Foto Lama</p>
                                                    <div class="input-group">
                                                        <img src="<?= site_url('./uploads/ourmission/') . $mission[0]->FOTO ?>" alt="img" width="250px">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <p>Foto Baru</p>
                                                    <div class="input-group">
                                                        <img id="preview" src="" alt="" width="250px" /> <br>
                                                     </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="input-group">
                                                        <input type="hidden" name="blank" id="blank" class="form-control border-dark small mb-3" placeholder="blank" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div><br>

                                <button type="submit" href="<?= site_url('admin/OurMission') ?>" class="btn btn-success btn-icon-split ml-2" style="float: right;">
                                    <span class="icon text-white-50">
                                        <i class="fa fa-save"></i>
                                    </span>
                                    <span class="text">Simpan Data</span>
                                </button>
                                <a href="<?= site_url('admin/OurMission') ?>" class="btn btn-danger btn-icon-split" style="float: right;">
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