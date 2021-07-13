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
                    <h1 class="h1 mb-4 text-center text-gray-800" style="margin-top:50px;">Jenis Wisata</h1>
                    <a href="<?php echo base_url()?>index.php/jwisata/save" class="btn" style="background-color:#6EB6FF; color:white;">Tambah</a>

                    <table class="table table-striped" style="margin-top:10px;">
                        <thead class="bg" style="background-color:#6EB6FF; color:white;">
                            <tr>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tboady>
                            <?php
                                foreach($jwisata->result() as $wisata){
                                    echo'
                                    <tr>
                                        <td>'.$wisata->nama.'</td>

                                        <td>
                                            <a href="'.base_url().'index.php/jwisata/view/'.$wisata->id.'">View</a>
                                            <a href="'.base_url().'index.php/jwisata/edit/'.$wisata->id.'" style="margin-left:10px;">Edit</a>
                                            <a href="'.base_url().'index.php/jwisata/delete/'.$wisata->id.'" style="margin-left:10px;">Delete</a>
                                        </td>

                                    </tr>
                                ';}
                            ?>
                        </tbody>
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