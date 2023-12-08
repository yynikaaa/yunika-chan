<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') == NULL) {
            redirect('auth');
        }
    }

    public function index()
    {
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $data = array(
            'judul_halaman' => 'Konfigurasi',
            'konfig'        => $konfig
        );
        $this->template->load('template_admin', 'admin/konfigurasi', $data);
    }
    public function update()
    {
        $where = array('id_konfigurasi'    => 1);
        $data = array(
            'judul_website'     => $this->input->post('judul_website'),
            'profil_website'   => $this->input->post('profil_website'),
            'tiktok'            => $this->input->post('tiktok'),
            'instagram'         => $this->input->post('instagram'),
            'email'             => $this->input->post('email'),
            'alamat'            => $this->input->post('alamat'),
            'telegram'          => $this->input->post('telegram'),
        );
        $this->db->update('konfigurasi', $data, $where);
        $this->session->set_flashdata('alert', '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        Konfigurasi Berhasil Diperbarui!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    ');
        redirect('admin/konfigurasi');
    }
}
