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
  <title>Download Aplikasi Raport</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="shorcut icon" href="<?php echo base_url() . 'assets/images/' . $set['LogoSekolah']; ?>">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
  <!-- Ionicons -->
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">

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
          DATA RAPOR
          <small></small>
        </h1>
        <?php
        $j  = $this->db->get('siswa')->num_rows();
        $j1 = $this->db->query("select*from akademik,siswa where akademik.nis=siswa.nis order by akademik.nis ASC")->num_rows();
        $j3 = $this->db->query("select*from akademik,siswa where akademik.nis=siswa.nis AND akademik.StatusDownload='L' order by akademik.nis ASC")->num_rows();

        $k1 = $this->db->query("select*from aqliyah,siswa where aqliyah.nis=siswa.nis order by aqliyah.nis ASC")->num_rows();
        $k3 = $this->db->query("select*from aqliyah,siswa where aqliyah.nis=siswa.nis AND aqliyah.StatusDownload='L' order by aqliyah.nis ASC")->num_rows();

        $l1 = $this->db->query("select*from integral,siswa where integral.nis=siswa.nis order by integral.nis ASC")->num_rows();
        $l3 = $this->db->query("select*from integral,siswa where integral.nis=siswa.nis AND integral.StatusDownload='L' order by integral.nis ASC")->num_rows();

        $m1 = $this->db->query("select*from jismiyah,siswa where jismiyah.nis=siswa.nis order by jismiyah.nis ASC")->num_rows();
        $m3 = $this->db->query("select*from jismiyah,siswa where jismiyah.nis=siswa.nis AND jismiyah.StatusDownload='L' order by jismiyah.nis ASC")->num_rows();

        $n1 = $this->db->query("select*from ruhiyah,siswa where ruhiyah.nis=siswa.nis order by ruhiyah.nis ASC")->num_rows();
        $n3 = $this->db->query("select*from ruhiyah,siswa where ruhiyah.nis=siswa.nis AND ruhiyah.StatusDownload='L' order by ruhiyah.nis ASC")->num_rows();


        $o1 = $this->db->query("select*from speaking,siswa where speaking.nis=siswa.nis order by speaking.nis ASC")->num_rows();
        $o3 = $this->db->query("select*from speaking,siswa where speaking.nis=siswa.nis AND speaking.StatusDownload='L' order by speaking.nis ASC")->num_rows();





        ?>
        <ol class="breadcrumb">
          <li style="font-size: 16px;">Total Siswa : <?php echo $j; ?> </li>
          <li style="font-size: 16px;">Total File : <?php echo $j1 + $k1 + $l1; ?> </li>
          <li style="font-size: 16px; color: blue;">Download File : <?php echo $j3 + $k3 + $l3; ?> </li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-6">
            <div class="box">
              <div class="box-header pl-3">
                <h4>
                  DATA RAPOR AKADEMIK
                  <small></small>
                </h4>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="col-md-12">
                  <h4 style="font-weight:bold;"><span class="fa fa-upload"></span> POGRES UPLOAD</h4>
                  <hr />
                  <?php
                  $dg = $this->db->query('select Kelas from siswa group by Kelas')->result_array();
                  foreach ($dg as $ke) {
                    $jsis = $this->db->get_where('siswa', ['Kelas' => $ke['Kelas']])->num_rows();
                    $jupl = $this->db->query("select*from akademik,siswa where akademik.nis=siswa.nis AND siswa.Kelas='" . $ke['Kelas'] . "' order by akademik.nis ASC")->num_rows();
                    $pers = ($jupl / $jsis) * 100;
                    $perse = number_format($pers, 2, ",", ".");
                  ?>
                    <div class="progress-group">
                      <span class="progress-text">
                        Kelas : <?php echo $ke['Kelas']; ?>
                      </span>
                      <span class="progress-number"><b><?php echo $jupl; ?></b>/<?php echo $jsis;
                                                                                echo " ($perse %)"; ?></span>

                      <div class="progress sm">
                        <div class="progress-bar progress-bar-green" style="width: <?php echo ($jupl / $jsis) * 100; ?>%"></div>
                      </div>
                    </div>
                  <?php } ?>
                  <h4 style="font-weight:bold;"><span class="fa fa-download"></span> POGRES DOWNLOAD</h4>
                  <hr />
                  <?php
                  $dgg = $this->db->query('select Kelas from siswa group by Kelas')->result_array();
                  foreach ($dgg as $kee) {
                    $jsiss = $this->db->get_where('siswa', ['Kelas' => $kee['Kelas']])->num_rows();
                    $jupll = $this->db->query("select*from akademik,siswa where akademik.nis=siswa.nis AND siswa.Kelas='" . $kee['Kelas'] . "' AND akademik.StatusDownload='L' order by akademik.nis ASC")->num_rows();
                    $perss = ($jupll / $jsiss) * 100;
                    $persee = number_format($perss, 2, ",", ".");
                  ?>
                    <div class="progress-group">
                      <span class="progress-text">
                        Kelas : <?php echo $kee['Kelas']; ?>
                      </span>
                      <span class="progress-number"><b><?php echo $jupll; ?></b>/<?php echo $jsiss;
                                                                                  echo " ($persee %)"; ?></span>

                      <div class="progress sm">
                        <div class="progress-bar progress-bar-blue" style="width: <?php echo ($jupll / $jsiss) * 100; ?>%"></div>
                      </div>
                    </div>
                  <?php } ?>
                </div>





              </div>
              <!-- /.box-body -->
            </div>
          </div>
          <div class="col-xs-6">
            <div class="box">
              <div class="box-header pl-3">
                <h4>
                  DATA RAPOR SPEAKING
                  <small></small>
                </h4>
              </div>

              <!-- /.box-header -->
              <div class="box-body">
                <div class="col-md-12">
                  <h4 style="font-weight:bold;"><span class="fa fa-upload"></span> POGRES UPLOAD</h4>
                  <hr />
                  <?php
                  $dg = $this->db->query('select Kelas from siswa group by Kelas')->result_array();
                  foreach ($dg as $ke) {
                    $jsis = $this->db->get_where('siswa', ['Kelas' => $ke['Kelas']])->num_rows();
                    $jupl = $this->db->query("select*from speaking,siswa where speaking.nis=siswa.nis AND siswa.Kelas='" . $ke['Kelas'] . "' order by speaking.nis ASC")->num_rows();
                    $pers = ($jupl / $jsis) * 100;
                    $perse = number_format($pers, 2, ",", ".");
                  ?>
                    <div class="progress-group">
                      <span class="progress-text">
                        Kelas : <?php echo $ke['Kelas']; ?>
                      </span>
                      <span class="progress-number"><b><?php echo $jupl; ?></b>/<?php echo $jsis;
                                                                                echo " ($perse %)"; ?></span>

                      <div class="progress sm">
                        <div class="progress-bar progress-bar-green" style="width: <?php echo ($jupl / $jsis) * 100; ?>%"></div>
                      </div>
                    </div>
                  <?php } ?>
                  <h4 style="font-weight:bold;"><span class="fa fa-download"></span> POGRES DOWNLOAD</h4>
                  <hr />
                  <?php
                  $dgg = $this->db->query('select Kelas from siswa group by Kelas')->result_array();
                  foreach ($dgg as $kee) {
                    $jsiss = $this->db->get_where('siswa', ['Kelas' => $kee['Kelas']])->num_rows();
                    $jupll = $this->db->query("select*from speaking,siswa where speaking.nis=siswa.nis AND siswa.Kelas='" . $kee['Kelas'] . "' AND speaking.StatusDownload='L' order by speaking.nis ASC")->num_rows();
                    $perss = ($jupll / $jsiss) * 100;
                    $persee = number_format($perss, 2, ",", ".");
                  ?>
                    <div class="progress-group">
                      <span class="progress-text">
                        Kelas : <?php echo $kee['Kelas']; ?>
                      </span>
                      <span class="progress-number"><b><?php echo $jupll; ?></b>/<?php echo $jsiss;
                                                                                  echo " ($persee %)"; ?></span>

                      <div class="progress sm">
                        <div class="progress-bar progress-bar-blue" style="width: <?php echo ($jupll / $jsiss) * 100; ?>%"></div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
        </div>



        <div class="row">
          <div class="col-xs-6">
            <div class="box">
              <div class="box-header pl-3">
                <h4>
                  DATA RAPOR AQLIYAH
                  <small></small>
                </h4>
              </div>

              <!-- /.box-header -->
              <div class="box-body">
                <div class="col-md-12">
                  <h4 style="font-weight:bold;"><span class="fa fa-upload"></span> POGRES UPLOAD</h4>
                  <hr />
                  <?php
                  $dg = $this->db->query('select Kelas from siswa group by Kelas')->result_array();
                  foreach ($dg as $ke) {
                    $jsis = $this->db->get_where('siswa', ['Kelas' => $ke['Kelas']])->num_rows();
                    $jupl = $this->db->query("select*from aqliyah,siswa where aqliyah.nis=siswa.nis AND siswa.Kelas='" . $ke['Kelas'] . "' order by aqliyah.nis ASC")->num_rows();
                    $pers = ($jupl / $jsis) * 100;
                    $perse = number_format($pers, 2, ",", ".");
                  ?>
                    <div class="progress-group">
                      <span class="progress-text">
                        Kelas : <?php echo $ke['Kelas']; ?>
                      </span>
                      <span class="progress-number"><b><?php echo $jupl; ?></b>/<?php echo $jsis;
                                                                                echo " ($perse %)"; ?></span>

                      <div class="progress sm">
                        <div class="progress-bar progress-bar-green" style="width: <?php echo ($jupl / $jsis) * 100; ?>%"></div>
                      </div>
                    </div>
                  <?php } ?>
                  <h4 style="font-weight:bold;"><span class="fa fa-download"></span> POGRES DOWNLOAD</h4>
                  <hr />
                  <?php
                  $dgg = $this->db->query('select Kelas from siswa group by Kelas')->result_array();
                  foreach ($dgg as $kee) {
                    $jsiss = $this->db->get_where('siswa', ['Kelas' => $kee['Kelas']])->num_rows();
                    $jupll = $this->db->query("select*from aqliyah,siswa where aqliyah.nis=siswa.nis AND siswa.Kelas='" . $kee['Kelas'] . "' AND aqliyah.StatusDownload='L' order by aqliyah.nis ASC")->num_rows();
                    $perss = ($jupll / $jsiss) * 100;
                    $persee = number_format($perss, 2, ",", ".");
                  ?>
                    <div class="progress-group">
                      <span class="progress-text">
                        Kelas : <?php echo $kee['Kelas']; ?>
                      </span>
                      <span class="progress-number"><b><?php echo $jupll; ?></b>/<?php echo $jsiss;
                                                                                  echo " ($persee %)"; ?></span>

                      <div class="progress sm">
                        <div class="progress-bar progress-bar-blue" style="width: <?php echo ($jupll / $jsiss) * 100; ?>%"></div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
          <div class="col-xs-6">
            <div class="box">
              <div class="box-header pl-3">
                <h4>
                  DATA RAPOR INTEGRAL
                  <small></small>
                </h4>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="col-md-12">
                  <h4 style="font-weight:bold;"><span class="fa fa-upload"></span> POGRES UPLOAD</h4>
                  <hr />
                  <?php
                  $dg = $this->db->query('select Kelas from siswa group by Kelas')->result_array();
                  foreach ($dg as $ke) {
                    $jsis = $this->db->get_where('siswa', ['Kelas' => $ke['Kelas']])->num_rows();
                    $jupl = $this->db->query("select*from integral,siswa where integral.nis=siswa.nis AND siswa.Kelas='" . $ke['Kelas'] . "' order by integral.nis ASC")->num_rows();
                    $pers = ($jupl / $jsis) * 100;
                    $perse = number_format($pers, 2, ",", ".");
                  ?>
                    <div class="progress-group">
                      <span class="progress-text">
                        Kelas : <?php echo $ke['Kelas']; ?>
                      </span>
                      <span class="progress-number"><b><?php echo $jupl; ?></b>/<?php echo $jsis;
                                                                                echo " ($perse %)"; ?></span>

                      <div class="progress sm">
                        <div class="progress-bar progress-bar-green" style="width: <?php echo ($jupl / $jsis) * 100; ?>%"></div>
                      </div>
                    </div>
                  <?php } ?>

                  <h4 style="font-weight:bold;"><span class="fa fa-download"></span> POGRES DOWNLOAD</h4>
                  <hr />
                  <?php
                  $dgg = $this->db->query('select Kelas from siswa group by Kelas')->result_array();
                  foreach ($dgg as $kee) {
                    $jsiss = $this->db->get_where('siswa', ['Kelas' => $kee['Kelas']])->num_rows();
                    $jupll = $this->db->query("select*from integral,siswa where integral.nis=siswa.nis AND siswa.Kelas='" . $kee['Kelas'] . "' AND integral.StatusDownload='L' order by integral.nis ASC")->num_rows();
                    $perss = ($jupll / $jsiss) * 100;
                    $persee = number_format($perss, 2, ",", ".");
                  ?>
                    <div class="progress-group">
                      <span class="progress-text">
                        Kelas : <?php echo $kee['Kelas']; ?>
                      </span>
                      <span class="progress-number"><b><?php echo $jupll; ?></b>/<?php echo $jsiss;
                                                                                  echo " ($persee %)"; ?></span>

                      <div class="progress sm">
                        <div class="progress-bar progress-bar-blue" style="width: <?php echo ($jupll / $jsiss) * 100; ?>%"></div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
        </div>






        <!-- /.row -->
        <div class="row">
          <div class="col-xs-6">
            <div class="box">
              <div class="box-header pl-3">
                <h4>
                  DATA RAPOR JISMIYAH
                  <small></small>
                </h4>
              </div>

              <!-- /.box-header -->
              <div class="box-body">
                <div class="col-md-12">
                  <h4 style="font-weight:bold;"><span class="fa fa-upload"></span> POGRES UPLOAD</h4>
                  <hr />
                  <?php
                  $dg = $this->db->query('select Kelas from siswa group by Kelas')->result_array();
                  foreach ($dg as $ke) {
                    $jsis = $this->db->get_where('siswa', ['Kelas' => $ke['Kelas']])->num_rows();
                    $jupl = $this->db->query("select*from jismiyah,siswa where jismiyah.nis=siswa.nis AND siswa.Kelas='" . $ke['Kelas'] . "' order by jismiyah.nis ASC")->num_rows();
                    $pers = ($jupl / $jsis) * 100;
                    $perse = number_format($pers, 2, ",", ".");
                  ?>
                    <div class="progress-group">
                      <span class="progress-text">
                        Kelas : <?php echo $ke['Kelas']; ?>
                      </span>
                      <span class="progress-number"><b><?php echo $jupl; ?></b>/<?php echo $jsis;
                                                                                echo " ($perse %)"; ?></span>

                      <div class="progress sm">
                        <div class="progress-bar progress-bar-green" style="width: <?php echo ($jupl / $jsis) * 100; ?>%"></div>
                      </div>
                    </div>
                  <?php } ?>
                  <h4 style="font-weight:bold;"><span class="fa fa-download"></span> POGRES DOWNLOAD</h4>
                  <hr />
                  <?php
                  $dgg = $this->db->query('select Kelas from siswa group by Kelas')->result_array();
                  foreach ($dgg as $kee) {
                    $jsiss = $this->db->get_where('siswa', ['Kelas' => $kee['Kelas']])->num_rows();
                    $jupll = $this->db->query("select*from jismiyah,siswa where jismiyah.nis=siswa.nis AND siswa.Kelas='" . $kee['Kelas'] . "' AND jismiyah.StatusDownload='L' order by jismiyah.nis ASC")->num_rows();
                    $perss = ($jupll / $jsiss) * 100;
                    $persee = number_format($perss, 2, ",", ".");
                  ?>
                    <div class="progress-group">
                      <span class="progress-text">
                        Kelas : <?php echo $kee['Kelas']; ?>
                      </span>
                      <span class="progress-number"><b><?php echo $jupll; ?></b>/<?php echo $jsiss;
                                                                                  echo " ($persee %)"; ?></span>

                      <div class="progress sm">
                        <div class="progress-bar progress-bar-blue" style="width: <?php echo ($jupll / $jsiss) * 100; ?>%"></div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <div class="col-xs-6">
            <div class="box">
              <div class="box-header pl-3">
                <h4>
                  DATA RAPOR RUHIYAH
                  <small></small>
                </h4>
              </div>

              <!-- /.box-header -->
              <div class="box-body">
                <div class="col-md-12">
                  <h4 style="font-weight:bold;"><span class="fa fa-upload"></span> POGRES UPLOAD</h4>
                  <hr />
                  <?php
                  $dg = $this->db->query('select Kelas from siswa group by Kelas')->result_array();
                  foreach ($dg as $ke) {
                    $jsis = $this->db->get_where('siswa', ['Kelas' => $ke['Kelas']])->num_rows();
                    $jupl = $this->db->query("select*from ruhiyah,siswa where ruhiyah.nis=siswa.nis AND siswa.Kelas='" . $ke['Kelas'] . "' order by ruhiyah.nis ASC")->num_rows();
                    $pers = ($jupl / $jsis) * 100;
                    $perse = number_format($pers, 2, ",", ".");
                  ?>
                    <div class="progress-group">
                      <span class="progress-text">
                        Kelas : <?php echo $ke['Kelas']; ?>
                      </span>
                      <span class="progress-number"><b><?php echo $jupl; ?></b>/<?php echo $jsis;
                                                                                echo " ($perse %)"; ?></span>

                      <div class="progress sm">
                        <div class="progress-bar progress-bar-green" style="width: <?php echo ($jupl / $jsis) * 100; ?>%"></div>
                      </div>
                    </div>
                  <?php } ?>
                  <h4 style="font-weight:bold;"><span class="fa fa-download"></span> POGRES DOWNLOAD</h4>
                  <hr />
                  <?php
                  $dgg = $this->db->query('select Kelas from siswa group by Kelas')->result_array();
                  foreach ($dgg as $kee) {
                    $jsiss = $this->db->get_where('siswa', ['Kelas' => $kee['Kelas']])->num_rows();
                    $jupll = $this->db->query("select*from ruhiyah,siswa where ruhiyah.nis=siswa.nis AND siswa.Kelas='" . $kee['Kelas'] . "' AND ruhiyah.StatusDownload='L' order by ruhiyah.nis ASC")->num_rows();
                    $perss = ($jupll / $jsiss) * 100;
                    $persee = number_format($perss, 2, ",", ".");
                  ?>
                    <div class="progress-group">
                      <span class="progress-text">
                        Kelas : <?php echo $kee['Kelas']; ?>
                      </span>
                      <span class="progress-number"><b><?php echo $jupll; ?></b>/<?php echo $jsiss;
                                                                                  echo " ($persee %)"; ?></span>

                      <div class="progress sm">
                        <div class="progress-bar progress-bar-blue" style="width: <?php echo ($jupll / $jsiss) * 100; ?>%"></div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->





      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    $this->load->view('v_footer');
    ?>


  </div>
  <!-- ./wrapper -->

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url() . 'assets/plugins/sparkline/jquery.sparkline.min.js' ?>"></script>
  <!-- jvectormap -->
  <script src="<?php echo base_url() . 'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js' ?>"></script>
  <!-- SlimScroll 1.3.0 -->
  <script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
  <!-- ChartJS 1.0.1 -->
  <script src="<?php echo base_url() . 'assets/plugins/chartjs/Chart.min.js' ?>"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url() . 'assets/dist/js/pages/dashboard2.js' ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>

  <script>
    var lineChartData = {
      labels: <?php echo json_encode($bulan); ?>,
      datasets: [

        {
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(152,235,239,1)",
          data: <?php echo json_encode($value); ?>
        }

      ]

    }

    var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

    var canvas = new Chart(myLine).Line(lineChartData, {
      scaleShowGridLines: true,
      scaleGridLineColor: "rgba(0,0,0,.005)",
      scaleGridLineWidth: 0,
      scaleShowHorizontalLines: true,
      scaleShowVerticalLines: true,
      bezierCurve: true,
      bezierCurveTension: 0.4,
      pointDot: true,
      pointDotRadius: 4,
      pointDotStrokeWidth: 1,
      pointHitDetectionRadius: 2,
      datasetStroke: true,
      tooltipCornerRadius: 2,
      datasetStrokeWidth: 2,
      datasetFill: true,
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      responsive: true
    });
  </script>

</body>

</html>