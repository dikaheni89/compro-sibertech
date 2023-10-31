<div class="theme-inner-banner">
  <div class="container">
    <h2 class="intro-title text-center"><?= $title ?></h2>
    <ul class="page-breadcrumb style-none d-flex justify-content-center">
      <li><a href="<?= base_url() ?>">Home</a></li>
      <li class="current-page"><?= $title ?></li>
    </ul>
  </div>
</div>

<div class="team-section-two mt-110 mb-160 lg-mt-60 lg-mb-100">
  <div class="container">
    <div class="row">
      <?php foreach ($staff as $staff) { ?>
        <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up">
          <div class="team-block-one tran3s mt-50">
            <div class="img-meta">
              <?php if ($staff['gambar'] === '') {  ?>
                <img src="<?= icon() ?>" class="w-100" alt="<?= $staff['nama'] ?>">
              <?php } else { ?>
                <img src="<?= base_url('assets/upload/staff/' . $staff['gambar']) ?>" class="w-100" alt="<?= $staff['nama'] ?>">
              <?php } ?>
            </div>
            <a href="team-details.html" class="team-info">
              <span class="designation-text"><?= $staff['jabatan'] ?></span>
              <span class="name tran3s"><?= $staff['nama'] ?></span>
            </a>
          </div> <!-- /.team-block-one -->
        </div>
      <?php } ?>
    </div>
  </div>
</div>