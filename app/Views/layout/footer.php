<?php use App\Models\Konfigurasi_model;

$konfigurasi = new Konfigurasi_model();
$site        = $konfigurasi->listing();
// Menu
use App\Models\Menu_model;

$menu         = new Menu_model();
$site         = $konfigurasi->listing();
$menu_berita  = $menu->berita();
$menu_profil  = $menu->profil();
$menu_layanan = $menu->layanan();
?>
<!-- ======= Footer ======= -->
    <div class="footer-style-four theme-basic-footer">
        <div class="container">
          <div class="inner-wrapper">
            <div class="row">
              <div class="col-lg-4 footer-intro mb-40">
                <div class="logo"><a href="#"><img src="<?= base_url('assets/upload/image/' . $site['logo']) ?>" alt="" width="130"></a></div>
                <p>
                  <?= nl2br(strip_tags($site['alamat'])) ?>
                  <br>
                  <strong>Phone:</strong> <?= $site['telepon'] ?><br>
                  <strong>Email:</strong> <?= $site['email'] ?><br>
                </p>
                <ul class="d-flex social-icon style-none">
                  <li><a href="<?= $site['facebook'] ?>"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="<?= $site['twitter'] ?>"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="<?= $site['instagram'] ?>"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
              <div class="col-lg-2 col-sm-4 ms-auto mb-30">
                <h5 class="footer-title">About Us</h5>
                <ul class="footer-nav-link style-none">
                <?php foreach ($menu_profil as $menu_profil) { ?>
                <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('berita/profil/' . $menu_profil['slug_berita']) ?>"><?= $menu_profil['judul_berita'] ?></a></li>
                <?php } ?>
                <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('staff') ?>">Staff &amp; Team Kami</a></li>
                </ul>
              </div>
              <div class="col-lg-3 col-sm-4 mb-30">
                <h5 class="footer-title">Our Services</h5>
                <ul class="footer-nav-link style-none">
                  <?php foreach ($menu_layanan as $menu_layanan) { ?>
                    <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('berita/layanan/' . $menu_layanan['slug_berita']) ?>"><?= $menu_layanan['judul_berita'] ?></a></li>
                  <?php } ?>
                </ul>
              </div>
              <div class="col-xl-2 col-lg-3 col-sm-4 mb-30">
                <h5 class="footer-title">Find Us on Map</h5>
                <style type="text/css" media="screen">
                  iframe {
                    width: 100%;
                    height: 200px;
                  }
                </style>
                <?= $site['google_map'] ?>
              </div>
            </div>

            <div class="bottom-footer">
              <div class="d-lg-flex justify-content-between align-items-center">
                <ul class="order-lg-1 pb-15 d-flex justify-content-center footer-nav style-none">
                  <li><a href="faq.html">Privacy &amp; Terms.</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                  <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
                <p class="copyright text-center order-lg-0 pb-15">Copyright @<?php ('Y'); ?> Sibernet.</p>
              </div>
            </div>
          </div> <!-- /.inner-wrapper -->
        </div>
    </div> <!-- /.footer-style-four -->


      <button class="scroll-top">
        <i class="bi bi-arrow-up-short"></i>
      </button>
      
      <script src="<?= base_url() ?>/assets/frontend/vendor/jquery.min.js"></script>
      <!-- Bootstrap JS -->
      <script src="<?= base_url() ?>/assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AOS js -->
      <script src="<?= base_url() ?>/assets/frontend/vendor/aos-next/dist/aos.js"></script>
      <!-- Slick Slider -->
      <script src="<?= base_url() ?>/assets/frontend/vendor/slick/slick.min.js"></script>
      <!-- js Counter -->
      <script src="<?= base_url() ?>/assets/frontend/vendor/jquery.counterup.min.js"></script>
      <script src="<?= base_url() ?>/assets/frontend/vendor/jquery.waypoints.min.js"></script>
      <!-- Fancybox -->
      <script src="<?= base_url() ?>/assets/frontend/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
      <script  src="<?= base_url() ?>/assets/frontend/vendor/isotope.pkgd.min.js"></script>

      <!-- Theme js -->
      <script src="<?= base_url() ?>/assets/frontend/js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>