<!DOCTYPE html>
<html>

<head>
        <title>SIWIKODE - Registrasi Wisata</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script defer src="<?= base_url('frontend/Javascript/NavBar.js')?>"></script>
        <link rel="stylesheet" href="<?= base_url('frontend/CSS/Home.css')?>">
        <link rel="stylesheet" href="<?= base_url('frontend/CSS/Header.css')?>">
        <link rel="stylesheet" href="<?= base_url('frontend/CSS/Wrapper.css')?>">
        <link rel="stylesheet" href="<?= base_url('frontend/CSS/Registrasi.css')?>">
    </head>

    <body style="background-color: #F0F5F8; font-family: Arial, Helvetica;">

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
                <a href="<?php echo base_url()?>index.php/welcome/reg_wis" class="active"  class="topnav1">Registrasi</a>
                <a href="<?php echo base_url()?>index.php/login/login" class="topnav1" style="float: right;">Login</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
                </a>
            </div>
            </div>
        </div>

        <!--Bagian Content-->
        
        <div class="Wrapper1" style="margin-bottom: 20px;">

            <div class="tombol">
                <button class="button2"><a href="<?php echo base_url()?>index.php/welcome/reg_wis">Wisata</a></button>
                <button class="button1"><a href="<?php echo base_url()?>index.php/welcome/reg_kul">Kuliner</a></button>
            </div>

            <div class="Title1">Form Registrasi Tempat Rekreasi Wisata</div>

            <form action="/action_page.php">
                <div class="Box">
                    <label for="fname">Nama Tempat Wisata</label>
                    <input type="text" placeholder="">
                </div>

                <div class="Box">
                    <label for="country">Jenis Wisata</label>
                    <select id="country" name="country">
                    <option value="australia">Taman</option>
                    <option value="canada">Alam</option>
                    <option value="usa">Kolam Berenang</option>
                    </select>
                </div>

                <div class="Box">
                    <label for="fname">Deskripsi Wisata</label>
                    <textarea name="" rows="4" cols="30"></textarea>
                </div>

                <div class="Box">
                    <label for="fname">Kontak Person</label>
                    <input type="text" placeholder="">
                </div>

                <div class="Box">
                    <label for="fname">No Telpon</label>
                    <input type="text" placeholder="">
                </div>

                <div class="Box">
                    <label for="fname">Email</label>
                    <input type="text" placeholder="">
                </div>

                <div class="Box">
                    <label for="fname">Alamat Web</label>
                    <input type="text" placeholder="">
                </div>

                <div class="Box">
                    <label for="fname">Alamat Lengkap</label>
                    <input type="text" placeholder="">
                </div>

                <div class="Box">
                    <label for="fname">Latitude, Longitude</label>
                    <input type="text" placeholder="">
                </div>

                <div style="padding: 30px;">
                    <button class="button1"><a href="">Daftar</a></button>
                    <button class="button1"><a href="">Batal</a></button>
                </div>
              
            </form>

        </div>

    </body>
</html>