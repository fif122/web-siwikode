<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#7098DA">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-text mx-3" style="margin-top:40px;"> Website SIWIKODE</div>
</a>

<!-- Divider -->
<hr>
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('index.php/Welcome/hello')?>">
        <i class="fas fa-home" style="color:white;"></i>
        <span>Home</span></a>
</li>

<hr class="sidebar-divider">

<!-- Wisata -->
<div class="sidebar-heading"> WISATA </div>
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('index.php/wisata/index')?>">
        <i class="fas fa-book-open" style="color:white;"></i>
        <span>Data Wisata</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('index.php/jwisata/index')?>">
        <i class="fas fa-book-open" style="color:white;"></i>
        <span>Jenis Wisata</span>
    </a>
</li>

<!-- Kuliner -->
<hr class="sidebar-divider d-none d-md-block">
<div class="sidebar-heading"> KULINER </div>
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('index.php/kuliner/index')?>">
        <i class="fas fa-book-open" style="color:white;"></i>
        <span>Data Kuliner</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('index.php/jkuliner/index')?>">
        <i class="fas fa-book-open" style="color:white;"></i>
        <span>Jenis Kuliner</span>
    </a>
</li>

<!-- Testimoni -->
<hr class="sidebar-divider d-none d-md-block">
<div class="sidebar-heading"> TESTIMONI </div>
<li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-comment-alt" style="color:white;"></i>
        <span>Testimoni</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-id-badge" style="color:white;"></i></i>
        <span>Profesi</span>
    </a>
</li>

<hr class="sidebar-divider d-none d-md-block">


<!-- Divider -->

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->