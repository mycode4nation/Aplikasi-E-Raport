<!--Counter Inbox-->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$set = $this->db->get_where('sekolah', ['id' => 1])->row_array();
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
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>" />

  <style type="text/css">
    thead {
      font-weight: bold;
      font-size: 16px;
    }
  </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!--Header-->
    <?php
    $this->load->view('v_header');
    ?>

    <!-- Left side column. contains the logo and sidebar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Kelas : <?php echo $kel; ?>
          <small></small>
        </h1>
        <?php
        $j  = $this->db->get_where('siswa', ['Kelas' => $kel])->num_rows();

        $j1 = $sisw->num_rows();
        $j3 = $fil->num_rows();
        $j4 = $this->db->query("select*from akademik,siswa where akademik.nis=siswa.nis AND siswa.Kelas='" . $kel . "' AND akademik.StatusDownload='L' order by akademik.nis ASC")->num_rows();

        $k1 = $sisw2->num_rows();
        $k3 = $fil2->num_rows();
        $k4 = $this->db->query("select*from aqliyah,siswa where aqliyah.nis=siswa.nis AND siswa.Kelas='" . $kel . "' AND aqliyah.StatusDownload='L' order by aqliyah.nis ASC")->num_rows();

        $l1 = $sisw3->num_rows();
        $l3 = $fil3->num_rows();
        $l4 = $this->db->query("select*from integral,siswa where integral.nis=siswa.nis AND siswa.Kelas='" . $kel . "' AND integral.StatusDownload='L' order by integral.nis ASC")->num_rows();

        $m1 = $sisw4->num_rows();
        $m3 = $fil4->num_rows();
        $m4 = $this->db->query("select*from ruhiyah,siswa where ruhiyah.nis=siswa.nis AND siswa.Kelas='" . $kel . "' AND ruhiyah.StatusDownload='L' order by ruhiyah.nis ASC")->num_rows();

        $n1 = $sisw5->num_rows();
        $n3 = $fil5->num_rows();
        $n4 = $this->db->query("select*from jismiyah,siswa where jismiyah.nis=siswa.nis AND siswa.Kelas='" . $kel . "' AND jismiyah.StatusDownload='L' order by jismiyah.nis ASC")->num_rows();

        $o1 = $sisw2->num_rows();
        $o3 = $fil2->num_rows();
        $o4 = $this->db->query("select*from speaking,siswa where speaking.nis=siswa.nis AND siswa.Kelas='" . $kel . "' AND speaking.StatusDownload='L' order by speaking.nis ASC")->num_rows();

        ?>
        <ol class="breadcrumb">
          <li style="font-size: 16px;">Total Siswa : <?php echo $j; ?> </li>
          <li style="font-size: 16px;">Belum Upload : <?php echo $j1 + $k1 + $l1 + $m1 + $n1 + $o1; ?> </li>
          <li style="font-size: 16px; color: blue;">Sudah Upload : <?php echo $j3 + $k3 + $l3 + $m3 + $n3 + $o3; ?> </li>
          <li style="font-size: 16px; color: blue;">Siswa Download : <?php echo $j4 + $k4 + $l4 + $m4 + $n4 + $o4; ?> </li>
        </ol>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-lg-12">
              <div class="box">
                <div class="box">
                  <div class="box-header">
                    <h4>RAPOR AKADEMIK</h4>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <?php echo $this->session->flashdata('notif') ?>
                    <table class="table">
                      <thead>
                        <tr>
                          <td>NO</td>
                          <td>NIS</td>
                          <td>Nama Lngkap</td>
                          <td>Status Upload</td>
                          <td>Status Download</td>
                        </tr>
                      </thead>
                      <?php
                      $no = 1;
                      foreach ($sisw->result_array() as $ke) { ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $ke['nis']; ?></td>
                          <td><?php echo $ke['NamaLengkap']; ?></td>
                          <td><span class="fa fa-exclamation-triangle" style="color:red"> Belum Upload</span></td>
                          <td><span class="fa fa-exclamation-triangle" style="color:red"> KOSONG</span></td>
                        </tr>
                      <?php
                        $no++;
                      }
                      ?>
                      <?php
                      $no = 1;
                      foreach ($fil->result_array() as $de) { ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $de['nis']; ?></td>
                          <td><?php echo $de['NamaLengkap']; ?></td>
                          <td><span class="fa fa-check" style="color:blue"> Berhasil Upload </span></td>
                          <td>
                            <?php
                            if ($de['StatusDownload'] == 'B') {
                              echo '<span class="fa fa-exclamation-triangle" style="color:red"> <a href="' . base_url('uploadraport/download/') . $de["LinkRaport"] . '">Siswa Belum Download</a> </span>';
                            } else {
                              echo '<span class="fa fa-check" style="color:blue"> <a href="' . base_url('uploadraport/download/') . $de["LinkRaport"] . '">di Download Pada ' . $de["jam_download"] . '</a> </span>';
                            }
                            ?>
                          </td>
                        </tr>
                      <?php
                        $no++;
                      }
                      ?>

                    </table>


                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->
            </div>
          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-lg-12">
              <div class="box">
                <div class="box">
                  <div class="box-header">
                    <h4>
                      RAPOR AQLIYAH
                    </h4>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <?php echo $this->session->flashdata('notif') ?>
                    <table class="table">
                      <thead>
                        <tr>
                          <td>NO</td>
                          <td>NIS</td>
                          <td>Nama Lngkap</td>
                          <td>Status Upload</td>
                          <td>Status Download</td>
                        </tr>
                      </thead>
                      <?php
                      $no = 1;
                      foreach ($sisw2->result_array() as $ke) { ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $ke['nis']; ?></td>
                          <td><?php echo $ke['NamaLengkap']; ?></td>
                          <td><span class="fa fa-exclamation-triangle" style="color:red"> Belum Upload</span></td>
                          <td><span class="fa fa-exclamation-triangle" style="color:red"> KOSONG</span></td>
                        </tr>
                      <?php
                        $no++;
                      }
                      ?>
                      <?php
                      $no = 1;
                      foreach ($fil2->result_array() as $de) { ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $de['nis']; ?></td>
                          <td><?php echo $de['NamaLengkap']; ?></td>
                          <td><span class="fa fa-check" style="color:blue"> Berhasil Upload </span></td>
                          <td>
                            <?php
                            if ($de['StatusDownload'] == 'B') {
                              echo '<span class="fa fa-exclamation-triangle" style="color:red"> <a href="' . base_url('uploadraport/download/') . $de["LinkRaport"] . '">Siswa Belum Download</a> </span>';
                            } else {
                              echo '<span class="fa fa-check" style="color:blue"> <a href="' . base_url('uploadraport/download/') . $de["LinkRaport"] . '">di Download Pada ' . $de["jam_download"] . '</a> </span>';
                            }
                            ?>
                          </td>
                        </tr>
                      <?php
                        $no++;
                      }
                      ?>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->
            </div>
          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-lg-12">
              <div class="box">
                <div class="box">
                  <div class="box-header">
                    <h4>
                      RAPOR INTEGRAL
                    </h4>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <?php echo $this->session->flashdata('notif') ?>
                    <table class="table">
                      <thead>
                        <tr>
                          <td>NO</td>
                          <td>NIS</td>
                          <td>Nama Lngkap</td>
                          <td>Status Upload</td>
                          <td>Status Download</td>
                        </tr>
                      </thead>
                      <?php
                      $no = 1;
                      foreach ($sisw3->result_array() as $ke) { ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $ke['nis']; ?></td>
                          <td><?php echo $ke['NamaLengkap']; ?></td>
                          <td><span class="fa fa-exclamation-triangle" style="color:red"> Belum Upload</span></td>
                          <td><span class="fa fa-exclamation-triangle" style="color:red"> KOSONG</span></td>
                        </tr>
                      <?php
                        $no++;
                      }
                      ?>
                      <?php
                      $no = 1;
                      foreach ($fil3->result_array() as $de) { ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $de['nis']; ?></td>
                          <td><?php echo $de['NamaLengkap']; ?></td>
                          <td><span class="fa fa-check" style="color:blue"> Berhasil Upload </span></td>
                          <td>
                            <?php
                            if ($de['StatusDownload'] == 'B') {
                              echo '<span class="fa fa-exclamation-triangle" style="color:red"> <a href="' . base_url('uploadraport/download/') . $de["LinkRaport"] . '">Siswa Belum Download</a> </span>';
                            } else {
                              echo '<span class="fa fa-check" style="color:blue"> <a href="' . base_url('uploadraport/download/') . $de["LinkRaport"] . '">di Download Pada ' . $de["jam_download"] . '</a> </span>';
                            }
                            ?>
                          </td>
                        </tr>
                      <?php
                        $no++;
                      }
                      ?>

                    </table>


                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="box">
                <div class="box">
                  <div class="box-header">
                    <h4>
                      RAPOR RUHIYAH
                    </h4>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <?php echo $this->session->flashdata('notif') ?>
                    <table class="table">
                      <thead>
                        <tr>
                          <td>NO</td>
                          <td>NIS</td>
                          <td>Nama Lngkap</td>
                          <td>Status Upload</td>
                          <td>Status Download</td>
                        </tr>
                      </thead>
                      <?php
                      $no = 1;
                      foreach ($sisw4->result_array() as $ke) { ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $ke['nis']; ?></td>
                          <td><?php echo $ke['NamaLengkap']; ?></td>
                          <td><span class="fa fa-exclamation-triangle" style="color:red"> Belum Upload</span></td>
                          <td><span class="fa fa-exclamation-triangle" style="color:red"> KOSONG</span></td>
                        </tr>
                      <?php
                        $no++;
                      }
                      ?>
                      <?php
                      $no = 1;
                      foreach ($fil4->result_array() as $de) { ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $de['nis']; ?></td>
                          <td><?php echo $de['NamaLengkap']; ?></td>
                          <td><span class="fa fa-check" style="color:blue"> Berhasil Upload </span></td>
                          <td>
                            <?php
                            if ($de['StatusDownload'] == 'B') {
                              echo '<span class="fa fa-exclamation-triangle" style="color:red"> <a href="' . base_url('uploadraport/download/') . $de["LinkRaport"] . '">Siswa Belum Download</a> </span>';
                            } else {
                              echo '<span class="fa fa-check" style="color:blue"> <a href="' . base_url('uploadraport/download/') . $de["LinkRaport"] . '">di Download Pada ' . $de["jam_download"] . '</a> </span>';
                            }
                            ?>
                          </td>
                        </tr>
                      <?php
                        $no++;
                      }
                      ?>

                    </table>


                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="box">
                <div class="box">
                  <div class="box-header">
                    <h4>
                      RAPOR JISMIYAH
                    </h4>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <?php echo $this->session->flashdata('notif') ?>
                    <table class="table">
                      <thead>
                        <tr>
                          <td>NO</td>
                          <td>NIS</td>
                          <td>Nama Lngkap</td>
                          <td>Status Upload</td>
                          <td>Status Download</td>
                        </tr>
                      </thead>
                      <?php
                      $no = 1;
                      foreach ($sisw5->result_array() as $ke) { ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $ke['nis']; ?></td>
                          <td><?php echo $ke['NamaLengkap']; ?></td>
                          <td><span class="fa fa-exclamation-triangle" style="color:red"> Belum Upload</span></td>
                          <td><span class="fa fa-exclamation-triangle" style="color:red"> KOSONG</span></td>
                        </tr>
                      <?php
                        $no++;
                      }
                      ?>
                      <?php
                      $no = 1;
                      foreach ($fil5->result_array() as $de) { ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $de['nis']; ?></td>
                          <td><?php echo $de['NamaLengkap']; ?></td>
                          <td><span class="fa fa-check" style="color:blue"> Berhasil Upload </span></td>
                          <td>
                            <?php
                            if ($de['StatusDownload'] == 'B') {
                              echo '<span class="fa fa-exclamation-triangle" style="color:red"> <a href="' . base_url('uploadraport/download/') . $de["LinkRaport"] . '">Siswa Belum Download</a> </span>';
                            } else {
                              echo '<span class="fa fa-check" style="color:blue"> <a href="' . base_url('uploadraport/download/') . $de["LinkRaport"] . '">di Download Pada ' . $de["jam_download"] . '</a> </span>';
                            }
                            ?>
                          </td>
                        </tr>
                      <?php
                        $no++;
                      }
                      ?>

                    </table>


                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->
            </div>
          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-lg-12">
              <div class="box">
                <div class="box">
                  <div class="box-header">
                    <h4>
                      RAPOR SPEAKING
                    </h4>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <?php echo $this->session->flashdata('notif') ?>
                    <table class="table">
                      <thead>
                        <tr>
                          <td>NO</td>
                          <td>NIS</td>
                          <td>Nama Lngkap</td>
                          <td>Status Upload</td>
                          <td>Status Download</td>
                        </tr>
                      </thead>
                      <?php
                      $no = 1;
                      foreach ($sisw6->result_array() as $ke) { ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $ke['nis']; ?></td>
                          <td><?php echo $ke['NamaLengkap']; ?></td>
                          <td><span class="fa fa-exclamation-triangle" style="color:red"> Belum Upload</span></td>
                          <td><span class="fa fa-exclamation-triangle" style="color:red"> KOSONG</span></td>
                        </tr>
                      <?php
                        $no++;
                      }
                      ?>
                      <?php
                      $no = 1;
                      foreach ($fil6->result_array() as $de) { ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $de['nis']; ?></td>
                          <td><?php echo $de['NamaLengkap']; ?></td>
                          <td><span class="fa fa-check" style="color:blue"> Berhasil Upload </span></td>
                          <td>
                            <?php
                            if ($de['StatusDownload'] == 'B') {
                              echo '<span class="fa fa-exclamation-triangle" style="color:red"> <a href="' . base_url('uploadraport/download/') . $de["LinkRaport"] . '">Siswa Belum Download</a> </span>';
                            } else {
                              echo '<span class="fa fa-check" style="color:blue"> <a href="' . base_url('uploadraport/download/') . $de["LinkRaport"] . '">di Download Pada ' . $de["jam_download"] . '</a> </span>';
                            }
                            ?>
                          </td>
                        </tr>
                      <?php
                        $no++;
                      }
                      ?>

                    </table>


                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->
            </div>
          </div>



        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    $this->load->view('v_footer');
    ?>


  </div>
  <!-- ./wrapper -->

  <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.min.js' ?>"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.js' ?>"></script>
  <!-- page script -->
  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>
  <?php if ($this->session->flashdata('msg') == 'error') : ?>
    <script type="text/javascript">
      $.toast({
        heading: 'Error',
        text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
        showHideTransition: 'slide',
        icon: 'error',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#FF4859'
      });
    </script>

  <?php elseif ($this->session->flashdata('msg') == 'success') : ?>
    <script type="text/javascript">
      $.toast({
        heading: 'Success',
        text: "Data Berhasil disimpan ke database.",
        showHideTransition: 'slide',
        icon: 'success',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#7EC857'
      });
    </script>
  <?php elseif ($this->session->flashdata('msg') == 'info') : ?>
    <script type="text/javascript">
      $.toast({
        heading: 'Info',
        text: "Data berhasil di update",
        showHideTransition: 'slide',
        icon: 'info',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#00C9E6'
      });
    </script>
  <?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
    <script type="text/javascript">
      $.toast({
        heading: 'Success',
        text: "Data Berhasil dihapus.",
        showHideTransition: 'slide',
        icon: 'success',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#7EC857'
      });
    </script>
  <?php else : ?>

  <?php endif; ?>

</body>

</html>