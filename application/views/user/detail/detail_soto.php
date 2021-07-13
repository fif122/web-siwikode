<!DOCTYPE html>
<html>

<head>
        <title>SIWIKODE - Aroma Soto</title>
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
                <a href="<?php echo base_url()?>index.php/welcome/wis_kul"  class="topnav1">Wisata Kuliner</a>
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
              <a href="<?php echo base_url()?>index.php/welcome/wis_kul">Wisata Kuliner</a>
              <i class='fas fa-caret-right'></i> Aroma Soto
            </p>
          </div>

          <div class="Title1">Aroma Soto</div>
        </div>
    
        <div class="Wrapper2">
          <!--Galery-->
          <div class="Title-gallery">Gallery Foto</div>

          <div class="gallery-container">
            <div class="gallery-item"><img src="<?= base_url('frontend/Image/Soto/1.jpg')?>"></div>
            <div class="gallery-item"><img src="<?= base_url('frontend/Image/Soto/2.jpg')?>"></div>
            <div class="gallery-item"><img src="<?= base_url('frontend/Image/Soto/3.jpg')?>"></div>  
            <div class="gallery-item"><img src="<?= base_url('frontend/Image/Soto/4.jpg')?>"></div>
            <div class="gallery-item"><img src="<?= base_url('frontend/Image/Soto/5.jpg')?>"></div>
            <div class="gallery-item"><img src="<?= base_url('frontend/Image/Soto/6.jpg')?>"></div>   
          </div>
        </div>

        <div class="Wrapper3">
            <!--Deskripsi dan Map-->
            <div class="grid-container">

              <div class="item1">
                <div class="Title2">Deskripsi</div>
                <p>Makanan khas Indonesia yang terbuat dari kaldu daging dan sayuran. Kaldu yang digunakan adalah daging ayam atau sapi
                    Dengan cita rasa Nusantara yang khas dan nyaman dengan lidah orang Indonesia. </p>

                <div class="Title2" style="margin-top: 50px;">Alamat</div>
                <p>Kota Depok</p>
              </div>

              <div class="item2">
                <div class="Title2" style="margin-bottom: 20px;">Peta Lokasi</div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1706435.3027382614!2d106.59302613522455!3d-6.58630775657082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e95620a297d3%3A0x1cfd4042316fb217!2sDepok%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1611540768553!5m2!1sen!2sid" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>

            </div>
        </div>


        <div class="Wrapper1" style="margin-top: 20px;">  
            <div class="Title2" style="margin-left: 10px; margin-top: 10px;">Testimony dan Komentar</div>
            <div class="testimony-container">

              <div class="testimony-item">
                <div><b>Kevin</b> - Pejabat</div>
                <img src="<?= base_url('frontend/Image/Avatar1.png')?>">
                <div class="testimony-text">
                    <p>".Kuah santen yg kentel, daging yg empuk dan rasa yg gurih.. pas banget di tambah sambal pedas."</p>
                </div>
              </div>

              <div class="testimony-item">
                <div><b>Julia</b> - Artis</div>
                <img src="<?= base_url('frontend/Image/Avatar3.png')?>">
                <div class="testimony-text">
                <p>" Soal rasa cukup konsistem sejak dulu.. isian soto nya banyak ada daging, paru, dan jeroan.. dilengkapi dengan emping dan acar"</p>
                </div>
              </div>

              <div class="testimony-item">
                <div><b>Fikri</b> - Warga</div>
                <img src="<?= base_url('frontend/Image/Avatar2.jpg')?>">
                <div class="testimony-text">
                <p>" kuah nya segar dan gurih, mie nya juga kenyal dan tidak keras. Untuk potongan ayam nya kecil kecil jadi mudah di makan dengan nasi soto nya."</p>
                </div>
              </div>

            </div>
        </div>
        
    </body>

</html>