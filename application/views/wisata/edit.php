<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('include/head');?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <?php $this->load->view('include/sidebar');?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <?php $this->load->view('include/navbar');?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                   <!-- Page Heading -->
                   <h1 class="h1 mb-4 text-center text-gray-800" style="margin-top:50px;">Edit Data Wisata</h1>
                    <?php echo form_open_multipart('wisata/update'); ?>

                    <input type="hidden" name="id" class="form-control" value="<?= $wisata->id?>">

                    <labe; for="">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $wisata->nama?>">

                    </br>
                    <label; for="" >Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"id="" cols="30" rows="10"><?= $wisata->deskripsi?></textarea>

                        </br>

                    <label; for="">Jenis Wisata</label>
                    <select name="jenis_wisata_id" id="" class="form-control" value="<?= $wisata->jenis_wisata_id?>">
                    <?php
                        foreach($jwisata->result() as $jwisata){
                            if ($jwisata->id ==$wisata->jenis_wisata_id ){
                                echo'<option selected value="'.$jwisata->id.'"> '. $jwisata->nama.'</option>       
                                ';
                            }   
                            else{
                                echo'<option value="'.$jwisata->id.'"> '. $jwisata->nama.'</option>';
                            }   
                        }
                    ?>
                    </select>
                        
                    </br>
                    <label; for="">Fasilitas</label>
                    <input type="text" name="fasilitas" class="form-control" value="<?= $wisata->fasilitas?>">

                    </br>
                    <label; for="" >Bintang</label>
                    <input type="number" name="bintang" class="form-control" value="<?= $wisata->bintang?>">
                        
                    </br>
                    <label; for="">Kontak</label>
                    <input type="text" name="kontak" class="form-control" value="<?= $wisata->kontak?>">

                    </br>
                    <label; for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?= $wisata->alamat?>">

                    </br>
                    <label; for="">Latlong</label>
                    <input type="text" name="latlong" class="form-control" value="<?= $wisata->latlong?>">

                    <br>
                    <label; for="">Email</label>
                    <input type="text" name="email" class="form-control" value="<?= $wisata->email?>">

                    <br>
                    <label; for="">Website</label>
                    <input type="text" name="web" class="form-control" value="<?= $wisata->web?>">

                    <button type="submit" class="btn" style="margin-top:10px; color:white; background-color:#6EB6FF;">Edit</button>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php $this->load->view('include/logout_modal');?>

</body>

</html>