

<?php $__env->startSection('title'); ?> <?php echo e(__($module_title)); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>
<?php if (isset($component)) { $__componentOriginal73d065ab05177f56255c078a05ab5686 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73d065ab05177f56255c078a05ab5686 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.breadcrumbs','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginal5e5b40e973d9c7c18a583cb81079b74e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5e5b40e973d9c7c18a583cb81079b74e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.breadcrumb-item','data' => ['type' => 'active','icon' => ''.e($module_icon).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.breadcrumb-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'active','icon' => ''.e($module_icon).'']); ?><?php echo e(__($module_title)); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5e5b40e973d9c7c18a583cb81079b74e)): ?>
<?php $attributes = $__attributesOriginal5e5b40e973d9c7c18a583cb81079b74e; ?>
<?php unset($__attributesOriginal5e5b40e973d9c7c18a583cb81079b74e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5e5b40e973d9c7c18a583cb81079b74e)): ?>
<?php $component = $__componentOriginal5e5b40e973d9c7c18a583cb81079b74e; ?>
<?php unset($__componentOriginal5e5b40e973d9c7c18a583cb81079b74e); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73d065ab05177f56255c078a05ab5686)): ?>
<?php $attributes = $__attributesOriginal73d065ab05177f56255c078a05ab5686; ?>
<?php unset($__attributesOriginal73d065ab05177f56255c078a05ab5686); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73d065ab05177f56255c078a05ab5686)): ?>
<?php $component = $__componentOriginal73d065ab05177f56255c078a05ab5686; ?>
<?php unset($__componentOriginal73d065ab05177f56255c078a05ab5686); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<script src="../vendor/oltb/ol/ol10.js"></script>
<link rel="stylesheet" href="../vendor/oltb/ol/ol10.css">
<link rel="stylesheet" href="../vendor/oltb/oltb.min.css">
<script type ="text/javascript">
    $( document ).ready(function() {
        $('#headbreadcumb').hide();
        $('#footer1').hide();
        $('.body .container-fluid').css({ overflow: "hidden" });
        
});

    function closex(){
        $("#sidebarRight").removeClass("show");
        $("#sidebarRight").addClass("hide");
            }

    function copy(element_id){
        var aux = document.createElement("div");
        aux.setAttribute("contentEditable", true);
        aux.innerHTML = document.getElementById(element_id).innerHTML;
        aux.setAttribute("onfocus", "document.execCommand('selectAll',false,null)"); 
        document.body.appendChild(aux);
        aux.focus();
        document.execCommand("copy");
        document.body.removeChild(aux);

        $("#datakoor").notify(
        "Koordinat berhasil dicopy", "success",
        );
    }

    

</script>



