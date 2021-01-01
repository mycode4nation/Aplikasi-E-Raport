<?php
defined('BASEPATH') or exit('No direct script access allowed');
$set = $this->db->get_where('sekolah', ['id' => 1])->row_array();
date_default_timezone_set('Asia/Jakarta');
$d  = $sis->num_rows();
$d2 = $sis2->num_rows();
$d3 = $sis3->num_rows();
$d4 = $sis4->num_rows();
$d5 = $sis5->num_rows();
$d6 = $sis6->num_rows();
$d7 = $sis7->num_rows();

$dt  = $sis->row_array();
$dt2 = $sis2->row_array();
$dt3 = $sis3->row_array();
$dt4 = $sis4->row_array();
$dt5 = $sis5->row_array();
$dt6 = $sis6->row_array();
$dt7 = $sis7->row_array();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Download Raport</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" href="<?php echo base_url() . 'assets/images/' . $set['LogoSekolah']; ?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
  <!-- Custome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/style.css' ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/iCheck/square/blue.css' ?>">


</head>

<body class="hold-transition login-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-md-4 col-md-offset-4">
        <h1 class="text-center login-title"></h1>
        <div class="account-wall">
          <img class="profile-img" src="<?php echo base_url() . 'assets/images/' . $set['LogoSekolah']; ?>?sz=120" alt="">
          <center style="font-weight: bold; font-size: 18px;">DATA ANDA<br /></center>
          <form class="form-signin" method="post" action="<?php echo base_url('siswa/proses'); ?>">
            <label>NIS :</label>
            <div class="form-group">
              <?php echo $this->session->userdata('nis'); ?>
            </div>
            <label>Nama :</label>
            <div class="form-group">
              <?php echo $this->session->userdata('nama'); ?>
            </div>
            <label>Kelas :</label>
            <div class="form-group">
              <?php echo $this->session->userdata('kelas'); ?>
            </div>
            <a href="<?php echo base_url('siswa/logout'); ?>" class="btn btn-lg btn-danger btn-block">Logout</a>
          </form>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4 ">
        <h1 class="text-center login-title"></h1>
        <div class="account-wall">
          <img class="profile-img" src="<?= $akademik == 0 ? base_url() . 'assets/images/belum.png' : base_url() . 'assets/images/sudah.png' ?>" alt="">
          <center style="font-weight: bold; font-size: 18px;">RAPOR AKADEMIK <br /></center>
          <br>
          <center><?= $akademik == 0 ? '<button class="btn btn-danger disabled">Belum di Unggah</button> ' : '<a href= "' . base_url() . 'Siswa/downloadRapor/' . $dt["nis"] . '/' . $dt['LinkRaport'] . '/akademik" class="btn btn-lg btn-success btn-block">Download Rapor </a>' ?></center>
        </div>

      </div>
      <div class="col-sm-6 col-md-4 ">
        <h1 class="text-center login-title"></h1>
        <div class="account-wall">
          <img class="profile-img" src="<?= $aqliyah == 0 ? base_url() . 'assets/images/belum.png' : base_url() . 'assets/images/sudah.png' ?>" alt="">
          <center style="font-weight: bold; font-size: 18px;">RAPOR AQLIYAH <br /></center>
          <br>
          <center><?= $aqliyah == 0 ? '<button class="btn btn-danger disabled">Belum di Unggah</button> ' : '<a href= "' . base_url() . 'Siswa/downloadRapor/' . $dt2["nis"] . '/' . $dt2['LinkRaport'] . '/aqliyah" class="btn btn-lg btn-success btn-block">Download Rapor</a>' ?></center>
        </div>

      </div>
      <div class="col-sm-6 col-md-4 ">
        <h1 class="text-center login-title"></h1>
        <div class="account-wall">
          <img class="profile-img" src="<?= $integral == 0 ? base_url() . 'assets/images/belum.png' : base_url() . 'assets/images/sudah.png' ?>" alt="">
          <center style="font-weight: bold; font-size: 18px;">RAPOR INTEGRAL <br /></center>
          <br>
          <center><?= $integral == 0 ? '<button class="btn btn-danger disabled">Belum di Unggah</button> ' : '<a href= "' . base_url() . 'Siswa/downloadRapor/' . $dt3["nis"] . '/' . $dt3['LinkRaport'] . '/integral" class="btn btn-lg btn-success btn-block">Download Rapor</a>' ?></center>
        </div>

      </div>
    </div>


    <div class="row">
      <div class="col-sm-6 col-md-4 ">
        <h1 class="text-center login-title"></h1>
        <div class="account-wall">
          <img class="profile-img" src="<?= $jismiyah == 0 ? base_url() . 'assets/images/belum.png' : base_url() . 'assets/images/sudah.png' ?>" alt="">
          <center style="font-weight: bold; font-size: 18px;">RAPOR JISMIYAH <br /></center>
          <br>
          <center><?= $jismiyah == 0 ? '<button class="btn btn-danger disabled">Belum di Unggah</button> ' : '<a href= "' . base_url() . 'Siswa/downloadRapor/' . $dt4["nis"] . '/' . $dt4['LinkRaport'] . '/jismiyah" class="btn btn-lg btn-success btn-block">Download Rapor</a>' ?></center>
        </div>

      </div>
      <div class="col-sm-6 col-md-4 ">
        <h1 class="text-center login-title"></h1>
        <div class="account-wall">
          <img class="profile-img" src="<?= $speaking == 0 ? base_url() . 'assets/images/belum.png' : base_url() . 'assets/images/sudah.png' ?>" alt="">
          <center style="font-weight: bold; font-size: 18px;">RAPOR SPEAKING <br /></center>
          <br>
          <center><?= $speaking == 0 ? '<button class="btn btn-danger disabled">Belum di Unggah</button> ' : '<a href= "' . base_url() . 'Siswa/downloadRapor/' . $dt6["nis"] . '/' . $dt6['LinkRaport'] . '/speaking" class="btn btn-lg btn-success btn-block">Download Rapor</a>' ?></center>
        </div>

      </div>
      <div class="col-sm-6 col-md-4 ">
        <h1 class="text-center login-title"></h1>
        <div class="account-wall">
          <img class="profile-img" src="<?= $ruhiyah == 0 ? base_url() . 'assets/images/belum.png' : base_url() . 'assets/images/sudah.png' ?>" alt="">
          <center style="font-weight: bold; font-size: 18px;">RAPOR RUHIYAH <br /></center>
          <br>
          <center><?= $ruhiyah == 0 ? '<button class="btn btn-danger disabled">Belum di Unggah</button> ' : '<a href= "' . base_url() . 'Siswa/downloadRapor/' . $dt5["nis"] . '/' . $dt5['LinkRaport'] . '/ruhiyah" class="btn btn-lg btn-success btn-block">Download Rapor</a>' ?></center>
        </div>

      </div>

      <div class="col-sm-6 col-md-4 ">
        <h1 class="text-center login-title"></h1>
        <div class="account-wall">
          <img class="profile-img" src="<?= $quran == 0 ? base_url() . 'assets/images/belum.png' : base_url() . 'assets/images/sudah.png' ?>" alt="">
          <center style="font-weight: bold; font-size: 18px;">RAPOR MADROSATUL QURAN <br /></center>
          <br>
          <center><?= $quran == 0 ? '<button class="btn btn-danger disabled">Belum di Unggah</button> ' : '<a href= "' . base_url() . 'Siswa/downloadRapor/' . $dt7["nis"] . '/' . $dt7['LinkRaport'] . '/quran" class="btn btn-lg btn-success btn-block">Download Rapor</a>' ?></center>
        </div>

      </div>
    </div>
  </div>

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url() . 'assets/plugins/iCheck/icheck.min.js' ?>"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
</body>

</html>