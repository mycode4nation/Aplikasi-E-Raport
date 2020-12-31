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

        $data['sisw'] = $this->db->query("select*from siswa where Kelas='" . $ds['Kelas'] . "' AND NOT EXISTS(select*from akademik where siswa.nis=akademik.nis) order by nis ASC");
        $data['fil'] = $this->db->query("select*from akademik,siswa where akademik.nis=siswa.nis AND siswa.Kelas='" . $ds['Kelas'] . "' order by akademik.nis ASC");

        $data['sisw2'] = $this->db->query("select*from siswa where Kelas='" . $ds['Kelas'] . "' AND NOT EXISTS(select*from aqliyah where siswa.nis=aqliyah.nis) order by nis ASC");
        $data['fil2'] = $this->db->query("select*from aqliyah,siswa where aqliyah.nis=siswa.nis AND siswa.Kelas='" . $ds['Kelas'] . "' order by aqliyah.nis ASC");

        $data['sisw3'] = $this->db->query("select*from siswa where Kelas='" . $ds['Kelas'] . "' AND NOT EXISTS(select*from integral where siswa.nis=integral.nis) order by nis ASC");
        $data['fil3'] = $this->db->query("select*from integral,siswa where integral.nis=siswa.nis AND siswa.Kelas='" . $ds['Kelas'] . "' order by integral.nis ASC");

        $data['sisw4'] = $this->db->query("select*from siswa where Kelas='" . $ds['Kelas'] . "' AND NOT EXISTS(select*from ruhiyah where siswa.nis=ruhiyah.nis) order by nis ASC");
        $data['fil4'] = $this->db->query("select*from ruhiyah,siswa where ruhiyah.nis=siswa.nis AND siswa.Kelas='" . $ds['Kelas'] . "' order by ruhiyah.nis ASC");

        $data['sisw5'] = $this->db->query("select*from siswa where Kelas='" . $ds['Kelas'] . "' AND NOT EXISTS(select*from jismiyah where siswa.nis=jismiyah.nis) order by nis ASC");
        $data['fil5'] = $this->db->query("select*from jismiyah,siswa where jismiyah.nis=siswa.nis AND siswa.Kelas='" . $ds['Kelas'] . "' order by jismiyah.nis ASC");

        $data['sisw6'] = $this->db->query("select*from siswa where Kelas='" . $ds['Kelas'] . "' AND NOT EXISTS(select*from speaking where siswa.nis=speaking.nis) order by nis ASC");
        $data['fil6'] = $this->db->query("select*from speaking,siswa where speaking.nis=siswa.nis AND siswa.Kelas='" . $ds['Kelas'] . "' order by speaking.nis ASC");

        $data['sisw7'] = $this->db->query("select*from siswa where Kelas='" . $ds['Kelas'] . "' AND NOT EXISTS(select*from quran where siswa.nis=quran.nis) order by nis ASC");
        $data['fil7'] = $this->db->query("select*from quran,siswa where quran.nis=siswa.nis AND siswa.Kelas='" . $ds['Kelas'] . "' order by quran.nis ASC");

        $this->load->view('uploadraport', $data);
    }
    public function download()
    {
        $down = "raport/" . $this->uri->segment('3');
        force_download($down, NULL);
    }
}
