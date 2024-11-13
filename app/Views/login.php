<main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <span class="d-none d-lg-block">Login</span>
                </a>
              </div>
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>
                  <form class="row g-3 needs-validation" novalidate action="<?= base_url('home/aksi_login') ?>" method="POST">
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="Username" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="Password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <!-- Tambahkan reCAPTCHA di sini -->
                    <div class="col-12">
                      <div class="g-recaptcha" data-sitekey="6LcKiCAqAAAAACU6UvQWZGT_ekKQ-NZsZPvl1DWZ"></div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have an account? <a href="<?= base_url('home/signup') ?>">Create an account</a></p>
                    </div>
                  </form>
                </div>
              </div>
              <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- Script reCAPTCHA dan validasi -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('vendor/apexcharts/apexcharts.min.js')?>"></script>
  <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?= base_url('vendor/chart.js/chart.umd.js')?>"></script>
  <script src="<?= base_url('vendor/echarts/echarts.min.js')?>"></script>
  <script src="<?= base_url('vendor/quill/quill.min.js')?>"></script>
  <script src="<?= base_url('vendor/simple-datatables/simple-datatables.js')?>"></script>
  <script src="<?= base_url('vendor/tinymce/tinymce.min.js')?>"></script>
  <script src="<?= base_url('vendor/php-email-form/validate.js')?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('/js/main.js')?>"></script>

  <script>
    document.querySelector('form').addEventListener('submit', function(event) {
        var response = grecaptcha.getResponse();
        if (response.length === 0) {
            alert("Please complete the reCAPTCHA.");
            event.preventDefault();
        }
    });
  </script>
</body>

</html>
