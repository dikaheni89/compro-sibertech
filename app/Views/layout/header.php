<?php use App\Models\Konfigurasi_model;
use App\Models\Menu_model;

$konfigurasi  = new Konfigurasi_model();
$menu         = new Menu_model();
$site         = $konfigurasi->listing();
$menu_berita  = $menu->berita();
$menu_profil  = $menu->profil();
$menu_layanan = $menu->layanan();
?>
      <section>
				<div id="preloader">
					<div id="ctn-preloader" class="ctn-preloader">
						<div class="animation-preloader">
							<div class="icon"><img src="<?= base_url('assets/upload/image/' . $site['logo']) ?>" alt="<?= $site['namaweb'] ?>" class="m-auto d-block" width="38"></div>
							<div class="txt-loading mt-2">
								<span data-text-preloader="S" class="letters-loading">
									S
								</span>
								<span data-text-preloader="I" class="letters-loading">
									I
								</span>
								<span data-text-preloader="B" class="letters-loading">
									B
								</span>
								<span data-text-preloader="E" class="letters-loading">
									E
								</span>
								<span data-text-preloader="R" class="letters-loading">
									R
								</span>
                <span data-text-preloader="N" class="letters-loading">
									N
								</span>
                <span data-text-preloader="E" class="letters-loading">
									E
								</span>
                <span data-text-preloader="T" class="letters-loading">
									T
								</span>
							</div>
						</div>	
					</div>
				</div>
			</section>
    <!-- ===== Header ===== -->
    <header class="theme-main-menu sticky-menu theme-menu-four">
      <div class="inner-content">
        <div class="d-flex align-items-center">
          <div class="logo order-lg-0"><a href="<?= base_url() ?>" class="d-block"><img src="<?= base_url('assets/upload/image/' . $site['logo']) ?>" alt="<?= $site['namaweb'] ?>" width="100"></a></div>

          <div class="right-widget d-flex align-items-center ms-auto order-lg-3">
            <div class="call-button d-none d-xl-block me-5">Call us <a href="#"><?= telepon() ?></a></div>
          </div> <!-- /.right-widget -->

          <nav class="navbar navbar-expand-lg order-lg-2">
            <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
            </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="d-block d-lg-none"><div class="logo"><a href="<?= base_url() ?>"><img src="<?= base_url('assets/upload/image/' . $site['logo']) ?>" alt="<?= $site['namaweb'] ?>" width="130"></a></div></li>
                    <li class="nav-item active dropdown">
                      <a class="nav-link" href="<?= base_url('') ?>" role="button">Home</a>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Profil</a>
                        <ul class="dropdown-menu">
                        <?php foreach ($menu_profil as $menu_profil) { ?>
                          <li><a href="<?= base_url('berita/profil/' . $menu_profil['slug_berita']) ?>" class="dropdown-item"><?= $menu_profil['judul_berita'] ?></a></li>
                        <?php } ?>
                        <li><a href="<?= base_url('staff') ?>" class="dropdown-item">Our Team</a></li>
                        </ul>
                      </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Berita</a>
                        <ul class="dropdown-menu">
                          <?php foreach ($menu_berita as $menu_berita) { ?>
                            <li><a href="<?= base_url('berita/kategori/' . $menu_berita['slug_kategori']) ?>" class="dropdown-item"><?= $menu_berita['nama_kategori'] ?></a></li>
                          <?php } ?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Layanan</a>
                        <ul class="dropdown-menu">
                          <?php foreach ($menu_layanan as $menu_layanan) { ?>
                            <li><a href="<?= base_url('berita/layanan/' . $menu_layanan['slug_berita']) ?>" class="dropdown-item"><?= $menu_layanan['judul_berita'] ?></a></li>
                          <?php } ?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Galeri &amp; Video</a>
                        <ul class="dropdown-menu">
                          <li><a href="<?= base_url('galeri') ?>" class="dropdown-item">Galeri Gambar</a></li>
                          <li><a href="<?= base_url('video') ?>" class="dropdown-item">Galeri Video</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('download') ?>" role="button">Download</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('kontak') ?>" role="button">Kontak</a>
                    </li>
                </ul>
                <!-- Mobile Content -->
                <div class="mobile-content d-block d-lg-none">
                  <div class="d-flex flex-column align-items-center justify-content-center mt-70">
                    <div class="call-button">Call us <a href="#"><?= telepon() ?></a></div>
                  </div>
                </div> <!-- /.mobile-content -->
              </div>
          </nav>
        </div>
      </div> <!-- /.inner-content -->
    </header>