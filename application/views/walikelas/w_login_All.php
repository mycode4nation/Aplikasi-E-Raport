<?php
defined('BASEPATH') or exit('No direct script access allowed');
$set = $this->db->get_where('sekolah', ['id' => 1])->row_array();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aplikasi E-Rapor</title>
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

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-12 col-md-offset-4">
                <article>
                    <main class="grid">
                        <div class="text">
                            <img class="profile-img" src="<?php echo base_url() . 'assets/images/' . $set['LogoSekolah']; ?>?sz=120" alt="">
                            <center>
                                <h3>Selamat Datang pengguna Aplikasi E-Rapor <br>SMA Ar Rohmah Malang</h3>
                            </center>
                            <center>
                                <p>ini adalah halaman pemilihan login upload rapor wali kelas berdasarkan jenis rapor</p>
                            </center>

                        </div>
                </article>
            </div>
            </main>
        </div>
        <div class="row">
            <main class="grid">
                <article>
                    <img src="<?php echo base_url() . 'assets/images/akademik.jpg' ?>?sz=120" alt="">
                    <div class="text">
                        <h3>Halaman Rapor Akademik</h3>
                        <p>Silahkan klik tombol dibawah ini untuk menuju halaman Login Upload Rapor akademik.</p>
                        <a href="<?php echo base_url('guruwalikelas/akademik'); ?>" class="btn btn-lg btn-brown btn-block">Login Akademik</a>
                    </div>
                </article>
                <article>
                    <img src="<?php echo base_url() . 'assets/images/speaking.png' ?>?sz=120" alt="">

                    <div class="text">
                        <h3>Halaman Rapor Speaking</h3>
                        <p>Silahkan klik tombol dibawah ini untuk menuju halaman Login Upload Rapor speaking.</p>
                        <a href="<?php echo base_url('guruwalikelas/speaking'); ?>" class="btn btn-lg btn-brown btn-block">Login Speaking</a>
                    </div>
                </article>
                <article>
                    <img src="<?php echo base_url() . 'assets/images/aqliyah.png' ?>?sz=120" alt="">

                    <div class="text">
                        <h3>Halaman Rapor Aqliyah</h3>
                        <p>Silahkan klik tombol dibawah ini untuk menuju halaman Login Upload Rapor Aqliyah.</p>
                        <a href="<?php echo base_url('guruwalikelas/aqliyah'); ?>" class="btn btn-lg btn-brown btn-block">Login Aqliyah</a>
                    </div>
                </article>


                <article>
                    <img src="<?php echo base_url() . 'assets/images/jismiyah.png' ?>?sz=120" alt="">
                    <div class="text">
                        <h3>Halaman Rapor Jismiyah</h3>
                        <p>Silahkan klik tombol dibawah ini untuk menuju halaman Login Upload Rapor jismiyah.</p>
                        <a href="<?php echo base_url('guruwalikelas/jismiyah'); ?>" class="btn btn-lg btn-brown btn-block">Login Jismiyah</a>
                    </div>
                </article>
                <article>
                    <img src="<?php echo base_url() . 'assets/images/integral.png' ?>?sz=120" alt="">

                    <div class="text">
                        <h3>Halaman Rapor Integral</h3>
                        <p>Silahkan klik tombol dibawah ini untuk menuju halaman Login Upload Rapor integral.</p>
                        <a href="<?php echo base_url('guruwalikelas/integral'); ?>" class="btn btn-lg btn-brown btn-block">Login Integral</a>
                    </div>
                </article>
                <article>
                    <img src="<?php echo base_url() . 'assets/images/ruhiyah.png' ?>?sz=120" alt="">

                    <div class="text">
                        <h3>Halaman Rapor ruhiyah</h3>
                        <p>Silahkan klik tombol dibawah ini untuk menuju halaman Login Upload Rapor ruhiyah.</p>
                        <a href="<?php echo base_url('guruwalikelas/ruhiyah'); ?>" class="btn btn-lg btn-brown btn-block">Login Ruhiyah</a>
                    </div>
                </article>

                <article>
                    <img src="<?php echo base_url() . 'assets/images/quran.png' ?>?sz=120" alt="">
                    <div class="text">
                        <h3>Halaman Rapor Madrosatul Quran</h3>
                        <p>Silahkan klik tombol dibawah ini untuk menuju halaman Login Upload Rapor Madrosatul Quran.</p>
                        <a href="<?php echo base_url('guruwalikelas/quran'); ?>" class="btn btn-lg btn-brown btn-block">Login Madrosatul Quran</a>
                    </div>
                </article>
            </main>
        </div>
    </div>
</body>

</html>