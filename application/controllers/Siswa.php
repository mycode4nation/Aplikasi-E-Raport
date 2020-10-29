<?php
class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != "login") {
            redirect('loginaplikasi');
        }
    }
    function index()
    {
        $s = $this->session->userdata('nis');
        $data['sis'] = $this->db->query('select*from file,siswa where file.nis=siswa.nis AND file.nis="' . $s . '" order by file.nis ASC');
        $data['sis2'] = $this->db->query('select*from file_rapor2,siswa where file_rapor2.nis=siswa.nis AND file_rapor2.nis="' . $s . '" order by file_rapor2.nis ASC');
        $data['sis3'] = $this->db->query('select*from file_rapor3,siswa where file_rapor3.nis=siswa.nis AND file_rapor3.nis="' . $s . '" order by file_rapor3.nis ASC');

        $this->load->view('v_siswa', $data);
    }

    function download()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('Y-m-d H:i:s');
        $this->db->update('file', ['StatusDownload' => 'L', 'jam_download' => $tgl], ['nis' => $this->uri->segment('3')]);
        $this->db->update('file_rapor2', ['StatusDownload' => 'L', 'jam_download' => $tgl], ['nis' => $this->uri->segment('3')]);
        $this->db->update('file_rapor3', ['StatusDownload' => 'L', 'jam_download' => $tgl], ['nis' => $this->uri->segment('3')]);
        $down = "raport/" . $this->uri->segment('4');
        force_download($down, NULL);
    }

    function logout()
    {
        session_destroy();
        redirect('./');
    }
}
