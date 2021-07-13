<!DOCTYPE html>
<html>

<head>
        <title>SIWIKODE - Kampung 99 Pepohonan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script defer src="<?= base_url('frontend/Javascript/NavBar.js')?>"></script>
        <link rel="stylesheet" href="<?= base_url('/frontend/CSS/Home.css')?>">
        <link rel="stylesheet" href="<?= base_url('/frontend/CSS/Header.css')?>">
        <link rel="stylesheet" href="<?= base_url('/frontend/CSS/Wrapper.css')?>">
        <link rel="stylesheet" href="<?= base_url('frontend/CSS/Detail.css')?>">
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
                <a href="<?php echo base_url()?>index.php/welcome/index" class="topnav1">Home</a>
                <a href="<?php echo base_url()?>index.php/welcome/siwikode" class="topnav1">Wisata Rekreasi</a>
                <a href="<?php echo base_url()?>index.php/welcome/wis_kul" class="topnav1">Wisata Kuliner</a>
                <a href="<?php echo base_url()?>index.php/welcome/reg_wis" class="topnav1">Registrasi</a>
                <a href="<?php echo base_url()?>index.php/login/login" class="topnav1" style="float: right;">Login</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>

        </div>

        <div class="Wrapper1">

          <div class="locate">
            <p>
              <a href="<?php echo base_url()?>index.php/welcome/index">Home</a>
              <i class='fas fa-caret-right'></i> 
              <a href="<?php echo base_url()?>index.php/welcome/siwikode">Wisata Rekreasi</a>
              <i class='fas fa-caret-right'></i> Kampung 99 Pepohonan
            </p>
          </div>

          <div class="Title1">Kampung 99 Pepohonan</div>
        </div>
    
        <div class="Wrapper2">
          <!--Galery-->
          <div class="Title-gallery">Gallery Foto</div>

          <div class="gallery-container">
            <div class="gallery-item"><img src="<?= base_url('frontend/Image/kampung/kampung1.jpg')?>"></div>
            <div class="gallery-item"><img src="<?= base_url('frontend/Image/kampung/kampung2.jpg')?>"></div>
            <div class="gallery-item"><img src="<?= base_url('frontend/Image/kampung/kampung3.jpg')?>"></div>  
            <div class="gallery-item"><img src="<?= base_url('frontend/Image/kampung/kampung4.jpg')?>"></div>
            <div class="gallery-item"><img src="<?= base_url('frontend/Image/kampung/kampung5.jpg')?>"></div>
            <div class="gallery-item"><img src="<?= base_url('frontend/Image/kampung/kampung6.jpg')?>"></div>   
          </div>
        </div>

        <div class="Wrapper3">
            <!--Deskripsi dan Map-->
            <div class="grid-container">

              <div class="item1">
                <div class="Title2">Deskripsi</div>
                <p> Mengusung konsep yang menyatu dengan alam menjadi destinasi wisata ini cocok digunakan sebagai tempat liburan Anda dengan keluarga.</p>

                <div class="Title2" style="margin-top: 50px;">Alamat</div>
                <p>Jl. KH. Muhasan II, Meruyung, Limo, Meruyung, Kec. Limo, Kota Depok, Jawa Barat 16515</p>
              </div>

              <div class="item2">
                <div class="Title2" style="margin-bottom: 20px;">Peta Lokasi
              </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.292415866523!2d106.7650754!3d-6.3845665!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1417a0b336117a8c!2sKampung%2099%20Pepohonan!5e0!3m2!1sid!2sid!4v1626055723228!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>
        </div>


        <div class="Wrapper1" style="margin-top: 20px;">  
            <div class="Title2" style="margin-left: 10px; margin-top: 10px;">Testimony dan Komentar</div>
            <div class="testimony-container">

              <div class="testimony-item">
                <div><b>Kevin</b> - Pejabat</div>
                <img src="<?= base_url('frontend/Image/Avatar1.png')?>">
                <div class="testimony-text">
                    <p>"Ada restoran, kolam renang, panggung musik serta peternakan sapi dan kambing"</p>
                </div>
              </div>

              <div class="testimony-item">
                <div><b>Julia</b> - Artis</div>
                <img src="<?= base_url('frontend/Image/Avatar3.png')?>">
                <div class="testimony-text">
                    <p>"Tempatnya keren..viewnya banyak dan bokeh semua untuk foto2 ,makanannya enak...pokoknya pas banget buat kumpul2 melepas letih, dan cari inspirasi..TOP pokoknya"</p>
                </div>
              </div>

              <div class="testimony-item">
                <div><b>Fikri</b> - Warga</div>
                <img src="<?= base_url('frontend/Image/Avatar2.jpg')?>">
                <div class="testimony-text">
                    <p>"Tempat yang teduh untuk ngobrol bareng teman atau keluarga, pepohonan di sekeliling membuat suasana tenang dan adem banget. Hanya saja sedikit susah diakses karena agak kedalam posisinya jauh dari jalan raya"</p>
                </div>
              </div>

            </div>
        </div>
        
    </body>

</html>