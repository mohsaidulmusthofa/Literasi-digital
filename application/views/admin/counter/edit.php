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
                    <h1 class="h3 mb-3 text-gray-800">Edit Data Counter</h1>

                    <!-- DataTales Example -->
                    <form method="post" action="<?= site_url('admin/Counter/update/' . $counter[0]->ID_COUNTER) ?>" enctype="multipart/form-data">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Nama Counter</p>
                                        <input name="id" id="id" type="text" value="<?= $counter[0]->ID_COUNTER ?>" hidden>
                                        <div class="input-group">
                                            <input name="nama" id="nama" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan Deksripsi Our Mission ..." aria-describedby="basic-addon2" value="<?= $counter[0]->NAMA ?>">
                                        </div>
                                        <?= form_error('nama', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Jumlah</p>
                                        <div class="input-group">
                                            <input name="jumlah" id="jumlah" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan Deksripsi Our Mission ..." aria-describedby="basic-addon2" value="<?= $counter[0]->JUMLAH ?>">
                                        </div>
                                        <?= form_error('jumlah', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>

                                </div> <br>

                                <button type="submit" href="<?= site_url('admin/Counter') ?>" class="btn btn-success btn-icon-split ml-2" style="float: right;">
                                    <span class="icon text-white-50">
                                        <i class="fa fa-save"></i>
                                    </span>
                                    <span class="text">Simpan Data</span>
                                </button>
                                <a href="<?= site_url('admin/Counter') ?>" class="btn btn-danger btn-icon-split" style="float: right;">
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

            <!-- Footer -->
            <?php $this->load->view('admin/partials/footer'); ?>