<div class="card" style="height: 87vh; --cui-card-spacer-x: 0rem; --cui-card-spacer-y: 0rem;" >
    <div class="card-body">
        <div id="oltb"></div>
        <div id="map" tabindex="0"></div>


        <div id="sidebarRight" class="sidebarRight">
    <!---->
        <div class="cyan coordinateHeader d-flex justify-space-between align-center py-3 px-4" onselectstart="return false;" style="user-select: none;">
            <div class="align-center">
                <i aria-hidden="true" class="fa-solid fa-location-dot" style=" margin-right:0.3rem;"></i>
                <span id="datakoor" class="loader">
                    <!--isiandatakoor-->
                </span>
                &nbsp;&nbsp;<iaria-hidden="true" class="fa-regular fa-copy" style=" margin-right:0.3rem; cursor: pointer;" onclick="copy('datakoor')"></i>
            </div>
            <button class="btn btn-link nav-link" style="position: absolute; right: 0; margin-right:1rem;" onClick="closex();"><i class="fa-regular fa-circle-xmark closex"></i></button>
        </div>
        <div>
            <div class="mb-2">
                <div class="dataList d-flex align-center justify-space-between py-2 px-4">
                    <div><div class="dataList-title">Detail Administrasi</div></div>
                </div>
                <div>
                    <div class="dataContent py-2 px-4">
                        <div class="dataContent-title">Provinsi</div>
                        <div>
                            <div id="dataprov" class="textToNormal loader">
                                <!--isiandataprov-->
                            </div>
                            <!---->
                        </div>
                    </div>
                    <div class="dataContent py-2 px-4">
                        <div class="dataContent-title">Kab/Kota</div>
                        <div>
                            <div id="datakota"class="textToNormal loader">
                                 <!--isiankota-->
                            </div>
                            <!---->
                        </div>
                    </div>
                    <div class="dataContent py-2 px-4">
                        <div class="dataContent-title">Kecamatan</div>
                        <div>
                            <div id="datakeca" class="textToNormal loader">
                                 <!--isiankecamatan-->
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="dataList d-flex align-center justify-space-between py-2 px-2">
                    <div class="d-flex dataList-tab justify-space-between" style="width: 100%;">
                        <div id="btnpanelpolaruang"  style="cursor: pointer; user-select: none;" onclick="btnpanelpolaruang()" class="dataList-title mr-1 active" onselectstart="return false;" >
                            Pola Ruang
                        </div>
                        <div id="btnpanelku"  style="cursor: pointer; user-select: none;" onclick="btnpanelku()" class="dataList-title mr-1" onselectstart="return false;">
                            Ketentuan Umum
                        </div>
                        <div id="btnpanelkk"  style="cursor: pointer; user-select: none;" onclick="btnpanelkk()" class="dataList-title mr-1" onselectstart="return false;">
                            Ketentuan Khusus
                        </div>
                        <div id="btnpanellegenda"  style="cursor: pointer; user-select: none;" onclick="btnpanellegenda()" class="dataList-title mr-1" onselectstart="return false;">
                            Legenda
                        </div>
                    </div>
                </div>
                <div class="pa-4">
                    <div id="panelpolaruang" class="paneltab show">
                        <div class="rounded-lg elevation-2 pa-3">
                            <b>Kode Kawasan</b>
                            <div id="datakode" class="loader">
                                <!--isiankode-->
                            </div>
                        </div>
                        <div class="rounded-lg elevation-2 pa-3 mt-3">
                            <b>Pola Ruang</b>
                            <div id="datapola" class="loader">
                                <!--isiankode-->
                            </div>
                        </div>
                        <div class="rounded-lg elevation-2 pa-3 mt-3">
                            <b>Jenis Pola Ruang</b>
                            <div id="datajenisp" class="loader">
                                <!--isianjenisp-->
                            </div>
                        </div>
                        <div class="rounded-lg elevation-2 pa-3 mt-3">
                            <b>KP2B</b>
                            <div id="datakp2b" class="loader">
                                <!--isiankode-->
                            </div>
                        </div>
                        <div class="rounded-lg elevation-2 pa-3 mt-3">
                            <b>KRB</b>
                            <div id="datakrb" class="loader">
                                <!--isiankode-->
                            </div>
                        </div>
                        <div class="rounded-lg elevation-2 pa-3 mt-3">
                            <b>Resapan Air</b>
                            <div id="dataresap" class="loader">
                                <!--isianjenisp-->
                            </div>
                        </div>
                    </div>

                    <div id="panelku" class="paneltab hide">
                        <div id="panelku-izin"class="text-subpanel"></div>
                    </div>

                    <div id="panelkk" class="paneltab hide">
                        <div id="panelkk-izin"class="text-subpanel"></div>
                    </div>
                    

                    <div id="panellegenda" class="paneltab hide">
                        <div id="legendaimg"></div>
                    </div>







                    <div style="display: none;">
                        <div class="activitiesArea">
                            <div>
                                <div class="v-input v-input--hide-details v-input--dense theme--light v-text-field v-text-field--is-booted v-text-field--enclosed v-text-field--outlined v-text-field--placeholder" style="font-size: 0.9em;">
                                    <div class="v-input__control">
                                        <div class="v-input__slot">
                                            <div class="v-input__prepend-inner"><i aria-hidden="true" class="v-icon notranslate mdi mdi-magnify theme--light"></i></div>
                                            <fieldset aria-hidden="true">
                                                <legend style="width: 0px;"><span class="notranslate">​</span></legend>
                                            </fieldset>
                                            <div class="v-text-field__slot"><input id="input-118" placeholder="Cari kegiatan" type="text" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="mt-4">
                                <div class="itbxListTitle">KEGIATAN DIIZINKAN</div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">pengelolaan air</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">real estat yang dimiliki sendiri atau disewa dan kawasan pariwisata</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">real estat atas dasar balas jasa (fee) atau kontrak</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas fotografi</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">administrasi pemerintahan dan kebijakan ekonomi dan sosial</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">penyediaan layanan untuk masyarakat dalam bidang hubungan luar negeri, pertahanan, keamanan dan ketertiban</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">jaminan sosial wajib</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas olahraga</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas rekreasi lainnya</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">jalur hijau dan pulau jalan</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">taman kota</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">sempadan/penyangga</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">perkarangan</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">taman lingkungan</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">lapangan olah raga</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">lapangan</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">pos jaga</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">halte</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">toilet umum</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">tempat parkir</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">taman bermain dan rekreasi</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">taman pintar</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">pedestrian/trotoar</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">jaringan jalan</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">rumah tunggal</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">rumah kopel</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">rumah deret</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">town house</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">asrama</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">panti jompo</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">panti asuhan</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">paviliun</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">rumah dinas</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">rumah adat</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="itbxListTitle">KEGIATAN TERBATAS</div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">konstruksi gedung</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">konstruksi jalan dan jalan rel</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">konstruksi jaringan irigasi, komunikasi dan limbah</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">konstruksi bangunan sipil lainnya</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">pembongkaran dan penyiapan lahan</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">instalasi sistem kelistrikan, air (pipa) dan instalasi konstruksi lainnya</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">penyelesaian konstruksi bangunan</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">konstruksi khusus lainnya</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">perdagangan mobil</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">perdagangan eceran berbagai macam barang di toko</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">perdagangan eceran khusus makanan, minuman dan tembakau di toko</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">perdagangan eceran khusus peralatan informasi dan komunikasi di toko</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">perdagangan eceran khusus perlengkapan rumah tangga lainnya di toko</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">perdagangan eceran khusus barang budaya dan rekreasi di toko khusus</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">perdagangan eceran khusus barang lainnya di toko</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">perdagangan eceran kaki lima dan los pasar</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">perdagangan eceran bukan di toko, kaki lima dan los pasar</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas pos</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas kurir</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">penyediaan akomodasi jangka pendek</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">penyediaan akomodasi lainnya</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">restoran dan penyediaan makanan keliling</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">jasa boga untuk suatu event tertentu (event catering) dan penyediaan makanan lainnya</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">penyediaan minuman</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas penerbitan buku, majalah dan terbitan lainnya</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">penerbitan piranti lunak (software)</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas produksi gambar bergerak, video dan program televisi</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas perekaman suara dan penerbitan musik</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">penyiaran radio</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas penyiaran dan pemrograman televisi</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas telekomunikasi dengan kabel</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas telekomunikasi tanpa kabel</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas telekomunikasi satelit</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas telekomunikasi lainnya</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas pemrograman, konsultasi komputer dan kegiatan ybdi</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas pengolahan data, hosting dan kegiatan ybdi; portal web</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas jasa informasi lainnya</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">pendidikan lainnya</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">kegiatan penunjang pendidikan</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas praktik dokter dan dokter gigi</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas pelayanan kesehatan manusia lainnya</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">reparasi komputer dan alat komunikasi</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">reparasi barang keperluan pribadi dan perlengkapan rumah tangga</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas jasa perorangan untuk kebugaran, bukan olahraga</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas jasa perorangan lainnya ytdl</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas rumah tangga sebagai pemberi kerja dari personil domestik</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas yang menghasilkan barang oleh rumah tangga yang digunakan untuk memenuhi kebutuhan sendiri</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">aktivitas yang menghasilkan jasa oleh rumah tangga yang digunakan untuk memenuhi kebutuhan sendiri</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">rumah susun rendah (&lt; 4 lt )</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">rumah susun sedang ( 4 - 8 lt)</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">rumah susun tinggi (&gt; 8 lt)</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">rumah kost</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">guest house</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                                <div class="itbxList py-1">
                                    <div class="d-flex justify-space-between">
                                        <div class="itbxList-text">apartemen</div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px;"></button>
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <!---->
                            <div class="v-dialog__container"><!----></div>
                        </div>
                    </div>
                    <div style="display: none;">
                        <div>
                            <div class="pa-3 rounded-lg elevation-3 mb-3" style="cursor: pointer;">
                                <div class="d-flex justify-space-between">
                                    <b>Koefisien Dasar Bangunan (%)</b>
                                    <div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px; color: rgb(0, 0, 0);"></button>
                                        <i aria-hidden="true" class="v-icon notranslate mdi mdi-chevron-down theme--light"></i>
                                    </div>
                                </div>
                                <div class="mt-2 intensitiesDetail" style="overflow-x: auto;">
                                    <div>70</div>
                                    <br />
                                </div>
                            </div>
                            <div class="pa-3 rounded-lg elevation-3 mb-3" style="cursor: pointer;">
                                <div class="d-flex justify-space-between">
                                    <b>Koefisien Lantai Bangunan</b>
                                    <div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px; color: rgb(0, 0, 0);"></button>
                                        <i aria-hidden="true" class="v-icon notranslate mdi mdi-chevron-down theme--light"></i>
                                    </div>
                                </div>
                                <div class="mt-2 intensitiesDetail" style="overflow-x: auto;">
                                    <div>2.8</div>
                                    <br />
                                </div>
                            </div>
                            <div class="pa-3 rounded-lg elevation-3 mb-3" style="cursor: pointer;">
                                <div class="d-flex justify-space-between">
                                    <b>Koefisien Dasar Hijau (%)</b>
                                    <div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px; color: rgb(0, 0, 0);"></button>
                                        <i aria-hidden="true" class="v-icon notranslate mdi mdi-chevron-down theme--light"></i>
                                    </div>
                                </div>
                                <div class="mt-2 intensitiesDetail" style="overflow-x: auto;">
                                    <div>20</div>
                                    <br />
                                </div>
                            </div>
                            <div class="v-dialog__container"><!----></div>
                            <div class="v-dialog__container"><!----></div>
                            <div class="v-dialog__container"><!----></div>
                            <div class="v-dialog__container"><!----></div>
                        </div>
                    </div>
                    <div style="display: none;">
                        <div>
                            <div class="pa-3 rounded-lg elevation-3 mb-3" style="cursor: pointer;">
                                <div class="d-flex justify-space-between">
                                    <b>Dokumen-Dokumen</b>
                                    <div><i aria-hidden="true" class="v-icon notranslate mdi mdi-chevron-down theme--light"></i></div>
                                </div>
                                <div class="mt-2 intensitiesDetail" style="overflow-x: auto;">
                                    <b>Dokumen Batang Tubuh</b>
                                    <div><a href="http://gistaru.atrbpn.go.id/repository/Pages/View?f=03_11A3_BT" target="blank">Download</a></div>
                                    <br />
                                    <b>Dokumen Peta Perda</b>
                                    <div><a href="http://gistaru.atrbpn.go.id/repository/Pages/View?f=01_11A3_PP" target="blank">Download</a></div>
                                    <br />
                                    <b>Catatan</b>
                                    <div><a href="http://gistaru.atrbpn.go.id/repository/Pages/View?f=02_11A3_CT" target="blank">Download</a></div>
                                    <br />
                                </div>
                            </div>
                            <div class="pa-3 rounded-lg elevation-3 mb-3" style="cursor: pointer;">
                                <div class="d-flex justify-space-between">
                                    <b>Keterangan Tambahan</b>
                                    <div><i aria-hidden="true" class="v-icon notranslate mdi mdi-chevron-down theme--light"></i></div>
                                </div>
                                <div class="mt-2 intensitiesDetail" style="overflow-x: auto;">
                                    <div>-</div>
                                    <br />
                                </div>
                            </div>
                            <div class="pa-3 rounded-lg elevation-3 mb-3" style="cursor: pointer;">
                                <div class="d-flex justify-space-between">
                                    <b>Ketinggian Bangunan</b>
                                    <div><i aria-hidden="true" class="v-icon notranslate mdi mdi-chevron-down theme--light"></i></div>
                                </div>
                                <div class="mt-2 intensitiesDetail" style="overflow-x: auto;">
                                    <pre>
