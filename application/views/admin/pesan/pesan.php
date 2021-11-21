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
                    <h1 class="h3 mb-2 text-gray-800 mb-3">Data Pesan</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <!-- <?php echo $this->session->userdata('pesan'); ?> -->
                            <div class="table-responsive">

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px;">No</th>
                                            <th style="text-align: center;">Nama Pengirim</th>
                                            <th style="text-align: center;">Email Pengirim</th>
                                            <th style="text-align: center;">Subject</th>
                                            <th style="text-align: center;">Pesan</th>
                                            <th style="width: 96px; text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($pesan as $row) { ?>
                                            <tr>
                                                <td style="text-align: center;"><?= $no ?></td>
                                                <td><?= $row->NAMA_PENGIRIM ?></td>
                                                <td style="text-align: center;"><?= $row->EMAIL_PENGIRIM ?></td>
                                                <td style="text-align: center;"><?= $row->SUBJECT ?></td>
                                                <td style="text-align: center;"><?= $row->PESAN ?></td>
                                                <td style="text-align: center;">
                                                    <a href="<?= site_url('admin/Pesan/delete/' . $row->ID_PESAN) ?>" onclick="confirm_modal('<?= '/Produk/delete/' . $row->ID_PESAN ?>')" class="btn btn-sm btn-danger btn-circle" data-toggle="modal" data-target="#hapusModal">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php $no++;
                                        } ?>
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
                                                <a id="delete_link" class="btn btn-info" href="<?= site_url('admin/Pesan/delete/' . $row->ID_PESAN) ?>">Hapus</a>
                                            </div>
                                        </div>
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
    </div>
    <!-- Footer -->
    </div>
    <?php $this->load->view('admin/partials/footer'); ?>
</body>