<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
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
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form action="<?= base_url('home/aksi_e_tugas') ?>" method="POST"> 
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul" value="<?= $satu->judul ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Deskripsi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="deskripsi" value="<?= $satu->deskripsi ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">User</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="user" value="<?= $satu->user ?>">
                  </div>
                </div>
                  <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Status Tugas</label>
                  <div class="col-sm-10">
                  <select  type="select" class="form-control" name="status_tugas" id="status_tugas" placeholder="Enter level" name="level" >
                   <option value="volvo">Pilih Status</option>
                   <option value="tuntas">Tuntas</option>
                    <option value="tidak_tuntas">Tidak Tuntas</option>
                 </select> 
                 
                  </div>
                </div>
                 
                 
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>
                    <input type="hidden" name="id" value="<?= $satu->id_tugas ?>">

              </form><!-- End General Form Elements -->
