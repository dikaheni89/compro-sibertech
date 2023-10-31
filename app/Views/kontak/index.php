<div class="theme-inner-banner">
  <div class="container">
    <h2 class="intro-title text-center"><?= $title ?></h2>
    <ul class="page-breadcrumb style-none d-flex justify-content-center">
      <li><a href="<?= base_url() ?>">Home</a></li>
      <li class="current-page"><?= $title ?></li>
    </ul>
  </div>
</div>

<div class="contact-section-one mb-170 lg-mb-120">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="address-block-two text-center mb-40 sm-mb-20">
          <div class="icon d-flex align-items-center justify-content-center m-auto"><img src="<?= base_url() ?>/assets/frontend/images/icon/icon_17.svg" alt=""></div>
          <h5 class="title">Our Address</h5>
          <p><?= nl2br($konfigurasi['alamat']) ?></p>
        </div> <!-- /.address-block-two -->
      </div>
      <div class="col-md-4">
        <div class="address-block-two text-center mb-40 sm-mb-20">
          <div class="icon d-flex align-items-center justify-content-center m-auto"><img src="<?= base_url() ?>/assets/frontend/images/icon/icon_18.svg" alt=""></div>
          <h5 class="title">Contact Email</h5>
          <p><?= nl2br($konfigurasi['email']) ?></p>
        </div> <!-- /.address-block-two -->
      </div>
      <div class="col-md-4">
        <div class="address-block-two text-center mb-40 sm-mb-20">
          <div class="icon d-flex align-items-center justify-content-center m-auto"><img src="<?= base_url() ?>/assets/frontend/images/icon/icon_19.svg" alt=""></div>
          <h5 class="title">Live Support</h5>
          <p><?= nl2br($konfigurasi['telepon']) ?></p>
        </div> <!-- /.address-block-two -->
      </div>
    </div>
  </div>

  <div class="mt-100 lg-mt-70">
    <div class="container">
      <div class="row gx-xxl-5">
        <div class="col-lg-12 d-flex order-lg-first">
          <div class="map-area-one mt-10 me-lg-4 md-mt-50">
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe class="gmap_iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15856.873013454833!2d105.7961544!3d-6.4940273!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4235ce19f0bc69%3A0x322eb5dd1c2c40b6!2sSIBERNET!5e0!3m2!1sid!2sid!4v1698723854750!5m2!1sid!2sid" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
              </div>
            </div>
          </div> <!-- /.map-area-one -->
        </div>
      </div>
    </div>
  </div>
</div>