1. Tinggi  permukaan lantai (persil) bangunan harus disesuaikan dengan persil bangunan di sekitarnya;
  2. Ketinggian Maksimum harus sesuai dengan KLB yang ditetapkan.
                                    </pre>
                                    <br />
                                </div>
                            </div>
                            <div class="pa-3 rounded-lg elevation-3 mb-3" style="cursor: pointer;">
                                <div class="d-flex justify-space-between">
                                    <b>Koefisien Tapak Basement</b>
                                    <div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px; color: rgb(0, 0, 0);"></button>
                                        <i aria-hidden="true" class="v-icon notranslate mdi mdi-chevron-right theme--light"></i>
                                    </div>
                                </div>
                                <div class="mt-2 intensitiesDetail">
                                    <div>-</div>
                                    <br />
                                </div>
                            </div>
                            <div class="pa-3 rounded-lg elevation-3 mb-3" style="cursor: pointer;">
                                <div class="d-flex justify-space-between">
                                    <b>Garis Sempadan Bangunan</b>
                                    <div>
                                        <button type="button" class="v-icon notranslate v-icon--link mdi mdi-information theme--light" style="font-size: 16px; color: rgb(0, 0, 0);"></button>
                                        <i aria-hidden="true" class="v-icon notranslate mdi mdi-chevron-down theme--light"></i>
                                    </div>
                                </div>
                                <div class="mt-2 intensitiesDetail" style="overflow-x: auto;">
                                    <pre>
