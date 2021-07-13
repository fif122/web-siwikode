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
                    <h1 class="h1 mb-4 text-center text-gray-800" style="margin-top:50px;">Edit Jenis Kuliner</h1>
                    <?php echo form_open_multipart('jkuliner/update'); ?>

                        <input type="hidden" name="id" class="form-control" value="<?= $jkuliner->id?>">

                        <labe; for="">Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?= $jkuliner->nama?>">

                        <button type="submit" class="btn" style="margin-top:10px; color:white; background-color:#6EB6FF;">Edit</button>
                        
                    </form>
                    
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