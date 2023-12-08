<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
    }
    public function login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('user')->where('username', $username);
        $cek = $this->db->get()->row();
        if ($cek == NULL) {
            $this->session->set_flashdata('alert', '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
             Username Tidak Ada
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        ');
            redirect('auth');
        } else if ($cek->password == $password) {
            $data = array(
                'id_user'   => $cek->id_user,
                'nama'      => $cek->nama,
                'username'  => $cek->username,
                'level'     => $cek->level,
            );
            $this->session->set_userdata($data);
            redirect('admin/home');
        } else {
            $this->session->set_flashdata('alert', '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
            Password salah 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        ');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}
