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
                    <h1 class="h3 mb-2 text-gray-800 mb-3">Data Perusahaan</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="<?= site_url('admin/PerusahaanController/create') ?>" class="btn btn-sm btn-primary btn-icon-split shadow-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Tambah Data</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <?php echo $this->session->userdata('pesan'); ?>
                            <div class="table-responsive">
                                <!-- <div id="dataTable_wrapper" class="dataTables_rapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="dataTable_length">
                                                <label>
                                                    Show
                                                    <select class="custom-select custom-select-sm form-control form-control-sm" name="dataTable_length" aria-controls="dataTable">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                    entries
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px;">No</th>
                                            <th style="text-align: center;">Nama</th>
                                            <th style="text-align: center;">Slogan</th>
                                            <th style="text-align: center;">Contact Person</th>
                                            <th style="text-align: center;">Email</th>
                                            <th style="text-align: center;">Foto</th>
                                            <th style="width: 96px; text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php $no=1; foreach ($bisnis as $row) {?>
                                            <tr>
                                                <td style="text-align: center;"><?= $no ?></td>
                                                <td><?= $row->NAMA_BISNIS ?></td>
                                                <td><?=  (str_word_count($row->SLOGAN) > 10 ? substr("$row->SLOGAN",0,30)."..." : "$row->SLOGAN") ?></td>
                                                <td style="text-align: center;"><?= $row->CONTACT_PERSON ?></td>
                                                <td style="text-align: center;"><img src="<?= base_url('./uploads/perusahaan/' . $row->FOTO) ?>" alt="Img" width="100px"></td>
                                                <td style="text-align: center;"><?= $row->EMAIL ?></td>
                                                <td style="text-align: center;">
                                                    <a href="<?= site_url('admin/PerusahaanController/update/' . $row->ID_BISNIS) ?>" class="btn btn-sm btn-info btn-circle">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="<?= site_url('admin/PerusahaanController/delete/' . $row->ID_BISNIS) ?>" onclick="confirm_modal('<?= '/PerusahaanController/delete/' . $row->ID_BISNIS ?>')" class="btn btn-sm btn-danger btn-circle" data-toggle="modal" data-target="#hapusModal">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php $no++; }?>
                                    </tbody>
                                </table>
                                <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda yakin
                                                    untuk menghapus?</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">Pilih "Hapus" untuk menghapus, pilih "Batal"
                                                untuk kembali ke Panel Admin.</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                                                <a id="delete_link" class="btn btn-info" href="<?= site_url('admin/PerusahaanController/delete/' . $row->ID_BISNIS) ?>">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view('admin/partials/footer'); ?>