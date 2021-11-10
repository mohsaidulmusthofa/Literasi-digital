<?php 
function cek_session()
{
    $cek = get_instance();
    if (!$cek->session->userdata('EMAIL')) {
        redirect('admin/AuthController');
    }
}
?>