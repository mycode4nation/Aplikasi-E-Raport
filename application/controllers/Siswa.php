<?php



class Siswa extends CI_Controller

{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != "login") {
            redirect('loginaplikasi');
        }
        $this->load->helper(array('url', 'download'));
    }
    function index()
    {
        $s = $this->session->userdata('nis');
        $data['sis'] = $this->db->query('select*from akademik,siswa where akademik.nis=siswa.nis AND akademik.nis="' . $s . '" order by akademik.nis ASC');
        $data['sis2'] = $this->db->query('select*from aqliyah,siswa where aqliyah.nis=siswa.nis AND aqliyah.nis="' . $s . '" order by aqliyah.nis ASC');
        $data['sis3'] = $this->db->query('select*from integral,siswa where integral.nis=siswa.nis AND integral.nis="' . $s . '" order by integral.nis ASC');
        $data['sis4'] = $this->db->query('select*from jismiyah,siswa where jismiyah.nis=siswa.nis AND jismiyah.nis="' . $s . '" order by jismiyah.nis ASC');
        $data['sis5'] = $this->db->query('select*from ruhiyah,siswa where ruhiyah.nis=siswa.nis AND ruhiyah.nis="' . $s . '" order by ruhiyah.nis ASC');
        $data['sis6'] = $this->db->query('select*from speaking,siswa where speaking.nis=siswa.nis AND speaking.nis="' . $s . '" order by speaking.nis ASC');

        $data['akademik'] =  $data['sis']->num_rows();
        $data['aqliyah'] =  $data['sis2']->num_rows();
        $data['integral'] =  $data['sis3']->num_rows();
        $data['jismiyah'] =  $data['sis4']->num_rows();
        $data['ruhiyah'] =  $data['sis5']->num_rows();
        $data['speaking'] =  $data['sis6']->num_rows();

        $this->load->view('v_siswa', $data);
    }

    function download()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('Y-m-d H:i:s');
        $this->db->update('akademik', ['StatusDownload' => 'L', 'jam_download' => $tgl], ['nis' => $this->uri->segment('3')]);
        $this->db->update('aqliyah', ['StatusDownload' => 'L', 'jam_download' => $tgl], ['nis' => $this->uri->segment('3')]);
        $this->db->update('integral', ['StatusDownload' => 'L', 'jam_download' => $tgl], ['nis' => $this->uri->segment('3')]);
        $this->db->update('jismiyah', ['StatusDownload' => 'L', 'jam_download' => $tgl], ['nis' => $this->uri->segment('3')]);
        $this->db->update('ruhiyah', ['StatusDownload' => 'L', 'jam_download' => $tgl], ['nis' => $this->uri->segment('3')]);
        $this->db->update('speaking', ['StatusDownload' => 'L', 'jam_download' => $tgl], ['nis' => $this->uri->segment('3')]);
        $down = "raport/" . $this->uri->segment('4');
        force_download($down, NULL);
    }

    function downloadRapor($nis, $link, $jenis)
    {

        if ($link) {
            $file = realpath("raport") . "\\" .  $link;
            // check file exists    
            if (file_exists($file)) {
                // get file content
                $data = file_get_contents($file);
                date_default_timezone_set('Asia/Jakarta');
                $tgl = date('Y-m-d H:i:s');
                $this->db->update($jenis, ['StatusDownload' => 'L', 'jam_download' => $tgl], ['nis' => $this->uri->segment('3')]);
                $down = "raport/" . $this->uri->segment('4');
                //force download
                force_download($link, $data);
            } else {
                // Redirect to base url
                redirect(base_url());
            }
        }
    }

    function logout()
    {
        session_destroy();
        redirect('./');
    }
}
