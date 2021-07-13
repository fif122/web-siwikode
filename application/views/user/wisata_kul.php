<!DOCTYPE html>
<html>

<head>
        <title>SIWIKODE - Wisata Kuliner</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script defer src="<?= base_url('frontend/Javascript/NavBar.js')?>"></script>
        <link rel="stylesheet" href="<?= base_url('/frontend/CSS/Home.css')?>">
        <link rel="stylesheet" href="<?= base_url('/frontend/CSS/Header.css')?>">
        <link rel="stylesheet" href="<?= base_url('/frontend/CSS/Wrapper.css')?>">
        <link rel="stylesheet" href="<?= base_url('frontend/CSS/Rekreasi.css')?>">
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
                <a href="<?php echo base_url()?>index.php/welcome/wis_kul" class="active"  class="topnav1">Wisata Kuliner</a>
                <a href="<?php echo base_url()?>index.php/welcome/reg_wis" class="topnav1">Registrasi</a>
                <a href="<?php echo base_url()?>index.php/login/login" class="topnav1" style="float: right;">Login</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>

        <!--Content-->
        <div class="Wrapper1">

            <div class="Title1">Daftar Wisata Kuliner</div>

            <div class="content-container">
                <div class="item1">
                    <div class="Title2">Lapis Martabak</div>
                    <img src="<?= base_url(''); ?>/frontend/Image/Martabak/Martabak1.jpg">
                    <div class="text1">
                        <p>Menjual berbagai rasa dan variasi martabak. Di Indonesia ada dua jenis martabak, yaitu martabak asin/telur yang terbuat dari campuran telur dan daging serta martabak manis, yang biasanya di isi coklat dan keju. Berbeda dengan martabak telur, martabak manis adalah sejenis kue atau roti isi selai yang biasa dapat dimakan sebagai cemilan atau makan kenyang. </p>
                    </div>
                    <a href="<?php echo base_url()?>index.php/welcome/det_martabak"><button>Detail</button></a>
                </div>

                <div class="item2">
                    <div class="Title2">Aroma Soto</div>
                    <img src="<?= base_url('frontend/Image/Soto.jpg')?>">
                    <div class="text2">
                        <p>Makanan khas Indonesia yang terbuat dari kaldu daging dan sayuran. Kaldu yang digunakan adalah daging ayam atau sapi</p>
                    </div>
                    <a href="<?php echo base_url()?>index.php/welcome/det_soto"><button>Detail</button></a>
                </div>

                <div class="item3">
                    <div class="Title2">Aroma Kue</div>
                    <img src="<?= base_url('frontend/Image/Bolu.jpg')?>">
                    <div class="text2">
                        <p>Menjual berbagai macam jenis kue. Mulai dari bolu hingga roti</p>
                    </div>
                    <a href="<?php echo base_url()?>index.php/welcome/det_kue"><button>Detail</button></a>
                    
                </div>
            </div>

        </div>

        
        
    </body>

</html>