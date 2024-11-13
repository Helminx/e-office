<main id="main" class="main">

    <div class="pagetitle">
    
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Kalendar</h5>

              <!-- General Form Elements -->
              <form action="<?= base_url('home/aksi_t_kalendar') ?>" method="POST"> 
                 <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Acara</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="acara">
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Deskripsi Acara</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="deskripsi_acara">
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_mulai">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Pembuat Acara</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pembuat_acara">
                  </div>
                </div>
                
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

         