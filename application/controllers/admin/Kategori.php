<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
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
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori', 'ASC');
        $kategori = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Kategori Konten',
            'kategori'      => $kategori
        );
        $this->template->load('template_admin', 'admin/kategori_index', $data);
    }
    public function simpan()
    {
        $this->db->from('kategori');
        $this->db->where('nama_kategori', $this->input->post('nama_kategori'));
        $cek = $this->db->get()->result_array();
        if ($cek <> NULL) {
            $this->session->set_flashdata('alert', '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
           Kategori Konten Sudah Digunakan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        ');
            redirect('admin/kategori');
        }
        $data = array(
            'nama_kategori'     => $this->input->post('nama_kategori')
        );
        $this->db->insert('kategori', $data);
        $this->session->set_flashdata('alert', '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
       Berhasil menambahkan kategori
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    ');
        redirect('admin/kategori');
    }
    public function delete_data($id)
    {
        $where = array(
            'id_kategori' => $id
        );
        $this->db->delete('kategori', $where);
        $this->session->set_flashdata('alert', '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        kategori Berhasil Dihapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    ');
        redirect('admin/kategori');
    }
    public function update()
    {
        $where = array(
            'id_kategori'    => $this->input->post('id_kategori')
        );
        $data = array(
            'nama_kategori'  => $this->input->post('nama_kategori')
        );
        $this->db->update('kategori', $data, $where);
        $this->session->set_flashdata('alert', '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        Kategori Berhasil Diperbarui!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    ');
        redirect('admin/kategori');
    }
}