1. GSB depan:
  
    a. Jalan Kolektor Primer I: minimum 12 (dua belas) meter;
    b. Jalan Kolektor Primer II: minimum 10 (sepuluh) meter;
    c. Jalan Kolektor III: minimum 6 (enam) meter;
    d. Jalan Lokal: minimum 4 (empat) meter;
    e. Jalan Lingkungan: minimum 4 (empat) meter;
    f. Jalan setapak, Lorong dan gang buntu: minimum 2 (dua) meter;
    g. GSB Depan diukur dari Rumija/Rencana Rumija.
  2. GSB samping:
  
    a. GSB samping untuk bangunan berlantai 1 (satu) minimum 2 (dua) meter dan setiap kenaikan satu lantai bangunan gedung ditambah 0,5 (setengah) meter sampai mencapai jarak bebas terjauh minimum 4 (empat) meter dari batas persil;
    b. GSB Samping pada bangunan deret berlaku pada unit paling ujung dari bangunan deret.
  3. GSB belakang untuk bangunan berlantai 1 (satu) minimum 2 (dua) meter dan setiap kenaikan satu lantai bangunan gedung ditambah 0,5 (setengah) meter sampai mencapai jarak bebas terjauh minimum 4 (empat) meter dari batas persil.
                                    </pre>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>



        <script src="../vendor/oltb/proj4.js"></script>
        <script src="../vendor/oltb/oltb.min.js"></script>
        <script src="../vendor/oltb/map.js"></script>
        <script src="../vendor/oltb/notify.js"></script>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Y:\Project\2024\klikpr2\ori\laravel-starter-main\resources\views/backend/peta/index.blade.php ENDPATH**/ ?>