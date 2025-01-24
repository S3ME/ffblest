<?= $this->extend('layout') ?>

<?= $this->section('main') ?>
    <section class="uk-section-muted uk-inverse-dark uk-section uk-section-large" uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-slide-bottom-small; delay: false;">
        <div class="uk-container uk-container-small">
            <h1 class="uk-text-center">Sejarah Yayasan Flora dan Fauna Bumi Lestari</br>(F2BLEST)</h1>
            <p>Sebagai pelaksana Program Fasilitasi Masyarakat Ala Bali Barat (FMBB) melalui pelatihan peningkatan kapasitas bagi : POLHUT, PEH, dan Penyuluh dalam program Kerjasama antara Kementrian Lingkungan Hidup dan Kehutanan dengan JICA di Taman Nasional Bali Barat.</p>
            <p>Setelah Kerjasama program FMBB berakhir, kegiatan pendampingan para alumni FMBB dan masyarakat sekitar Kawasan TNBB dilanjutkan oleh staf Indonesia, dalam sebuah lembaga local bernama I-I-NET. Pada November 2022 mendapat B.H. Yayasan dengan No: AHU-0022522.AH.01.04. berganti nama menjadi : Flora Fauna Bumi Lestari (FFBL) disingkat F2BLEST.</p>
            <blockquote class="uk-margin-medium">“Keharmonisan” Hidup yang selaras antara : Tuhan - Manusia - Alamnya</blockquote>
            <div class="uk-margin-large uk-card uk-card-secondary uk-card-body">
                <div class="uk-child-width-1-2@m uk-child-width-1-1 uk-grid-divider" uk-grid>
                    <div>
                        <div class="uk-h4">Visi</div>
                        <p>Masyarakat hidup sejahtera selaras dengan alam.</p>
                    </div>
                    <div>
                        <div class="uk-h4">Misi</div>
                        <p>Memberdayakan masyarakat sekitar Kawasan hutan.</p>
                        <p>Konservasi sumber daya alam hayati melalui pendidikan, social, budaya dan ekonomi yang berwawasan lingkungan.</p>
                    </div>
                </div>
            </div>
            <div class="uk-margin-large uk-card uk-card-primary uk-card-body">
                <div class="uk-child-width-1-2@m uk-child-width-1-1 uk-grid-divider" uk-grid>
                    <div>
                        <div class="uk-h4">Tujuan</div>
                        <p>Melahirkan Para Pejuang Konservasi Sumber Daya Alam Hayati (KSDAH) Yang Tangguh Kreatif dan Inovatif.</p>
                    </div>
                    <div>
                        <div class="uk-h4">Strategi</div>
                        <p>Fasilitasi Masyarakat Sekitar Kawasan KSDAH Dalam Hal Pengembangan Kapasitas, Kolaborasi dan Pendampingan Yang Berkelanjutan.</p>
                    </div>
                </div>
            </div>
            <div class="uk-margin-large uk-card uk-card-secondary">
                <div class="uk-card-media-top">
                    <img src="images/dummy-team.jpg" width="1460" height="821" />
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Susunan Organisasi Yayasan</h3>
                    <?php if ($ismobile) { ?>
                        <ul class="uk-list uk-list-decimal">
                            <li>Ir. Fary Djemy Francis, MMA - Ketua Dewan Pakar</li>
                            <li>Drs.Yohanes Ghewa - Ketua Dewan Pembina</li>
                            <li>Ida Bagus Made Arnaya, SP - Ketua Dewan Pengawas</li>
                            <li>Elizabeth Rahayu - Ketua Yayasan</li>
                            <li>Wiryawan S.Hut, M.Ec.Dev - Sekretaris</li>
                            <li>Anna Isban Gulanti, SE - Bendahara</li>
                            <li>Aldora - Staf Keuangan</li>
                            <li>Ananta - Staf Admin</li>
                            <li>Nana Rukmana - Master Fasilitator Bali</li>
                        </ul>
                    <?php } else { ?>
                        <div class="uk-child-width-1-2" uk-grid>
                            <div>
                                <div>Ir. Fary Djemy Francis, MMA</div>
                                <div>Drs.Yohanes Ghewa</div>
                                <div>Ida Bagus Made Arnaya, SP</div>
                                <div>Elizabeth Rahayu</div>
                                <div>Wiryawan S.Hut, M.Ec.Dev</div>
                                <div>Anna Isban Gulanti, SE</div>
                                <div>Aldora</div>
                                <div>Ananta</div>
                                <div>Nana Rukmana</div>
                            </div>
                            <div>
                                <div>Ketua Dewan Pakar</div>
                                <div>Ketua Dewan Pembina</div>
                                <div>Ketua Dewan Pengawas</div>
                                <div>Ketua Yayasan</div>
                                <div>Sekretaris</div>
                                <div>Bendahara</div>
                                <div>Staf Keuangan</div>
                                <div>Staf Admin</div>
                                <div>Master Fasilitator Bali</div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="uk-margin uk-card uk-card-primary uk-card-body">
                <div class="uk-card-title uk-text-center">
                    <h3 class="uk-margin-small">B.H. Yayasan</h3>
                    <h3 class="uk-margin-small">No: AHU-0022522.AH.01.04.</h3>
                </div>
                <div class="uk-child-width-1-2@m uk-child-width-1-1 uk-grid-match uk-grid-divider uk-text-center" uk-grid>
                    <div>
                        <h5>NPWP</br>61.588.213.1-526.000</h5>
                    </div>
                    <div>
                        <h5>No.Rekening BNI</br>8888.5656.98</br>a.n Yayasan Flora Fauna Bumi Lestari</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="uk-section uk-section-default uk-section-small">
        <div class="uk-container uk-container-small">
            <div class="uk-margin uk-card uk-card-secondary uk-card-body">
                <div class="uk-card-title uk-text-center">
                    <h3 class="uk-margin-small">B.H. Yayasan</h3>
                    <h3 class="uk-margin-small">No: AHU-0022522.AH.01.04.</h3>
                </div>
                <div class="uk-child-width-1-2@m uk-child-width-1-1 uk-grid-match uk-grid-divider uk-text-center" uk-grid>
                    <div>
                        <h5>NPWP</br>61.588.213.1-526.000</h5>
                    </div>
                    <div>
                        <h5>No.Rekening BNI</br>8888.5656.98</br>a.n Yayasan Flora Fauna Bumi Lestari</h5>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<?= $this->endSection() ?>