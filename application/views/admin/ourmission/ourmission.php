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
                    <h1 class="h3 mb-2 text-gray-800 mb-3">Data Misi Kami</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="<?= site_url('admin/OurMission/create') ?>" class="btn btn-sm btn-primary btn-icon-split shadow-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Tambah Data</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <?php echo $this->session->userdata('pesan'); ?>
                            <div class="table-responsive">

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px;">No</th>
                                            <th style="text-align: center;">Foto</th>
                                            <th style="text-align: center;">Deskripsi</th>
                                            <th style="width: 96px; text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($mission as $row) { ?>
                                            <tr>
                                                <td style="text-align: center;"><?= $no ?></td>
                                                <td style="text-align: center;"><img src="<?= base_url('./uploads/ourmission/' . $row->FOTO) ?>" alt="Img" width="100px"></td>
                                                <td><?= htmlspecialchars_decode($row->DESCRIPTION) ?></td>
                                                <td style="text-align: center;">
                                                    <a href="<?= base_url('admin/OurMission/update/' . $row->ID_OURMISSION) ?>" class="btn btn-sm btn-info btn-circle">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="<?= base_url('admin/OurMission/delete/' . $row->ID_OURMISSION) ?>" onclick="confirm_modal('<?= '/OurMission/delete/' . $row->ID_OURMISSION ?>')" class="btn btn-sm btn-danger btn-circle" data-toggle="modal" data-target="#hapusModal">
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
                                                <a id="delete_link" class="btn btn-info" href="<?= site_url('admin/OurMission/delete/' . $row->ID_OURMISSION) ?>">Hapus</a>
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
        </div>
    </div>
</body>