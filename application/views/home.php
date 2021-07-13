<!DOCTYPE html>
<html>

    <head>
        <title>SIWIKODE - Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script defer src="<?= base_url('frontend/Javascript/NavBar.js')?>"></script>
        <link rel="stylesheet" href="<?= base_url('frontend/CSS/Home.css')?>">
        <link rel="stylesheet" href="<?= base_url('frontend/CSS/Header.css')?>">
        <link rel="stylesheet" href="<?= base_url('frontend/CSS/Wrapper.css')?>">
    </head>

    <body>

        <!--Header-->
        <div class="header">
            <div class="SIWIKODE1">SIWIKODE</div>
            <div class="SIWIKODE2">Sistem Informasi Wisata Kota Depok</div>
        </div>


        <div class="Wrapper1" style="border-bottom: none; margin-top: 20px;">
            <!--Navigation Bar-->
            <div class="topnav" id="myTopnav">
                <a href="<?php echo base_url()?>index.php/welcome/index" class="active" class="topnav1">Home</a>
                <a href="<?php echo base_url()?>index.php/welcome/siwikode" class="topnav1">Wisata Rekreasi</a>
                <a href="<?php echo base_url()?>index.php/welcome/wis_kul" class="topnav1">Wisata Kuliner</a>
                <a href="<?php echo base_url()?>index.php/welcome/reg_wis" class="topnav1">Registrasi</a>
                <a href="<?php echo base_url()?>index.php/login/login" class="topnav1" style="float: right;">Login</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>

        <!--Content-->
        <div class="Wrapper1">
            <div class="Title2" style="margin-left: 10px; margin-top: 40px;">Wisata Rekreasi dan Kuliner Unggulan</div>

            <div class="content-container">
              <div class="content-item">
                <a href="<?php echo base_url()?>index.php/welcome/det_masjid">
                    <div class="content-title"><b>Masjid Kubah Emas</b> - Wisata</div>
                    <img src="<?= base_url('frontend/Image/Masjid/Masjid1.jpg')?>">
                    <div class="content-text">
                        <p>Masjid Jami' Dian Al-Mahri adalah sebuah masjid yang dibangun di tepi Jalan Raya Meruyung, Kecamatan Limo, Kota Depok, Jawa Barat.</p>
                    </div>
                </a>
            </div>

              <div class="content-item">
                <a href="<?php echo base_url()?>index.php/welcome/det_kampung">
                    <div class="content-title"><b>Kampung 99 Pepohonan</b> - Wisata</div>
                    <img src="<?= base_url('frontend/Image/99.jpg')?>">
                    <div class="content-text">
                        <p>Wisata ini mengusung konsep yang menyatu dengan alam menjadi destinasi wisata ini cocok digunakan sebagai tempat liburan Anda dengan keluarga</p>
                    </div>
                </a>
            </div>

              <div class="content-item">
                <a href="<?php echo base_url()?>index.php/welcome/det_taman">
                    <div class="content-title"><b>Taman Herbal Insani </b> - Wisata</div>
                    <img src="<?= base_url('frontend/Image/Taman.jpg')?>">
                    <div class="content-text">
                        <p>Taman Herbal Insani merupakan tempat rekreasi alam terbuka sekaligus edukasi tanaman obat.</p>
                    </div>
                </a>
            </div>

              <div class="content-item">
                <a href="<?php echo base_url()?>index.php/welcome/det_martabak">
                    <div class="content-title"><b>Lapis Martabak</b> - Kuliner</div>
                    
                    <img src="<?= base_url(''); ?>/frontend/Image/Martabak/Martabak1.jpg">
                    <div class="content-text">
                        <p>Menjual berbagai rasa dan variasi martabak. Menyediakan martabak manis dan martabak telur. </p>
                    </div>
                </a>
            </div>

              <div class="content-item">
                <a href="<?php echo base_url()?>index.php/welcome/det_soto">
                    <div class="content-title"><b>Aroma Soto</b> - Kuliner</div>
                    
                    <img src="<?= base_url('frontend/Image/Soto.jpg')?>">
                    <div class="content-text">
                        <p>Makanan khas Indonesia yang terbuat dari kaldu daging dan sayuran. Kaldu yang digunakan adalah daging ayam atau sapi.</p>
                    </div>
                </a>
            </div>

            <div class="content-item">
                <a href="<?php echo base_url()?>index.php/welcome/det_kue">
                    <div class="content-title"><b>Aroma Kue</b> - Kuliner</div>
                    <img src="<?= base_url('frontend/Image/Bolu.jpg')?>">
                    <div class="content-text">
                        <p>Menjual berbagai macam jenis kue. Mulai dari bolu hingga roti.</p>
                    </div>
                </a>
            </div>

            </div>
        </div>

        <div style="margin-top: 30px; padding: 10px;">
            <hr>
            <p>Develop by Mahasiswa @STT-NF 2020</p>
        </div>
        <div class="Wrapper4">
            <b>Kelompok 7 - Kelas SI03</b><br><br>
            <b>Anggota Kelompok:</b>
            <ol>
                <li>Muhammad Kemal Solichin</li>
                <li>Daffa Khalish Hardy Putra</li>
                <li>Muhammad Afif</li>
                <li>Ulfi Aliffiani Maulana Putri</li>
              </ol> 
        </div>
        
    </body>

</html>