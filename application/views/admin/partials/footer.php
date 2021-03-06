<footer class="sticky-footer">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; <?= SITE_NAME . " " . Date('Y') ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<?php $this->load->view('admin/partials/modal'); ?>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('') ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?= base_url('') ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?= base_url('') ?>assets/js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="<?= base_url('') ?>assets/vendor/chart.js/Chart.min.js"></script>
<!-- Page level custom scripts -->
<script src="<?= base_url('') ?>assets/js/demo/chart-area-demo.js"></script>
<script src="<?= base_url('') ?>assets/js/demo/chart-pie-demo.js"></script>
<script src="<?= base_url('') ?>assets/plugin/summernote/summernote-bs4.min.js"></script>

<!-- Form Tambah Produk, Deskripsi Produk | Form Tambah Perusahaan, About us   -->
<script>
    $(document).ready(function(){
        $('#deskripsi').summernote({
            height: '200px'
        })
    })
</script>

<!-- Form Tambah Produk, Rincian Produk -->
<script>
    $(document).ready(function(){
        $('#rincian_produk').summernote({
            height: '200px'
        })
    })
</script>

<!-- Form Our Mission, Description Produk -->
<script>
    $(document).ready(function(){
        $('#description').summernote({
            height: '200px'
        })
    })
</script>

</body>

</html>