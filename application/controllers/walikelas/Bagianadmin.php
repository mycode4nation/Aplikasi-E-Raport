<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bagianadmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $jenisRaport = $this->session->userdata('masuk');
        if ($this->session->userdata('masuk') != "login_walikelas") {

            redirect('walikelas/login');
        }
    }

    public function index()
    {
        $uri3 = $this->session->userdata('Kelas');
        $kodeRapor = "";
        $jenisRaport = $this->session->userdata('jenis_rapor');
        $kodeRaporQuery = $this->db->query("select kode_rapor from jenis_rapor WHERE keterangan ='" . $jenisRaport . "' ");

        foreach ($kodeRaporQuery->result() as $row) {
            $kodeRapor =  $row->kode_rapor;
            $this->session->set_userdata('kode_rapor', $kodeRapor);
        }

        $data['sisw'] = $this->db->query("select*from siswa where Kelas='" . $uri3 . "' AND NOT EXISTS(select*from rapor where siswa.nis=rapor.nis) order by nis ASC");
        $data['fil'] = $this->db->query("select*from rapor,siswa where rapor.nis=siswa.nis AND siswa.Kelas='" . $uri3 . "' AND kode_rapor ='" . $kodeRapor . "' order by rapor.nis ASC");
        $data['fil2'] = $this->db->query("select*from siswa where Kelas='" . $uri3 . "'order by nis ASC");



        $data['title'] = 'Raport ' . $this->session->userdata('jenis_rapor');
        $this->load->view('walikelas/untukadmin', $data);
    }

    // public function speaking()
    // {
    //     $uri3 = $this->session->userdata('Kelas');
    //     $data['sisw'] = $this->db->query("select*from siswa where Kelas='" . $uri3 . "' AND NOT EXISTS(select*from file_rapor2 where siswa.nis=file_rapor2.nis) order by nis ASC");
    //     $data['fil'] = $this->db->query("select*from file_rapor2,siswa where file_rapor2.nis=siswa.nis AND siswa.Kelas='" . $uri3 . "' order by file_rapor2.nis ASC");
    //     $this->session->set_userdata('kode_rapor', 0);
    //     $data['title'] = 'Raport Speaking';
    //     $this->session->set_userdata('kode_rapor', 0);
    //     $this->load->view('walikelas/untukadmin', $data);
    // }
    // public function alquran()
    // {
    //     $uri3 = $this->session->userdata('Kelas');
    //     $data['sisw'] = $this->db->query("select*from siswa where Kelas='" . $uri3 . "' AND NOT EXISTS(select*from file_rapor3 where siswa.nis=file_rapor3.nis) order by nis ASC");
    //     $data['fil'] = $this->db->query("select*from file_rapor3,siswa where file_rapor3.nis=siswa.nis AND siswa.Kelas='" . $uri3 . "' order by file_rapor3.nis ASC");
    //     $this->session->set_userdata('kode_rapor', 2);
    //     $data['title'] = 'Raport Al Quran';
    //     $this->session->set_userdata('kode_rapor', 2);
    //     $this->load->view('walikelas/untukadmin', $data);
    // }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('walikelas/login');
    }

    public function simpan()
    {

        $d2 = $this->input->post('NamaLengkap', TRUE);
        $dacak = $this->input->post('nis', TRUE);
        $kode_rapor =  $this->session->userdata('kode_rapor');
        if (empty($d2 && $dacak)) {
            redirect('walikelas/bagianadmin');
        }

        if ($kode_rapor == 1) {
            $namaRapor = "Rapor Akademik";
        } elseif ($kode_rapor  == 2) {
            $namaRapor = "Rapor Speaking";
        } elseif ($kode_rapor  == 3) {
            $namaRapor = "Rapor Integral";
        } elseif ($kode_rapor  == 4) {
            $namaRapor = "Rapor Ruhiyah";
        } elseif ($kode_rapor  == 5) {
            $namaRapor = "Rapor Aqliyah";
        } elseif ($kode_rapor  == 6) {
            $namaRapor = "Rapor Jismiyah";
        }


        $config['upload_path']          = APPPATH . '../raport/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 1000;
        $config['file_name']            = $dacak . "_" . $d2 . "_" . $namaRapor;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $fl = $this->upload->display_errors();
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES UPLOAD GAGAL! (Max Ukuran File 1 MB dan Berformat PDF)</b>' . $fl . '</div>');
            redirect('walikelas/bagianadmin');
        } else {
            $upload_data = $this->upload->data();
            $data['file'] = $upload_data['file_name'];
            $filenya = $data['file'];
            $this->db->insert('rapor', ['nis' => $dacak, 'kode_rapor' => $kode_rapor, 'LinkRaport' => $filenya, 'StatusDownload' => 'B']);
            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES UPLOAD BERHASIL!</b> <br/>Raport Atas Nama <B>' . $d2 . '<B/> berhasil di Upload!</div>');
            echo $this->session->set_flashdata('msg', 'success');
            redirect('walikelas/bagianadmin');

            // if ($kode_rapor == 0) {

            //     $this->db->insert('file_rapor2', ['nis' => $dacak, 'kode_rapor' => $kode_rapor, 'LinkRaport' => $filenya, 'StatusDownload' => 'B']);
            //     $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES UPLOAD BERHASIL!</b> <br/>Raport Atas Nama <B>' . $d2 . '<B/> berhasil di Upload!</div>');
            //     echo $this->session->set_flashdata('msg', 'success');
            //     redirect('walikelas/bagianadmin/speaking');
            // } else if ($kode_rapor == 1) {

            //     $this->db->insert('file', ['nis' => $dacak, 'kode_rapor' => $kode_rapor, 'LinkRaport' => $filenya, 'StatusDownload' => 'B']);
            //     $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES UPLOAD BERHASIL!</b> <br/>Raport Atas Nama <B>' . $d2 . '<B/> berhasil di Upload!</div>');
            //     echo $this->session->set_flashdata('msg', 'success');
            //     redirect('walikelas/bagianadmin');
            // } else {
            //     $this->db->insert('file_rapor3', ['nis' => $dacak, 'kode_rapor' => $kode_rapor, 'LinkRaport' => $filenya, 'StatusDownload' => 'B']);
            //     $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES UPLOAD BERHASIL!</b> <br/>Raport Atas Nama <B>' . $d2 . '<B/> berhasil di Upload!</div>');
            //     echo $this->session->set_flashdata('msg', 'success');
            //     redirect('walikelas/bagianadmin/alquran');
            // }
        }
    }

    public function update()
    {

        $d2 = $this->input->post('NamaLengkap', TRUE);
        $dacak = $this->input->post('nis', TRUE);
        $hps = $this->input->post('link', TRUE);
        $kode_rapor =  $this->session->userdata('kode_rapor');
        $namaRapor = "";

        if ($kode_rapor !== 1) {
            $namaRapor = "Rapor Speaking";
        } else {
            $namaRapor = "Rapor Akademik";
        }

        $tm = time();

        if (empty($d2 && $dacak)) {
            redirect('walikelas/bagianadmin');
        }

        $config['upload_path']          = APPPATH . '../raport/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 1000;
        $config['file_name']            = $dacak . "_" . $d2 . "_" . $tm . "_" . $namaRapor;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $fl = $this->upload->display_errors();
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES UPDATE GAGAL! (Max Ukuran File 1 MB dan Berformat PDF)</b>' . $fl . '</div>');
            redirect('walikelas/bagianadmin');
        } else {
            $path = './raport/';
            @unlink($path . $hps);
            $upload_data = $this->upload->data();
            $data['file'] = $upload_data['file_name'];
            $filenya = $data['file'];
            if ($kode_rapor !== 1) {
                $kode_rapor = 0;
                $this->db->update('file_rapor2', ['LinkRaport' => $filenya], ['nis' => $dacak], ['kode_rapor' => $kode_rapor]);
                $this->session->set_flashdata('notif', '<div class="alert alert-info"><b>PROSES UPDATE BERHASIL!</b> <br/>Raport Atas Nama <B>' . $d2 . '<B/> berhasil di Update!</div>');
                echo $this->session->set_flashdata('msg', 'info');
                redirect('walikelas/bagianadmin/speaking');
            } else {
                $this->db->update('file', ['LinkRaport' => $filenya], ['nis' => $dacak], ['kode_rapor' => $kode_rapor]);
                $this->session->set_flashdata('notif', '<div class="alert alert-info"><b>PROSES UPDATE BERHASIL!</b> <br/>Raport Atas Nama <B>' . $d2 . '<B/> berhasil di Update!</div>');
                echo $this->session->set_flashdata('msg', 'info');
                redirect('walikelas/bagianadmin');
            }
        }
    }

    public function download()
    {
        $down = "raport/" . $this->uri->segment('4');
        force_download($down, NULL);
    }
}
