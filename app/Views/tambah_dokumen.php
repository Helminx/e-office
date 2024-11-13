<main id="main" class="main">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Tambah Dokumen</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Dokumen</h5>

                        <!-- Form Tambah Dokumen -->
                        <form action="<?= base_url('home/aksi_t_dokumen') ?>" method="POST" enctype="multipart/form-data"> 
                            <div class="row mb-3">
                                <label for="file" class="col-sm-2 col-form-label">Pilih Dokumen</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="file" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="user" class="col-sm-2 col-form-label">User</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="user">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="penggugah" class="col-sm-2 col-form-label">Penggugah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="penggugah">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggal_dibuat" class="col-sm-2 col-form-label">Tanggal Dibuat</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tanggal_dibuat">
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
