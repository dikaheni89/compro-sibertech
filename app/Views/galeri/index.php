<div class="theme-inner-banner">
  <div class="container">
    <h2 class="intro-title text-center"><?= $title ?></h2>
    <ul class="page-breadcrumb style-none d-flex justify-content-center">
      <li><a href="<?= base_url() ?>">Home</a></li>
      <li class="current-page"><?= $title ?></li>
    </ul>
  </div>
</div>

<div class="portfolio-gallery-three mt-140 mb-150 lg-mt-90 lg-mb-100">
  <div class="container">
    <div id="isotop-gallery-wrapper" class="grid-3column">
      <div class="grid-sizer"></div>
        <?php foreach ($galeri as $galeri) { ?>
          <div class="isotop-item">
            <div class="portfolio-block-one mt-40 xs-mt-30">
              <div class="img-meta"><img src="<?= base_url('assets/upload/image/' . $galeri['gambar']) ?>" alt="" class="w-100"></div>
              <div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox="" title="Click for large view" href="<?= base_url('assets/upload/image/' . $galeri['gambar']) ?>" tabindex="0"><i class="bi bi-plus"></i></a></div>
            </div> <!-- /.portfolio-block-one -->
          </div> <!-- /.item -->
        <?php } ?>
    </div>
  </div>
</div>