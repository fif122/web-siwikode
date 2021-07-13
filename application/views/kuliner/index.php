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
                    <h1 class="h1 mb-4 text-center text-gray-800" style="margin-top:50px;">Data kuliner</h1>
                    <a href="<?php echo base_url()?>index.php/kuliner/save" class="btn" style="color:white; background-color:#6EB6FF">Tambah</a>

                    <table class="table table-striped" style="margin-top:10px;">
                        <thead class="bg text-white" style="background-color:#6EB6FF">
                            <tr>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Jenis kuliner</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tboady>
                            <?php
                                foreach($kuliner->result() as $kuliner){
                                    echo'
                                    <tr>
                                        <td>'.$kuliner->nama.'</td>
                                        <td>'.$kuliner->deskripsi.'</td>
                                        <td>'.$kuliner->nama_kuliner.'</td>

                                        <td>
                                            <a href="'.base_url().'index.php/kuliner/view/'.$kuliner->id.'">View</a>
                                            <a href="'.base_url().'index.php/kuliner/edit/'.$kuliner->id.'" style="margin-left:10px;">Edit</a>
                                            <a href="'.base_url().'index.php/kuliner/delete/'.$kuliner->id.'" style="margin-left:10px;">Delete</a>
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
        
        <?php $this->load->view('include/logout_modal');?>

    </div>

</body>

</html>