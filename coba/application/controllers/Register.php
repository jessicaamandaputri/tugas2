<?php

class register extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_register');
    }

    public function index()
    {
        $this->load->view('v_register');
    }

    public function proses_register()
    {
        $data = array(
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'telp' => $this->input->post('telp'),
        );
        $query = $this->db->insert('masyarakat', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan!</div>');
            redirect('register');
        }
    }
        
    }
?>
