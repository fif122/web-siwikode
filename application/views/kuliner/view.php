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
                    <h1 class="h1 mb-3 text-center text-gray-800" style="margin-top:50px;">View Data Kuliner</h1>

                    <table class="sticky-footer">
                        <p>
                            <b>Nama</b></br>
                            <?=$kuliner->nama?></br></br>

                            <b>Deskripsi</b></br>
                            <?=$kuliner->deskripsi?></br></br>

                            <b>Jenis kuliner</b></br>
                            <?=$kuliner->nama_kuliner?></br></br>

                            <b>Fasilitas</b></br>
                            <?=$kuliner->fasilitas?></br></br>

                            <b>Bintang</b></br>
                            <?=$kuliner->bintang?></br></br>

                            <b>Kontak</b></br>
                            <?=$kuliner->kontak?></br></br>

                            <b>Alamat</b></br>
                            <?=$kuliner->alamat?></br></br>

                            <b>Latlong</b></br>
                            <?=$kuliner->latlong?></br></br>

                            <b>Email</b></br>
                            <?=$kuliner->email?></br></br>

                            <b>Link Website</b></br>
                            <?=$kuliner->web?></br></br>
                        </p>
                    </table> 
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