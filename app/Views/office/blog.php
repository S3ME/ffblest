<?= $this->extend('office/layout') ?>

<?= $this->section('extraSripts') ?>
<script>
    jQuery(window).on("load", function () {
        $('#loading').attr('hidden', '');
        $('#main').removeAttr('hidden');
    });
</script>

<!-- Tiny MCE Js  -->
<script src="https://cdn.tiny.cloud/1/fbtmdxwnanfjdicy4oh9uxzzp0idhv1sdbyxml3t9lgz0v6r/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 50px;
        height: 25px;
    }
    
    .switch input { 
        opacity: 0;
        width: 0;
        height: 0;
    }
    
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }
    
    .slider:before {
        position: absolute;
        content: "";
        height: 20px;
        width: 20px;
        left: 4px;
        bottom: 3px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }
    
    input:checked + .slider {
        background-color: #1452dd;
    }
    
    input:focus + .slider {
        box-shadow: 0 0 1px #1452dd;
    }
    
    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }
    
    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }
    
    .slider.round:before {
        border-radius: 50%;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('main') ?>
<section id="loading" class="uk-width-1-1 uk-height-1-1 uk-flex uk-flex-center uk-flex-middle">
    <div uk-spinner="ratio: 3"></div>
</section>
<section id="main" class="uk-section uk-section-small" hidden>
    <div class="uk-container uk-container-expand">
        <!-- Alert Container -->
        <div>
            <?php if (session('errors') !== null) { ?>
                <div class="uk-alert-danger" uk-alert>
                    <a href class="uk-alert-close" uk-close></a>
                    <ul class="uk-list uk-list-disc">
                        <?php foreach (session('errors') as $error) { ?>
                            <li><?=$error?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
            <?php if (session('error') !== null) { ?>
                <div class="uk-alert-danger" uk-alert>
                    <a href class="uk-alert-close" uk-close></a>
                    <p><?=session('error')?></p>
                </div>
            <?php } ?>
            <?php if (session('message') !== null) { ?>
                <div class="uk-alert-success" uk-alert>
                    <a href class="uk-alert-close" uk-close></a>
                    <p><?=session('message')?></p>
                </div>
            <?php } ?>
        </div>

        <!-- Title -->
        <div class="uk-child-width-auto uk-flex-between uk-margin" uk-grid>
            <div>
                <h1 class="uk-h3 uk-heading-bullet uk-margin-remove"><?=$title;?></h1>
            </div>
            <div>
                <a class="uk-button uk-button-primary" href="office/blog/add" uk-toggle>Tambah Artikel</a>
            </div>
        </div>
        
        <!-- Pagination Top -->
        <div class="uk-flex uk-flex-right uk-margin">
            <?= $pager->links('kegiatan', 'uikit_full') ?>
        </div>

        <!-- Blog Table -->
        <div class="uk-overflow-auto">
            <table class="uk-table uk-table-striped uk-table-hover">
                <tbody>
                    <tr>
                        <th>Judul Artikel</th>
                        <!-- <th>Featured</th> -->
                        <th>Highlight</th>
                        <th>Tanggal Dibuat</th>
                        <th></th>
                    </tr>
                    <?php foreach ($blogs as $blog) {
                        // if ($blog['featured'] == '0') {
                        //     $featured   = '';
                        // } else {
                        //     $featured   = 'checked';
                        // }
                        if ($blog['highlight'] == '0') {
                            $highlight   = '';
                        } else {
                            $highlight   = 'checked';
                        } ?>

                        <tr>
                            <td class="uk-table-expand"><?=$blog['title']?></td>
                            <!-- <td class="uk-width-small">
                                <input class="uk-checkbox" type="checkbox" disabled </?= $featured ?>>
                            </td> -->
                            <td class="uk-width-small">
                                <input class="uk-checkbox" type="checkbox" disabled <?= $highlight ?>>
                            </td>
                            <td id="created_at-<?= $blog['id'] ?>"></td>
                            <td class="uk-width-small">
                                <div class="uk-child-width-auto uk-flex-center" uk-grid>
                                    <div>
                                        <a href="office/blog/edit-<?=$blog['id']?>" uk-toggle class="uk-icon-button" uk-icon="pencil"></a>
                                    </div>
                                    <div>
                                        <a href="#delete-<?=$blog['id']?>" uk-toggle class="uk-icon-button uk-button-danger" uk-icon="trash"></a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <!-- Delete Modal -->
                        <div id="delete-<?=$blog['id']?>" class="uk-flex-top" uk-modal="bg-close:false;">
                            <div class="uk-modal-dialog uk-margin-auto-vertical">
                                <div class="uk-modal-body">
                                    <div class="uk-modal-title uk-text-center">Anda yakin akan menghapus<br/><b><?=$blog['title']?></b>?</div>
                                </div>
                                <div class="uk-modal-footer">
                                    <div class="uk-child-width-auto uk-grid-small uk-flex-center" uk-grid>
                                        <div>
                                            <form class="uk-form-stacked" action="office/blog/delete" method="post">
                                                <?= csrf_field() ?>
                                                <input id="blog-id" name="blog-id" value="<?=$blog['id']?>" hidden required />
                                                <button class="uk-button uk-button-primary" type="submit">Ya</button>
                                            </form>
                                        </div>
                                        <div><a class="uk-button uk-button-danger uk-modal-close">Tidak</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Script Date In Indonesia -->
                        <script>
                            var publishupdate   = "<?= $blog['created_at'] ?>";
                            var thatdate        = publishupdate.split( /[- :]/ );
                            thatdate[1]--;
                            var publishthatdate = new Date( ...thatdate );
                            var publishyear     = publishthatdate.getFullYear();
                            var publishmonth    = publishthatdate.getMonth();
                            var publishdate     = publishthatdate.getDate();
                            var publishday      = publishthatdate.getDay();

                            switch(publishday) {
                                case 0: publishday     = "Minggu"; break;
                                case 1: publishday     = "Senin"; break;
                                case 2: publishday     = "Selasa"; break;
                                case 3: publishday     = "Rabu"; break;
                                case 4: publishday     = "Kamis"; break;
                                case 5: publishday     = "Jum'at"; break;
                                case 6: publishday     = "Sabtu"; break;
                            }
                            switch(publishmonth) {
                                case 0: publishmonth   = "Januari"; break;
                                case 1: publishmonth   = "Februari"; break;
                                case 2: publishmonth   = "Maret"; break;
                                case 3: publishmonth   = "April"; break;
                                case 4: publishmonth   = "Mei"; break;
                                case 5: publishmonth   = "Juni"; break;
                                case 6: publishmonth   = "Juli"; break;
                                case 7: publishmonth   = "Agustus"; break;
                                case 8: publishmonth   = "September"; break;
                                case 9: publishmonth   = "Oktober"; break;
                                case 10: publishmonth  = "November"; break;
                                case 11: publishmonth  = "Desember"; break;
                            }

                            var publishfulldate         = publishday + ", " + publishdate + " " + publishmonth + " " + publishyear;
                            document.getElementById("created_at-<?= $blog['id'] ?>").innerHTML = publishfulldate;
                        </script>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination Bottom -->
        <div class="uk-flex uk-flex-right uk-margin">
            <?= $pager->links('kegiatan', 'uikit_full') ?>
        </div>
    </div>
</section>
<?= $this->endSection() ?>