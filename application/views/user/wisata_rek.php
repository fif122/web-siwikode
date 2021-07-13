<!DOCTYPE html>
<html>

<head>
        <title>SIWIKODE - Wisata Rekreasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script defer src="<?= base_url('frontend/Javascript/NavBar.js')?>"></script>
        <link rel="stylesheet" href="<?= base_url('frontend/CSS/Home.css')?>">
        <link rel="stylesheet" href="<?= base_url('frontend/CSS/Header.css')?>">
        <link rel="stylesheet" href="<?= base_url('frontend/CSS/Wrapper.css')?>">
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
                <a href="<?php echo base_url()?>index.php/welcome/siwikode" class="active"  class="topnav1">Wisata Rekreasi</a>
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

            <div class="Title1">Daftar Wisata Rekreasi</div>

            <div class="content-container">
                <div class="item1">
                    <div class="Title2x">Masjid Kubah Emas</div>
                    <img  src="<?= base_url('frontend/Image/Masjid/Masjid1.jpg')?>">
                    <div class="text1">
                        <p>Masjid Dian Al Mahri dikenal juga dengan nama Masjid Kubah Emas adalah sebuah masjid yang dibangun di tepi jalan Raya Meruyung, Limo, Depok di Kecamatan Limo, Depok. Masjid ini selain sebagai menjadi tempat ibadah salat bagi umat muslim sehari-hari, kompleks masjid ini juga menjadi kawasan wisata keluarga dan menarik perhatian banyak orang karena kubah-kubahnya yang dibuat dari emas. Selain itu karena luasnya area yang ada dan bebas diakses untuk umum, sehingga tempat ini sering menjadi tujuan liburan keluarga atau hanya sekadar dijadikan tempat beristirahat.  </p>
                    </div>
                    <a href="<?php echo base_url()?>index.php/welcome/det_masjid"><button>Detail</button></a>
                </div>

                <div class="item2">
                    <div class="Title2">Kampung 99 Pepohonan</div>
                    <img src="<?= base_url('frontend/Image/99.jpg')?>">
                    <div class="text2">
                        <p>Mengusung konsep yang menyatu dengan alam menjadi destinasi wisata ini cocok digunakan sebagai tempat liburan Anda dengan keluarga.</p>
                    </div>
                    <a href="<?php echo base_url()?>index.php/welcome/det_kampung"><button>Detail</button></a>
                </div>

                <div class="item3">
                    <div class="Title2">Taman Herbal Insani Depok</div>
                    <img src="<?= base_url('frontend/Image/Taman.jpg')?>">
                    <div class="text2">
                        <p>Taman Herbal Insani merupakan tempat rekreasi alam terbuka sekaligus edukasi tanaman obat.</p>
                    </div>
                    <a href="<?php echo base_url()?>index.php/welcome/det_taman"><button>Detail</button></a>
                    
                </div>
            </div>

        </div>

</div>
</div>

        
    </body>

</html>
