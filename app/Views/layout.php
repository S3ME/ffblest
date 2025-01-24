<!DOCTYPE html>
<html dir="ltr" lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="<?=base_url();?>">
        <title><?=$title;?></title>
        <meta name="description" content="<?=$description;?>">
        <meta name="author" content="Yayasan Flora dan Fauna Bumi Lestari">
        <link rel="icon" href="favicon/favicon.ico">
        <link rel="apple-touch-icon" sizes="16x16" href="/favicon/apple-icon-16x16.png">
        <link rel="apple-touch-icon" sizes="32x32" href="/favicon/apple-icon-32x32.png">
        <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="96x96" href="/favicon/apple-icon-96x96.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
        <link rel="apple-touch-icon" sizes="192x192" href="/favicon/apple-icon-192x192.png">
        <link rel="manifest" href="/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link href="/css/alert.min.css" rel="stylesheet">
        <link href="/css/fontawesome.min.css" rel="stylesheet" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <link href="/css/theme.css" rel="stylesheet">
        <script src="/js/core.min.js"></script>
        <script src="/js/messages.min.js" type="module"></script>
        <script src="/js/uikit.min.js"></script>
        <script src="/js/uikit-icons.min.js"></script>
        <script src="/js/theme.js"></script>
        <script src="/js/newsletter.min.js" defer=""></script>
        <script src="/js/jquery.min.js"></script>

        <?= $this->renderSection('extraSripts') ?>
    </head>
    <body>
        <div class="tm-page">
            <!-- Header -->
            <?php if ($ismobile) { ?>
                <header class="tm-header-mobile">
                    <div class="uk-navbar-container">
                        <div class="uk-container uk-container-expand">
                            <nav uk-navbar="align: left; container: .tm-header-mobile; boundary: .tm-header-mobile .uk-navbar-container;">
                                <div class="uk-navbar-center">
                                    <a href="<?=base_url();?>" aria-label="Back to home" class="uk-logo uk-navbar-item">
                                        <img alt="Yayasan Flora dan Fauna Bumi Lestari" loading="eager" width="80" height="50" src="images/logo.png" uk-svg />
                                    </a>
                                </div>
                                <div class="uk-navbar-left">
                                    <a uk-toggle href="#dialog-mobile" class="uk-navbar-toggle uk-navbar-toggle-animate" role="button" aria-label="Open menu">
                                        <div uk-navbar-toggle-icon></div>
                                    </a>
                                    <div id="dialog-mobile" class="uk-dropbar uk-dropbar-top" uk-drop="clsDrop:uk-dropbar; flip:false; container:.tm-header-mobile; target-y:.tm-header-mobile .uk-navbar-container; mode:click; target-x:.tm-header-mobile .uk-navbar-container; stretch:true; pos:bottom-left; bgScroll:false; animation:reveal-top; animateOut:true; duration:300; toggle:false">
                                        <div class="tm-height-min-1-1 uk-flex uk-flex-column">
                                            <div class="uk-margin-auto-bottom uk-text-center">
                                                <div class="uk-panel" id="module-menu-dialog-mobile">
                                                    <ul class="uk-nav uk-nav-default uk-nav-center">
                                                        <!-- <li class="</?= ($uri->getSegment(1) === '') ? 'uk-active' : '' ?>">
                                                            <a href="</?= base_url(); ?>">Beranda</a>
                                                        </li> -->
                                                        <li <?=(($uri->getSegment(1) === '') ? 'class="uk-active"' : '')?>><a href="">Beranda</a></li>
                                                        <li <?=(($uri->getSegment(1) === 'kegiatan') ? 'class="uk-active"' : '')?>><a href="kegiatan">Kegiatan</a></li>
                                                        <li <?=(($uri->getSegment(1) === 'gallery') ? 'class="uk-active"' : '')?>><a href="gallery">Galeri</a></li>
                                                        <li <?=(($uri->getSegment(1) === 'profil') ? 'class="uk-active"' : '')?>><a href="profil">Profil</a></li>
                                                        <!-- <li </?=(($uri->getSegment(1) === 'contact') ? 'class="uk-active"' : '')?>><a href="contact">Kontak</a></li> -->
                                                        <!-- <li class="</?= ($uri->getSegment(1) === 'kegiatan') ? 'uk-active' : '' ?>">
                                                            <a href="</?= base_url('kegiatan'); ?>">Kegiatan</a>
                                                        </li>
                                                        <li class="</?= ($uri->getSegment(1) === 'gallery') ? 'uk-active' : '' ?>">
                                                            <a href="</?= base_url('gallery'); ?>">Galeri</a>
                                                        </li>
                                                        <li class="</?= ($uri->getSegment(1) === 'profil') ? 'uk-active' : '' ?>">
                                                            <a href="profil">Profil</a>
                                                        </li>
                                                        <li class="</?= ($uri->getSegment(1) === 'contact') ? 'uk-active' : '' ?>">
                                                            <a href="</?= base_url('contact'); ?>">Kontak</a>
                                                        </li> -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </header>
            <?php } else { ?>
                <header class="tm-header uk-visible@l">
                    <div class="tm-headerbar-default tm-headerbar tm-headerbar-top uk-padding-remove-bottom">
                        <div class="uk-container uk-container-large">
                            <div class="uk-flex uk-flex-center">
                                <div>
                                    <a href="<?=base_url()?>" class="uk-logo">
                                        <img alt="Yayasan Flora dan Fauna Bumi Lestari" loading="eager" width="115" height="50" src="images/logo.png" uk-svg />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div uk-sticky show-on-up animation="uk-animation-slide-top" cls-active="uk-navbar-sticky" sel-target=".uk-navbar-container" cls-inactive="uk-navbar-transparent" tm-section-start>
                        <div class="uk-navbar-container">
                            <div class="uk-container uk-container-large">
                                <nav class="uk-navbar" uk-navbar="align: left;container: .tm-header > [uk-sticky]; boundary: .tm-header .uk-navbar-container;">
                                    <div class="uk-navbar-center">
                                        <ul class="uk-navbar-nav">
                                            <li <?=(($uri->getSegment(1) === '') ? 'class="uk-active"' : '')?>><a href="">Beranda</a></li>
                                            <li <?=(($uri->getSegment(1) === 'kegiatan') ? 'class="uk-active"' : '')?>><a href="kegiatan">Kegiatan</a></li>
                                            <li <?=(($uri->getSegment(1) === 'gallery') ? 'class="uk-active"' : '')?>><a href="gallery">Galeri</a></li>
                                            <li <?=(($uri->getSegment(1) === 'profil') ? 'class="uk-active"' : '')?>><a href="profil">Profil</a></li>
                                            <!-- <li </?=(($uri->getSegment(1) === 'contact') ? 'class="uk-active"' : '')?>><a href="contact">Kontak</a></li> -->
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="uk-sticky-placeholder" style="height: 100px; width: 1873px; margin: 0px;" hidden=""></div>
                </header>
            <?php } ?>
            <!-- end of Header -->
            <!-- Main -->
            <main class="tm-main">
                <?= $this->renderSection('main') ?>
            </main>
            <!-- end of Main -->
            <!-- Footer -->
            <footer>
                <div class="uk-section-default uk-section uk-padding-remove-bottom">
                    <div class="uk-container uk-container-xlarge">
                        <div class="uk-grid-divider uk-grid-match uk-child-width-1-2@m uk-child=width-1-1" uk-grid>
                            <div class="uk-text-center">
                                <div class="el-item uk-panel">
                                    <h3 class="el-title uk-h4">Head Office</h3>
                                    <div class="el-content uk-panel">Nayu Cengklik RT 02 RW 20 Nusukan, Banjarsari, Surakarta, Jawa Tengah (57135)</div>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <div class="el-item uk-panel">
                                    <h3 class="el-title uk-h4">Field Office</h3>
                                    <div class="el-content uk-panel">Asih Timur Gg.1, Gilimanuk, Melaya, Jembrana - Bali</div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                    </div>
                </div>
                <div class="uk-section-default uk-section uk-section-small">
                    <div class="uk-container uk-container-xlarge">
                        <div class="uk-grid tm-grid-expand uk-grid-margin" uk-grid>
                            <div class="uk-width-1-4@m">
                                <div class="uk-h5 uk-margin-remove-vertical uk-text-left@m uk-text-center">
                                    <a class="el-link uk-link-reset" href="">F2BLEST</a>
                                </div>
                                <div class="uk-divider-small uk-margin-small uk-width-small uk-visible@m"></div>
                            </div>
                            <div class="uk-width-1-2@m">
                                <div class="uk-panel uk-text-small uk-margin uk-text-center@m uk-text-center uk-text-meta">
                                    <?php
                                    function auto_copyright($year = 'auto') {
                                        if(intval($year) == 'auto'){ $year = date('Y'); }
                                        if(intval($year) == date('Y')){ echo intval($year); }
                                        if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); }
                                        if(intval($year) > date('Y')){ echo date('Y'); }
                                    }
                                    ?>
                                    &copy copyright <?php auto_copyright("2024"); ?>. Yayasan Flora dan Fauna Bumi Lestari
                                </div>
                            </div>
                            <div class="uk-width-1-4@m">
                                <div class="uk-flex uk-flex-center uk-flex-right@m uk-margin-remove-vertical">
                                    <div class="uk-grid uk-child-width-auto uk-grid-column-small uk-grid-match" uk-grid>
                                        <div>
                                            <div class="el-item uk-panel uk-margin-remove-first-child">
                                                <div class="el-title uk-margin-top uk-margin-remove-bottom">Hubungi Kami&emsp; — </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="el-item uk-panel uk-margin-remove-first-child">
                                                <a href="mailto:iinetworkbb@gmail.com" uk-icon="icon: mail" target="_blank"></a>
                                                <!-- <a href="mailto:florafaunabumilestari@gmail.com" uk-icon="icon: mail" target="_blank"></a> -->
                                            </div>
                                        </div>
                                        <div>
                                            <div class="el-item uk-panel uk-margin-remove-first-child">
                                                <a uk-toggle="target: #whatsapp" uk-icon="icon: whatsapp"></a>
                                            </div>
                                            <div id="whatsapp" class="uk-flex-top" uk-modal>
                                                <div class="uk-modal-dialog uk-margin-auto-vertical" style="background: transparent;">
                                                    <div class="uk-modal-body">
                                                        <div class="uk-child-width-1-1" uk-grid>
                                                            <div class="uk-margin-small uk-margin-remove-top">
                                                                <a href="https://wa.me/+622144767385" target="_blank">
                                                                    <button class="uk-button uk-button-primary uk-width-1-1" style="border-radius:30px;"><i uk-icon="whatsapp"></i> 082144767385</button>
                                                                </a>
                                                            </div>
                                                            <div class="uk-margin-small uk-margin-remove-top">
                                                                <a href="https://wa.me/+621917015595" target="_blank">
                                                                    <button class="uk-button uk-button-primary uk-width-1-1" style="border-radius:30px;"><i uk-icon="whatsapp"></i> 081917015595</button>
                                                                </a>
                                                            </div>
                                                            <div class="uk-margin-small uk-margin-remove-top">
                                                                <a href="https://wa.me/+621249419778" target="_blank">
                                                                    <button class="uk-button uk-button-primary uk-width-1-1" style="border-radius:30px;"><i uk-icon="whatsapp"></i> 081249419778</button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end of Footer -->
        </div>
    </body>
</html>