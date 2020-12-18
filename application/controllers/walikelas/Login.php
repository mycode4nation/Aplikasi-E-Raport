<?php
class Login extends CI_Controller
{
    var $jenisRapor;

    function __construct()
    {
        parent::__construct();
    }
    function index()
    {

        $this->load->view('walikelas/w_login_All');
    }

    function pilih($params)
    {

        $this->session->set_userdata('jenis_rapor', $params);
        $jenisRapor = $this->session->userdata('jenis_rapor');
        $data = [
            'jenisRapor' => $jenisRapor
        ];


        $this->load->view('walikelas/w_login', $data);
        return  $jenisRapor;
    }


    function proses()
    {
        $jenisRapor = $this->session->userdata('jenis_rapor');
        $username = strip_tags(str_replace("'", "", $this->input->post('username')));
        $password = strip_tags(str_replace("'", "", $this->input->post('password')));
        $p = md5($password);
        if (empty($username and $password)) {
            redirect(site_url('./'));
        }
        $kl = $this->db->query('select*from password_walikelas where Kelas="' . $username . '" AND password="' . $p . '" limit 1')->num_rows();
        if (empty($kl)) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
            redirect('walikelas/login');
        } else {
            $dg = $this->db->get_where('siswa', ['kelas' => $username]);
            $dg1 = $dg->num_rows();
            $dg2 = $dg->row_array();
            if (!empty($dg1)) {
                $datasesi = array(
                    'Kelas' => $username,
                    'masuk' => "login_walikelas",
                    'jenis_rapor' => $jenisRapor
                );
                $this->session->set_userdata($datasesi);
                redirect('walikelas/bagianadmin');
            } else {
                echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
                redirect('walikelas/login');
            }
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('walikelas/login');
    }
}
