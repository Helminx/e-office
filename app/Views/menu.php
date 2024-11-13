<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.html">E-Office</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.html"><img src="assets/img/Tinardo.JPEG" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?=base_url('home/tes')?>">Home</a></li>
          <?php
       if (session()->get('level')==1)
{
      ?>
          <li><a class="nav-link scrollto" href="<?=base_url('home/user')?>">User</a></li>
<?php
}else{

}
?>
 <?php
      if (session()->get('level')==1)
{
      ?>
<?php
}else{

}
?>            
          <?php
      if (session()->get('level')==1|| session()->get('level')==2)
{
      ?>
          <li><a class="nav-link scrollto" href="<?=base_url('home/kalendar')?>">Kalendar</a></li>
          <?php
}else{

}?>
           <?php
      if (session()->get('level')==1 || session()->get('level')==2)
{
      ?>
          <li><a class="nav-link scrollto" href="<?=base_url('home/dokumen')?>">Dokumen</a></li>
          <!--  <li><a class="nav-link scrollto" href="<//?=base_url('home/formulir')?>">Formulir</a></li> -->
           <?php
}else{

}?>
              <?php
      if ( session()->get('level')==1|| session()->get('level')==2)
{
      ?>
            <li><a class="nav-link scrollto" href="<?=base_url('home/absensi')?>">Absensi</a></li>
        <?php
}else{

}?>     
             
             <?php
      if (session()->get('level')==1 || session()->get('level')==2)
{
      ?>
          <li><a class="nav-link scrollto" href="<?=base_url('home/tugas')?>">Tugas</a></li>
          <!--  <li><a class="nav-link scrollto" href="<//?=base_url('home/formulir')?>">Formulir</a></li> -->
           <?php
}else{

}?>
          

          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="<?=base_url('home/laporan')?>">Laporan</a></li>
           <li><a href="<?=base_url('home/logout')?>">Logout</a></li>
            <!-- <li><a href="<?=base_url('home/signup')?>">Signup</a></li> -->
              
      </nav><!-- .navbar -->
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#53375c" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= session()->get('username')?></span>
          </a>
    </div>
  </header><!-- End Header -->

 

</main><!-- End #main -->

  
</body>