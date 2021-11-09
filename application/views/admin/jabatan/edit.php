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
                    <h1 class="h3 mb-3 text-gray-800">Tambah Jabatan</h1>

                    <!-- DataTales Example -->
                    <form method="post" action="<?= site_url('admin/JabatanController/update/' . $jabatan[0]->ID_JABATAN) ?>" enctype="multipart/form-data">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>Jabatan</p>
                                        <input name="id" id="id" type="text" value="<?= $jabatan[0]->ID_JABATAN ?>" hidden>
                                        <div class="input-group">
                                            <input name="jabatan" id="jabatan" type="text" class="form-control border-dark small mb-3" placeholder="Masukkan jabatan di perusahaan anda ..." aria-describedby="basic-addon2" value="<?= $jabatan[0]->JABATAN ?>">
                                        </div>
                                        <?= form_error('jabatan', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                </div>

                                <button type="submit" href="<?= site_url('admin/JabatanController') ?>" class="btn btn-primary btn-icon-split ml-2" style="float: right;">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Edit Data</span>
                                </button>
                                <a href="<?= site_url('admin/JabatanController') ?>" class="btn btn-danger btn-icon-split" style="float: right;">
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

                    <!-- Footer -->
                    <?php $this->load->view('admin/partials/footer'); ?>