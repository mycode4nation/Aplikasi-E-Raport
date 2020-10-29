<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Uploadraport extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->login_model->check_login();
    }

    public function data()
    {
        $ds = $this->db->get_where('siswa', ['ID' => $this->uri->segment('3')])->row_array();
        $data['kel'] = $ds['Kelas'];
        $data['sisw'] = $this->db->query("select*from siswa where Kelas='" . $ds['Kelas'] . "' AND NOT EXISTS(select*from file where siswa.nis=file.nis) order by nis ASC");
        $data['fil'] = $this->db->query("select*from file,siswa where file.nis=siswa.nis AND siswa.Kelas='" . $ds['Kelas'] . "' order by file.nis ASC");

        $data['sisw2'] = $this->db->query("select*from siswa where Kelas='" . $ds['Kelas'] . "' AND NOT EXISTS(select*from file_rapor2 where siswa.nis=file_rapor2.nis) order by nis ASC");
        $data['fil2'] = $this->db->query("select*from file_rapor2,siswa where file_rapor2.nis=siswa.nis AND siswa.Kelas='" . $ds['Kelas'] . "' order by file_rapor2.nis ASC");

        $data['sisw3'] = $this->db->query("select*from siswa where Kelas='" . $ds['Kelas'] . "' AND NOT EXISTS(select*from file_rapor3 where siswa.nis=file_rapor3.nis) order by nis ASC");
        $data['fil3'] = $this->db->query("select*from file_rapor3,siswa where file_rapor3.nis=siswa.nis AND siswa.Kelas='" . $ds['Kelas'] . "' order by file_rapor3.nis ASC");
        $this->load->view('uploadraport', $data);
    }
    public function download()
    {
        $down = "raport/" . $this->uri->segment('3');
        force_download($down, NULL);
    }
}
