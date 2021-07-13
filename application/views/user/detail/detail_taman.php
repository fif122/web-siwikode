<!DOCTYPE html>
<html>

<head>
        <title>SIWIKODE - Taman Herbal Insani</title>
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
                <a href="<?php echo base_url()?>index.php/welcome/siwikode" class="topnav1" >Wisata Rekreasi</a>
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
              <i class='fas fa-caret-right'></i> Taman Herbal Insani
            </p>
          </div>

          <div class="Title1">Taman Herbal Insani</div>
        </div>
    
        <div class="Wrapper2">
          <!--Galery-->
          <div class="Title-gallery">Gallery Foto</div>

          <div class="gallery-container">
            <div class="gallery-item"><img src="<?= base_url('frontend/Image/Taman/taman1.jpg')?>"></div>
            <div class="gallery-item"><img src="<?= base_url('frontend/Image/Taman/taman2.jpg')?>"></div>
            <div class="gallery-item"><img src="<?= base_url('frontend/Image/Taman/taman3.jpg')?>"></div>  
            <div class="gallery-item"><img src="<?= base_url('frontend/Image/Taman/taman4.jpg')?>"></div>
            <div class="gallery-item"><img src="<?= base_url('frontend/Image/Taman/taman5.jpg')?>"></div>
            <div class="gallery-item"><img src="<?= base_url('frontend/Image/Taman/taman6.jpg')?>"></div>   
          </div>
        </div>

        <div class="Wrapper3">
            <!--Deskripsi dan Map-->
            <div class="grid-container">

              <div class="item1">
                <div class="Title2">Deskripsi</div>
                <p> Taman Herbal Insani merupakan tempat rekreasi alam terbuka sekaligus edukasi tanaman obat</p>

                <div class="Title2" style="margin-top: 50px;">Alamat</div>
                <p> Jalan Kampung Kandang No.26, Duren Seribu, Bojongsari, Depok City, West Java 16518</p>
              </div>

              <div class="item2">
                <div class="Title2" style="margin-bottom: 20px;">Peta Lokasi
              </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6980390253807!2d106.73898151477017!3d-6.432820695345867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6f1df582e9ac5b36!2sTaman%20Herbal%20Insani%20-%20Official%20Account!5e0!3m2!1sid!2sid!4v1626057014491!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>
        </div>


        <div class="Wrapper1" style="margin-top: 20px;">  
            <div class="Title2" style="margin-left: 10px; margin-top: 10px;">Testimony dan Komentar</div>
            <div class="testimony-container">

              <div class="testimony-item">
                <div><b>Kevin</b> - Pejabat</div>
                <img src="<?= base_url('frontend/Image/Avatar1.png')?>">
                <div class="testimony-text">
                <p>"Seruu n puas bgt dh, pas buat liburan keluarga... Pokoknya ngga bakal nyesel dh klw berkunjung kesini, fasilitas ada semua dsini permainan buat anak2 jg seruu"</p>
                </div>
              </div>

              <div class="testimony-item">
                <div><b>Julia</b> - Artis</div>
                <img src="<?= base_url('frontend/Image/Avatar3.png')?>">
                <div class="testimony-text">
                <p>"Suka sekali maen ke taman wisata herbal insani .. cocok untuk anak anak dan keluarga ..
                        Tempat nya nyaman bersih dan hijau ..
                        Tiket masuk terjangkau
                        Keluarga senang...
                        "</p>
                </div>
              </div>

              <div class="testimony-item">
                <div><b>Fikri</b> - Warga</div>
                <img src="<?= base_url('frontend/Image/Avatar2.jpg')?>">
                <div class="testimony-text">
                <p>"Tamannya bagus,bersih,sejuk..
                        Tapi sayangnya akses masuk bis masih sangat susah.kami harus turun di parkiran bis yg jauh dari pintu masuk ke taman."</p>
                </div>
              </div>

            </div>
        </div>
        
    </body>

</html>