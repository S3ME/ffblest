<?= $this->extend('layout') ?>

<?= $this->section('main') ?>
    <style>
        #page\#0 .el-image{max-width: 48vw;}
        #page\#1 .el-image{max-width: 43vw;}
    </style>
    <section class="uk-section uk-section-small uk-section-default uk-preserve-color uk-light uk-padding-remove">
        <div class="uk-background-norepeat uk-background-cover uk-background-center-center uk-flex uk-flex-middle" loading="eager" uk-img uk-height-viewport="offset-top: true;" style="min-height: max(0px, -100px + 100vh); background-image: url(images/Picture1.jpg);">
            <div class="uk-container uk-container-large">
                <div class="uk-child-width-1-1 uk-grid-margin" uk-grid>
                    <?php if ($ismobile) { ?>
                        <div>
                            <h1 class="uk-text-uppercase uk-text-center" style="text-shadow: #000 0px 0px 5px">Keharmonisan</h1>
                        </div>
                        <div class="uk-panel">
                            <h5 class="uk-text-center" style="text-shadow: #000 0px 0px 5px; font-size: 15px!important;">Hidup yang selaras antara : Tuhan - Manusia - Alamnya</h5>
                        </div>
                    <?php } else { ?>
                        <div>
                            <h1 class="uk-heading-large uk-text-uppercase uk-text-center" style="text-shadow: #000 0px 0px 5px">Keharmonisan</h1>
                        </div>
                        <div class="uk-panel">
                            <h5 class="uk-text-center" style="text-shadow: #000 0px 0px 5px">Hidup yang selaras antara : Tuhan - Manusia - Alamnya</h5>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="uk-section-muted uk-section uk-section-small" uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-slide-bottom-small; delay: false;">
        <div class="uk-container uk-container-xlarge">
            <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                <div class="uk-width-1-1@m">
                    <h2 class="uk-h3 uk-heading-bullet uk-margin-medium uk-scrollspy-inview" uk-scrollspy-class>Program F2BLEST</h2>
                    <div class="uk-child-width-1-1 uk-child-width-1-2@m" uk-grid>
                        <div class="uk-grid-item-match">
                            <div class="uk-tile-primary uk-tile uk-tile-large uk-flex uk-flex-middle">
                                <div class="uk-panel uk-width-1-1">
                                    <h2 class="uk-h3 uk-width-medium uk-margin-auto uk-text-center">Desa Konservasi Curik Bali Ramah Anak (DEKCBRA)</h2>
                                    <div class="uk-panel uk-margin uk-margin-auto uk-text-center">
                                        <div>- Restorasi habitat Curik Bali -</div>
                                        <div>- Monitoring Curik Bali -</div>
                                        <div>- Pendidikan Lingkungan -</div>
                                    </div>
                                    <div class="uk-margin uk-width-medium uk-margin-auto uk-text-center">
                                        <a class="el-content uk-button uk-button-text uk-text" href="page-1">Selengkapnya</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid-item-match">
                            <div class="uk-tile-secondary uk-tile uk-tile-large uk-flex uk-flex-middle">
                                <div class="uk-panel uk-width-1-1">
                                    <h2 class="uk-h3 uk-width-medium uk-margin-auto uk-text-center">Desa Konservasi Berbasis “Pengalaman Masyarakat Desa”</h2>
                                    <div class="uk-panel uk-margin uk-margin-auto uk-text-center">
                                        <div>- Menggali Inisiatif masyarakat dan kearifan local dalam menanggapi perubahan Iklim -</div>
                                        <div>- Sistem Pengelolaan sampah bebasis lingkungan desa -</div>
                                    </div>
                                    <div class="uk-margin uk-width-medium uk-margin-auto uk-text-center">
                                        <a class="el-content uk-button uk-button-text uk-text" href="page-2">Selengkapnya</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="uk-section-secondary uk-preserve-color uk-section" uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-slide-bottom-small; delay: false;">
        <div class="uk-container uk-container-xlarge">
            <div class="tm-grid-expand uk-grid-column-large uk-grid-margin" uk-grid>
                <div class="uk-light uk-width-1-4@m uk-text-right@m uk-text-left uk-flex-last@m">
                    <h2 class="uk-position-relative uk-scrollspy-inview" style="top: 15px;" uk-scrollspy-class>Kegiatan Pilihan<br/>dari F2BLEST</h2>
                </div>
                <div class="uk-width-3-4@m">
                    <div uk-slider="autoplay: true; sets: true;">
                        <div class="uk-position-relative">
                            <div class="uk-slider-container">
                                <div class="uk-slider-items uk-visible-toggle uk-child-width-1-2@m uk-grid" uk-height-match="target: > div > a > .uk-card > .uk-card-body">
                                    <?php foreach ($newses as $news) { ?>
                                        <div>
                                            <a href="kegiatan/<?=$news['slug']?>">
                                                <div class="uk-card uk-card-default uk-card-hover">
                                                    <div class="uk-card-media-top uk-height-medium uk-background-cover" style="background-image:url('images/kegiatan/<?=$news['images']?>');">
                                                        <img class="uk-hidden" src="images/kegiatan/<?=$news['images']?>" alt="<?=$news['title']?>" />
                                                    </div>
                                                    <div class="uk-card-body">
                                                        <h3 class="el-card-title"><?=$news['title']?></h3>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-margin-remove-bottom"></ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="uk-section-muted" uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-slide-bottom-small; delay: false;">
        <div data-src="/images/bottom-bg.svg" uk-img class="uk-background-norepeat uk-background-contain uk-background-bottom-left uk-section uk-section-xlarge" uk-parallax="bgx: -120,-120; bgy: 420,120; easing: 0.5">
            <div class="uk-container uk-container-xlarge">
                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-width-1-1@m">
                        <h2 class="uk-h3 uk-heading-bullet uk-margin-medium uk-scrollspy-inview" uk-scrollspy-class>Susunan Organisasi Yayasan</h2>
                        <div class="uk-position-relative uk-visible-toggle uk-margin" uk-slider="autoplay: true">
                            <div class="uk-slider-container">
                                <div class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid uk-height-match="target: > div > a > .uk-card > .uk-card-body">
                                    <div>
                                        <!-- <a href="layanan#inhouse"> -->
                                            <div class="uk-card uk-card-default uk-card-hover">
                                                <div class="uk-card-media-top">
                                                    <img src="images/dewan-pakar.jpg" alt="Dewan Pakar" style="width: 370px; height: 208px; object-fit: cover;" />
                                                </div>
                                                <div class="uk-card-body uk-margin-remove-first-child">
                                                    <h3 class="el-title uk-h5 uk-margin-top uk-margin-remove-bottom">Fary Djemy Francis</h3>
                                                    <div class="el-meta uk-text-meta uk-margin-small-top">Dewan Pakar</div>
                                                </div>
                                            </div>
                                        <!-- </a> -->
                                    </div>
                                    <div>
                                        <!-- <a href="layanan#public"> -->
                                            <div class="uk-card uk-card-default uk-card-hover">
                                                <div class="uk-card-media-top">
                                                    <img src="images/pembina.jpg" alt="Pembina" style="width: 370px; height: 208px; object-fit: cover;" />
                                                </div>
                                                <div class="uk-card-body uk-margin-remove-first-child">
                                                    <h3 class="el-title uk-h5 uk-margin-top uk-margin-remove-bottom">Yohanes Ghewa</h3>
                                                    <div class="el-meta uk-text-meta uk-margin-small-top">Pembina</div>
                                                </div>
                                            </div>
                                        <!-- </a> -->
                                    </div>
                                    <div>
                                        <!-- <a href="layanan#outbound"> -->
                                            <div class="uk-card uk-card-default uk-card-hover">
                                                <div class="uk-card-media-top">
                                                    <img src="images/pengawas1.jpg" alt="Pengawas 1" style="width: 370px; height: 208px; object-fit: cover;" />
                                                </div>
                                                <div class="uk-card-body uk-margin-remove-first-child">
                                                    <h3 class="el-title uk-h5 uk-margin-top uk-margin-remove-bottom">Ida Bagus Made Arnaya</h3>
                                                    <div class="el-meta uk-text-meta uk-margin-small-top">Pengawas</div>
                                                </div>
                                            </div>
                                        <!-- </a> -->
                                    </div>
                                    <div>
                                        <!-- <a href="layanan#purnabakti"> -->
                                            <div class="uk-card uk-card-default uk-card-hover">
                                                <div class="uk-card-media-top">
                                                    <img src="images/pengawas2.jpg" alt="Pengawas 2" style="width: 370px; height: 208px; object-fit: cover;" />
                                                </div>
                                                <div class="uk-card-body uk-margin-remove-first-child">
                                                    <h3 class="el-title uk-h5 uk-margin-top uk-margin-remove-bottom">Kuat Wahyudi</h3>
                                                    <div class="el-meta uk-text-meta uk-margin-small-top">Pengawas</div>
                                                </div>
                                            </div>
                                        <!-- </a> -->
                                    </div>
                                    <div>
                                        <!-- <a href="layanan#bnsp"> -->
                                            <div class="uk-card uk-card-default uk-card-hover">
                                                <div class="uk-card-media-top">
                                                    <img src="images/pengurus1.jpg" alt="Pengurus 1" style="width: 370px; height: 208px; object-fit: cover;" />
                                                </div>
                                                <div class="uk-card-body uk-margin-remove-first-child">
                                                    <h3 class="el-title uk-h5 uk-margin-top uk-margin-remove-bottom">Elizabeth Rahayu</h3>
                                                    <div class="el-meta uk-text-meta uk-margin-small-top">Pengurus</div>
                                                </div>
                                            </div>
                                        <!-- </a> -->
                                    </div>
                                    <div>
                                        <!-- <a href="layanan#bnsp"> -->
                                            <div class="uk-card uk-card-default uk-card-hover">
                                                <div class="uk-card-media-top">
                                                    <img src="images/pengurus2.jpg" alt="Pengurus 2" style="width: 370px; height: 208px; object-fit: cover;" />
                                                </div>
                                                <div class="uk-card-body uk-margin-remove-first-child">
                                                    <h3 class="el-title uk-h5 uk-margin-top uk-margin-remove-bottom">WIRYAWAN</h3>
                                                    <div class="el-meta uk-text-meta uk-margin-small-top">Pengurus</div>
                                                </div>
                                            </div>
                                        <!-- </a> -->
                                    </div>
                                    <div>
                                        <!-- <a href="layanan#bnsp"> -->
                                            <div class="uk-card uk-card-default uk-card-hover">
                                                <div class="uk-card-media-top">
                                                    <img src="images/pengurus3.jpg" alt="Pengurus 3" style="width: 370px; height: 208px; object-fit: cover;" />
                                                </div>
                                                <div class="uk-card-body uk-margin-remove-first-child">
                                                    <h3 class="el-title uk-h5 uk-margin-top uk-margin-remove-bottom">Anna Isban</h3>
                                                    <div class="el-meta uk-text-meta uk-margin-small-top">Pengurus</div>
                                                </div>
                                            </div>
                                        <!-- </a> -->
                                    </div>
                                    <div>
                                        <!-- <a href="layanan#bnsp"> -->
                                            <div class="uk-card uk-card-default uk-card-hover">
                                                <div class="uk-card-media-top">
                                                    <img src="images/master-fasilitator.jpg" alt="Master Fasilitator" style="width: 370px; height: 208px; object-fit: cover;" />
                                                </div>
                                                <div class="uk-card-body uk-margin-remove-first-child">
                                                    <h3 class="el-title uk-h5 uk-margin-top uk-margin-remove-bottom">NANA RUKMANA</h3>
                                                    <div class="el-meta uk-text-meta uk-margin-small-top">Master Fasilitator</div>
                                                </div>
                                            </div>
                                        <!-- </a> -->
                                    </div>
                                </div>
                            </div>
                            <a class="uk-position-center-left-out uk-position-small" href uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right-out uk-position-small" href uk-slidenav-next uk-slider-item="next"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>