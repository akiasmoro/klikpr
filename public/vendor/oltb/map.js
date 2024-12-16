const serverPort = 'geoserver.akiasmoro.com';
const geoserverWorkspace = 'klikpr';
const layerPolaruang = 'pola_ruang';



proj4.defs('EPSG:32748','+proj=utm +zone=48 +south +datum=WGS84 +units=m +no_defs +type=crs');
ol.proj.proj4.register(proj4);


const map = new ol.Map({
    interactions: ol.interaction.defaults.defaults({
        mouseWheelZoom: true,
        altShiftDragRotate: false,
        dragPan: false,
        keyboard: false
    }),
    controls: ol.control.defaults.defaults({
        zoom: false, 
        rotate: false
    }),
    view: new ol.View({
        projection: ol.proj.get(oltb.ConfigManager.getConfig().projection.default),
    }),
});


oltb.LayerManager.addMapLayers([
    {
        name: 'Open Street Map',
        layer: new ol.layer.Tile({
            source: new ol.source.OSM({
                crossOrigin: 'anonymous',
            }),
            visible: true
        })
    }, 
    {
        name: 'Google Satellite Map',
        layer: new ol.layer.Tile({
            source: new ol.source.XYZ({
                crossOrigin: 'anonymous',
                attributions: 'Tiles © <a href="#">Google Satellite</a>',
                url:'http://mt0.google.com/vt/lyrs=y&hl=en&x={x}&y={y}&z={z}'
            }),
            visible: false
        })
    },{
        name: 'ArcGIS World Topo',
        layer: new ol.layer.Tile({
            source: new ol.source.XYZ({
                crossOrigin: 'anonymous',
                attributions: 'Tiles © <a href="#">ArcGIS</a>',
                url:'https://server.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}'
            }),
            visible: false
        })
    },{
        name: 'Pola Ruang',
        layer: new ol.layer.Tile({
            source: new ol.source.TileWMS({
                url: 'https://' + serverPort + '/geoserver/' + geoserverWorkspace + '/wms?SERVICE=WMS&VERSION=1.3.0&REQUEST=GetMap&TRANSPARENT=true&FORMAT=image/png&TILED=true&LAYERS='+geoserverWorkspace+':'+layerPolaruang+'',
                serverType: 'geoserver',
                crossOrigin: 'anonymous'
            }),
            visible: true
        })
    }
], {
    isSilent: true
});








const wmsSource = new ol.source.TileWMS({
    url: 'https://' + serverPort + '/geoserver/wms',
    params: {'LAYERS': ''+geoserverWorkspace+':'+layerPolaruang+''},
    serverType: 'geoserver',
    crossOrigin: 'anonymous',
})

const legendSource = 'https://' + serverPort + '/geoserver/wms?REQUEST=GetLegendGraphic&VERSION=1.1.0&FORMAT=image/png&transparent=true&LAYER=klikpr:pola_ruang&LAYER='+geoserverWorkspace+':'+layerPolaruang+''
$("#legendaimg").html('<img id="legend" src="'+legendSource+'" width="80%" height="80%">')




const view = new ol.View({
    center: [0, 0],
    zoom: 1,
    projection: 'EPSG:4326'
  });

  



map.on('singleclick', function (evt) {
    const viewResolution =(view.getResolution());
    const titik = ol.proj.transform(evt.coordinate, ol.proj.get(oltb.ConfigManager.getConfig().projection.default), 'EPSG:32748');
    const lanlot = ol.proj.transform(evt.coordinate, ol.proj.get(oltb.ConfigManager.getConfig().projection.default), 'EPSG:4326');
    var lon = lanlot[0].toFixed(5);;
    var lat = lanlot[1].toFixed(5);;
    const url = wmsSource.getFeatureInfoUrl(
       titik,
       viewResolution,
      'EPSG:32748',
      {'INFO_FORMAT': 'application/json'},
    );

    $(".loader").removeClass("loader-active");

    if (url) {
      fetch(url)
      .then(function (response) {
        return response.text();
      })
      .then(function (json){
        let data = JSON.parse(json);
        let feature = data.features[0];
        let numberReturned = data.numberReturned;
        
        if (numberReturned > 0) {
            $("#sidebarRight").removeClass("hide");
            $("#sidebarRight").addClass("show");

            let props = feature.properties;
            $('#datakoor').empty();
            $('#datakoor').addClass('loader-active');
            $('#datakoor').append(lat+', '+lon);
    
            $('#dataprov').empty();
            $('#dataprov').addClass('loader-active');
            $('#dataprov').append(''+ props.wadmpr +'')
    
            $('#datakota').empty();
            $('#datakota').addClass('loader-active');
            $('#datakota').append(''+ props.wadmkk +'');
    
            $('#datakeca').empty();
            $('#datakeca').addClass('loader-active');
            $('#datakeca').append(''+ props.wadmkc +'');

            $('#datakode').empty();
            $('#datakode').addClass('loader-active');
            $('#datakode').append(''+ props.kodkws +'');

            $('#datapola').empty();
            $('#datapola').addClass('loader-active');
            $('#datapola').append(''+ props.namobj +'');

            $('#datajenisp').empty();
            $('#datajenisp').addClass('loader-active');
            $('#datajenisp').append(''+ props.jnsrpr +'');

            $('#datakp2b').empty();
            $('#datakp2b').addClass('loader-active');
            $('#datakp2b').append(''+ props.kp2b +'');

            $('#datakrb').empty();
            $('#datakrb').addClass('loader-active');
            $('#datakrb').append(''+ props.krb +'');

            $('#dataresap').empty();
            $('#dataresap').addClass('loader-active');
            $('#dataresap').append(''+ props.resair	 +'');

            $('#panelku-izin').empty();
            $('#panelkk-izin').empty();



            if (props.namobj == 'Jalur Hijau'){
                
                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan meliputi:</b><br/>1. kegiatan pemanfaatan ruang untuk fungsi resapan air, rekreasi dan olahraga alam;<br/>2. kegiatan pemanfaatan ruang untuk tempat evakuasi bencana; dan<br/>3. penguatan dengan menggunakan tanaman keras terhadap tebing-tebing yang lebih tinggi dari 3 meter dengan kemiringan lebih besar dari 20%.  <hr>   <b>Kegiatan yang diperbolehkan bersyarat meliputi:</b><br/>1. kegiatan rekreasi, pembibitan tanaman, pendirian bangunan fasilitas umum dan kegiatan yang tidak mengganggu fungsi RTH kota; dan<br/>2. kegiatan pendukung rekreasi dengan konstruksi tidak permanen.<br/>3. kegiatan sektor informal diperkenankan dengan menyesuaikan perencanaan yang telah ditetapkan pemerintah.   <hr>   <b>Kegiatan yang tidak diperbolehkan meliputi:</b><br/>1. dilarang melakukan penebangan pohon tanpa seijin instansi atau pejabat yang berwenang;<br/>2. kegiatan sosial dan ekonomi yang mengganggu fungsi RTH; dan<br/>3. tidak diperkenankan melakukan alih fungsi lahan menjadi kegiatan budidaya, seperti mall, perkantoran, perumahan dan lainnya.   <hr>   Intensitas pemanfaatan ruang meliputi KDH minimal sebesar 90%, KDB maksimal sebesar 10%, KLB maksimal sebesar 0,1.  <hr>   <b>Sarana dan prasarana minimum meliputi :</b><br/>1. RTH taman kota, meliputi:<br/>a) jalur pedestrian dan sepeda yang dilengkapi dengan penerangan jalan serta petunjuk informasi;<br/>b) aksesibilitas untuk difabel sesuai standar yang berlaku untuk fasilitas bagi penyandang difabilitas;<br/>c) jaringan listrik, air bersih dan telekomunikasi;<br/>d) jaringan drainase; dan<br/>e) sistem jaringan pembuangan limbah dan jaringan dan pengelolaan persampahan.<br/>2. RTH taman kecamatan, meliputi:<br/>a) jalur pedestrian;<br/>b) aksesibilitas untuk difabel sesuai standar yang berlaku untuk fasilitas bagi penyandang difabilitas;<br/>c) jaringan listrik, air bersih dan telekomunikasi; dan<br/>d) pengelolaan persampahan.<br/>3. Pemakaman, meliputi:<br/>a) jalur pedestrian;78<br/>b) aksesibilitas untuk difabel sesuai standar yang berlaku untuk fasilitas bagi penyandang difabilitas;<br/>c) jaringan listrik; dan<br/>d) pengelolaan persampahan.<br/>4. Jalur Hijau<br/>a) penanda keselamatan jalur sempadan rel kereta api; dan<br/>b) jaringan listrik.');
            }




            if (props.namobj == 'Kawasan Cagar Budaya'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan, meliputi:</b><br/>1. pengembagan RTH di zona penyangga;<br/>2. kegiatan untuk kepentingan penelitian dan pengembangan, ilmu pengetahuan, serta pendidikan; <br/>3. kegiatan pelestarian budaya dan peninggalan sejarah; <br/>4. pemanfaatan lahan untuk lokasi evakuasi bencana; dan<br/>5. pengembangan sarana dan prasarana pendukung di zona penunjang.    <hr>   Kegiatan yang diperbolehkan bersyarat berupa pemanfaatan bangunan cagar budaya untuk mendukung kegiatan pariwisata  <hr>   Kegiatan yang tidak diperbolehkan, meliputi yaitu mengubah bentuk arsitektur bangunan cagar budaya di zona inti   <hr>   Intensitas pemanfaatan ruang meliputi KDH minimal sebesar 30%, KDB maksimal sebesar 50%, KLB maksimal sebesar 1,5.  <hr>   <b>Sarana dan prasarana minimum meliputi :</b> <br/>1. jaringan jalan yang dilengkapi dengan pedestrian danpenerangan jalan; <br/>2. jaringan listrik, air bersih dan telekomunikasi;<br/>3. jaringan drainase; dan<br/>4. sistem jaringan pembuangan limbah dan jaringan dan pengelolaan persampahan.');
            }



            if (props.namobj == 'Kawasan Ekosistem Mangrove'){

                $('#panelku-izin').append('Kegiatan yang diperbolehkan yaitu kegiatan perlindungan dan pengamanan hutan mangrove, dan/atau rehabilitasi hutan mangrove.    <hr>   Kegiatan yang diperbolehkan bersyarat yaitu kegiatan pendidikan, penelitian, ekowisata dan sarana pendukungnya  <hr>   Kegiatan yang tidak diperbolehkan yaitu menebang, membakar, memanfaatkan kayu, mengangkut, dan/atau memperdagangkan kayu yang berasal dari hutan mangrove');
            }


            if (props.namobj == 'Kawasan Fasilitas Umum dan Fasilitas Sosial'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan, meliputi:</b><br/>1. pemanfaatan ruang untuk kegiatan pembangunan fasilitas umum dan fasilitas sosial; dan<br/>2. kegiatan pembangunan prasarana dan sarana umum pendukung fasilitas umum dan fasilitas sosial. <hr>   Kegiatan yang diperbolehkan bersyarat berupa pembangunan infrastruktur energi, air bersih dan telekomunikasi.  <hr>   Kegiatan yang dilarang, yaitu kegiatan yang mengganggu pelayanan fasilitas sosial dan fasilitas umum.   <hr>   Intensitas pemanfaatan ruang meliputi KDH minimal sebesar 30%, KDB maksimal sebesar 70%, KLB maksimal sebesar 7.  <hr>   <b>Sarana dan prasarana minimum meliputi:</b> <br/>1. jaringan jalan, penerangan jalan dan pedestrian disertai tanda atau rambu keselamatan;  <br/>2. aksesibilitas untuk difabel;<br/>3. penyediaan jalur dan tempat evakuasi bencana;<br/>4. penyediaan fasilitas parkir');
            }



            if (props.namobj == 'Kawasan Hutan Lindung'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan pada zona hutan lindung,meliputi:</b><br/>1. kegiatan usaha pemanfaatan kawasan sesuai dengan ketentuan peraturan perundang-undangan bidang kehutanan;  <br/>2. kegiatan usaha pemanfaatan jasa lingkungan sesuai dengan ketentuan peraturan perundang-undangan bidang kehutanan; dan <br/>3. kegiatan pemungutan hasil hutan bukan kayu sesuai dengan ketentuan peraturan perundang-undangan bidang kehutanan.  <hr>   <b>Kegiatan yang diperbolehkan bersyarat, meliputi:</b><br/>1. penambangan dengan pola pertambangan bawah tanah dengan ketentuan dilarang mengakibatkan: <br/>a) turunnya permukaan tanah;  <br/>b) berubahnya fungsi pokok Kawasan Hutan secara permanen; dan/atau  <br/>c) terjadinya kerusakan akuifer air tanah.<br/>2. pemanfaatan ruang untuk kegiatan latihan militer tanpa mengurangi fungsi kawasan hutan dan tutupan vegetasi;<br/>3. kegiatan pendidikan dan pengembangan kehutanan, penelitian dan pelatihan kehutanan, serta religi dan budaya setempat dengan tidak mengubah bentang alam dan tidakmerusak unsur-unsur keseimbangan lingkungan; <br/>4. kegiatan pengelolaan sumber daya hutan yang berbasis pemberdayaan masyarakat yang dilakukan pengawasan pemerintah terkait;  <br/>5. penyediaan jalur dan tempat evakuasi bencana; dan<br/>6. penggunaan kawasan hutan untuk kepentingan pembangunan diluar kegiatan kehutanan sesuai denganperaturan perundang-undangan bidang kehutanan.   <hr>   b>Kegiatan yang tidak diperbolehkan, meliputi:</b> <br/>1. seluruh kegiatan yang berpotensi mengurangi luas kawasan hutan dan tutupan vegetasi; dan<br/>2. seluruh kegiatan yang berpotensi mengganggu dan merusak ekosistem kawasan hutan.  <hr>   Sarana dan prasarana minimum sesuai dengan ketentuan peraturan perundang-undangan bidang kehutanan.');
            }


            if (props.namobj == 'Kawasan Imbuhan Air Tanah'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan, meliputi:</b><br/>1. kegiatan perlindungan kawasan imbuhan air tanah; <br/>2. kegiatan budidaya yang diperkenankan adalah kegiatan wisata alam, budidaya tanaman keras, dan budidaya hasil hutan; dan<br/>3. pemanfaatan berupa kawasan budidaya hutan, pertanian lahan kering dan perkebunan/tanaman tahunan, tanaman perdu, tanaman tegakan tinggi, dan penutup tanah untuk melindungi pencemaran dan erosi terhadap air.  <hr>   <b>Kegiatan yang diperbolehkan bersyarat, meliputi:</b><br/>1. pemasangan jaringan kabel, listrik, telekomunikasi dan pipa air minum;<br/>2. penyediaan sarana dan prasarana pendukung kawasan sesuai ketentuan yang berlaku dengan intensitas KDB maksimum 30% dan KDH minimum 70%; <br/>3. pengembangan struktur alami dan struktur buatan untuk mencegah longsor/erosi dan mempertahankan bentuk mata air; <br/>4. kegiatan wisata yang terbatas hanya pada kegiatan wisata alam;<br/>5. kegiatan penunjang pariwisata alam sesuai ketentuan yang berlaku dengan intensitas KDB maksimum 30% dan KDH minimum 70%; <br/>6. kegiatan perumahan eksisting dengan tidak mengubah luasan dan tata masa bangunan; dan <br/>7. pada kawasan yang telah terbangun dikendalikan dengat tidak mengeluarkan izin pembangunan baru serta izin pertambangan baru.   <hr>   <b>Kegiatan yang tidak diperbolehkan, meliputi:</b>  <br/>1. tidak diperbolehkan pembangunan hunian baru; <br/>2. tidak diperbolehkan melakukan kegiatan penambangan; dan<br/>3. melakukan kegiatan pembuangan limbah baik padat, cair maupun limbah berbahaya <hr> <b>Sarana dan prasarana minimum meliputi:</b> <br/>1. jaringan listrik, jaringan air bersih; <br/>2. bangunan prasarana sumber daya air; dan<br/>3. fasilitas keamanan jalan inspeksi pada lokasi yang ditentukan sesuai standar yang ditentukan oleh instansi terkait.');
            }

            if (props.namobj == 'Kawasan Imbuhan Air Tanah'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan, meliputi:</b><br/>1. kegiatan perlindungan kawasan imbuhan air tanah; <br/>2. kegiatan budidaya yang diperkenankan adalah kegiatan wisata alam, budidaya tanaman keras, dan budidaya hasil hutan; dan<br/>3. pemanfaatan berupa kawasan budidaya hutan, pertanian lahan kering dan perkebunan/tanaman tahunan, tanaman perdu, tanaman tegakan tinggi, dan penutup tanah untuk melindungi pencemaran dan erosi terhadap air.  <hr>   <b>Kegiatan yang diperbolehkan bersyarat, meliputi:</b><br/>1. pemasangan jaringan kabel, listrik, telekomunikasi dan pipa air minum;<br/>2. penyediaan sarana dan prasarana pendukung kawasan sesuai ketentuan yang berlaku dengan intensitas KDB maksimum 30% dan KDH minimum 70%; <br/>3. pengembangan struktur alami dan struktur buatan untuk mencegah longsor/erosi dan mempertahankan bentuk mata air; <br/>4. kegiatan wisata yang terbatas hanya pada kegiatan wisata alam;<br/>5. kegiatan penunjang pariwisata alam sesuai ketentuan yang berlaku dengan intensitas KDB maksimum 30% dan KDH minimum 70%; <br/>6. kegiatan perumahan eksisting dengan tidak mengubah luasan dan tata masa bangunan; dan <br/>7. pada kawasan yang telah terbangun dikendalikan dengat tidak mengeluarkan izin pembangunan baru serta izin pertambangan baru.   <hr>   <b>Kegiatan yang tidak diperbolehkan, meliputi:</b>  <br/>1. tidak diperbolehkan pembangunan hunian baru; <br/>2. tidak diperbolehkan melakukan kegiatan penambangan; dan<br/>3. melakukan kegiatan pembuangan limbah baik padat, cair maupun limbah berbahaya <hr> <b>Sarana dan prasarana minimum meliputi:</b> <br/>1. jaringan listrik, jaringan air bersih; <br/>2. bangunan prasarana sumber daya air; dan<br/>3. fasilitas keamanan jalan inspeksi pada lokasi yang ditentukan sesuai standar yang ditentukan oleh instansi terkait.');

            }  


            if (props.namobj == 'Kawasan Pariwisata'){

                 $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan, meliputi:</b><br/>1. penyediaan jalur dan tempat evakuasi bencana;<br/>2. pengembangan sarana dan prasarana pendukung pariwisata; dan<br/>3. pengembangan ruang terbuka hijau.   <hr>   <b>Kegiatan yang diperbolehkan bersyarat, meliputi:</b><br/>1. industri kecil;<br/>2. kegiatan pertambangan;<br/>3. pengembangan budidaya pertanian; dan<br/>4. pembangunan perdagangan dan jasa, perumahan, dan perkantoran untuk menunjang kegiatan pariwisata dengan memperhatikan daya dukung dan daya tampung; <br/>5. pengembangan sarana dan prasarana wilayah.   <hr>   <b>Kegiatan yang tidak diperbolehkan, meliputi kegiatan sosial dan  ekonomi yang mengganggu fungsi kawasan.  <hr>   Intensitas pemanfaatan ruang meliputi KDH minimal sebesar  10%, KDB maksimal sebesar 60%, KLB maksimal sebesar 1,8.     <hr> <b>Sarana dan prasarana minimum meliputi:</b> <br/>1. infrastruktur dasar pengelolaan TPA;<br/>2. jaringan jalan, penerangan jalan dan tanda atau rambu  keselamatan; <br/>3. jaringan air bersih;<br/>4. jaringan energi dan listrik;<br/>5. jaringan telekomunikasi; <br/>6. jaringan drainase;<br/>7. sistem jaringan air limbah dan sistem pengelolaan sampah; <br/>8. instalasi Bahan Bakar Minyak (BBM);<br/>9. dermaga, kolam pelabuhan; dan<br/>10. pos jaga dan MC     ');
            }


             if (props.namobj == 'Kawasan Infrastruktur Perkotaan'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan, meliputi: </b><br/>1. pengembangan RTH; <br/>2. pengembangan sarana dan prasarana pendukung kawasan sesuai peraturan perundang-undangan;<br/>3. untuk infrastruktur perkotaan berupa TPA, meliputi: <br/>a) kantor pengelola;<br/>b) sarana dan prasarana penunjang kawasan;<br/>c) pengembangan pengelolaan TPA;<br/>d) kegiatan pengolahan limbah terpadu; dan  <br/>e) kegiatan pengoperasian TPA berupa kegiatan pemilahan, pengumpulan, pengelolaan dan pemrosesan akhir sampah, tempat mesin pengolah sampah, pengurungan lapis bersih, pemeliharaan TPA, industri terkait pengelolaan sampah dan kegiatan penunjang   operasional TPA. <br/>4. untuk infrastruktur perkotaan berupa pelabuhan perikanan pantai meliputi: <br/>a) kegiatan perkantoran pendukung kawasan;<br/>b) kegiatan permukiman nelayan di kawasan pelabuhan  perikanan pantai;<br/>c) industri pengolahan ikan dan industri penunjang  lainnya;<br/>d) kegiatan pengembangan infrastruktur pengendalian  abrasi dan infiltrasi air laut pada kawasan pelabuhan perikanan pantai; dan <br/>e) bangunan pengendali air pada kawasan pelabuhan perikanan pantai.  <hr>   <b>Kegiatan yang diperbolehkan bersyarat, meliputi:</b> <br/>1. kegiatan pariwisata; dan<br/>2. kegiatan penunjang transportasi laut pada kawasan  infrastruktur perkotaan di wilayah pesisir.   <hr>   Kegiatan yang tidak diperbolehkan, meliputi kegiatan sosial dan  ekonomi yang mengganggu fungsi kawasan    <hr>   Intensitas pemanfaatan ruang meliputi KDH minimal sebesar  10%, KDB maksimal sebesar 60%, KLB maksimal sebesar 1,8.     <hr> <b>Sarana dan prasarana minimum meliputi:</b> <br/>1. infrastruktur dasar pengelolaan TPA;<br/>2. jaringan jalan, penerangan jalan dan tanda atau rambu  keselamatan; <br/>3. jaringan air bersih;<br/>4. jaringan energi dan listrik;<br/>5. jaringan telekomunikasi; <br/>6. jaringan drainase;<br/>7. sistem jaringan air limbah dan sistem pengelolaan sampah; <br/>8. instalasi Bahan Bakar Minyak (BBM);<br/>9. dermaga, kolam pelabuhan; dan<br/>10. pos jaga dan MC   ');
            }



            if (props.namobj == 'Kawasan Pariwisata'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan, meliputi:</b><br/>1. penyediaan jalur dan tempat evakuasi bencana;<br/>2. pengembangan sarana dan prasarana pendukung pariwisata; dan<br/>3. pengembangan ruang terbuka hijau.  <hr>   <b>Kegiatan yang diperbolehkan bersyarat, meliputi:</b><br/>1. industri kecil;<br/>2. kegiatan pertambangan;<br/>3. pengembangan budidaya pertanian; dan<br/>4. pembangunan perdagangan dan jasa, perumahan, dan perkantoran untuk menunjang kegiatan pariwisata dengan memperhatikan daya dukung dan daya tampung; <br/>5. pengembangan sarana dan prasarana wilayah.   <hr>   Kegiatan yang dilarang pada kawasan pariwisata, meliputi:</b><br/>1. kegiatan yang menimbulkan dampak negatif terhadap lingkungan; dan   <br/>2. industri menengah dan industri besar.    <hr>   Intensitas pemanfaatan ruang meliputi KDH minimum sebesar 50%, KDB maksimal sebesar 50%, KLB maksimal sebesar 6 di kawasan wisata pantai dan KLB maksimal 3 di kawasan wisata lainnya.     <hr> <b>Sarana dan prasarana minimum meliputi:</b><br/>1. jaringan jalan, penerangan jalan dan pedestrian dengan kontruksi yang bisa menyerap air dan disertai tanda atau rambu keselamatan; <br/>2. penyediaan sumber air baku pariwisata;<br/>3. jaringan energi dan kelistrikan; <br/>4. area parkir kendaraan; <br/>5. jaringan telekomunikasi;<br/>6. sistem pengelolaan air limbah (sesuai dengan ketentuan dan persyaratan teknis yang berlaku;<br/>7. aksesibilitas untuk difabel;<br/>8. jaringan drainase; dan<br/>9. pengelolaan persampahan. ');
            }


            if (props.namobj == 'Kawasan Pariwisata'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan, meliputi:</b><br/>1. penyediaan jalur dan tempat evakuasi bencana;<br/>2. pengembangan sarana dan prasarana pendukung pariwisata; dan<br/>3. pengembangan ruang terbuka hijau.  <hr>   <b>Kegiatan yang diperbolehkan bersyarat, meliputi:</b><br/>1. industri kecil;<br/>2. kegiatan pertambangan;<br/>3. pengembangan budidaya pertanian; dan<br/>4. pembangunan perdagangan dan jasa, perumahan, dan perkantoran untuk menunjang kegiatan pariwisata dengan memperhatikan daya dukung dan daya tampung; <br/>5. pengembangan sarana dan prasarana wilayah.   <hr>   Kegiatan yang dilarang pada kawasan pariwisata, meliputi:</b><br/>1. kegiatan yang menimbulkan dampak negatif terhadap lingkungan; dan   <br/>2. industri menengah dan industri besar.    <hr>   Intensitas pemanfaatan ruang meliputi KDH minimum sebesar 50%, KDB maksimal sebesar 50%, KLB maksimal sebesar 6 di kawasan wisata pantai dan KLB maksimal 3 di kawasan wisata lainnya.     <hr> <b>Sarana dan prasarana minimum meliputi:</b><br/>1. jaringan jalan, penerangan jalan dan pedestrian dengan kontruksi yang bisa menyerap air dan disertai tanda atau rambu keselamatan; <br/>2. penyediaan sumber air baku pariwisata;<br/>3. jaringan energi dan kelistrikan; <br/>4. area parkir kendaraan; <br/>5. jaringan telekomunikasi;<br/>6. sistem pengelolaan air limbah (sesuai dengan ketentuan dan persyaratan teknis yang berlaku;<br/>7. aksesibilitas untuk difabel;<br/>8. jaringan drainase; dan<br/>9. pengelolaan persampahan. ');
            }

            if (props.namobj == 'Kawasan Perdagangan dan Jasa'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan, meliputi:</b><br/>1. kegiatan pembangunan perdagangan dan jasa skala regional, skala kota dan skala lokal;<br/>2. kegiatan pembangunan prasarana dan sarana umum pendukung kegiatan perdagangan dan jasa;<br/>3. kegiatan pengembangan infrastruktur pengendalian abrasi dan infiltrasi air laut pada kawasan perdagangan dan jasa di wilayah pesisir;  <br/>4. bangunan pengendali air; dan<br/>5. penyediaan jalur dan tempat evakuasi bencana.  <hr>   <b>Kegiatan yang diperbolehkan bersyarat, meliputi:</b><br/>1. kegiatan hunian yang telah dibangun sebelum Perda RTRW ini berlaku;<br/>2. kegiatan pemanfaatan ruang untuk mendukung kegiatan perdagangan dan jasa skala regional, skala kota dan lokal;<br/>3. kegiatan hunian;<br/>4. fasilitas umum dan fasilitas sosial;<br/>5. pembangunan infrastruktur energi, air bersih dan telekomunikasi; dan<br/>6. kegiatan penunjang transportasi laut pada kawasan perdagangan dan jasa di wilayah pesisir.   <hr>   Kegiatan yang dilarang, berupa kegiatan yang mengganggu kawasan perdagangan dan jasa.    <hr>   Intensitas pemanfaatan ruang meliputi KDH minimal sebesar 20%, KDB maksimal sebesar 80%, KLB maksimal sebesar 32.     <hr> <b>Sarana dan prasarana minimum meliputi: </b><br/>1. jaringan jalan, penerangan jalan dan pedestrian, dan tanda atau rambu keselamatan;  <br/>2. fasilitas parkir;<br/>3. jaringan air bersih;<br/>4. jaringan energi dan listrik;<br/>5. jaringan telekomunikasi; <br/>6. jaringan drainase;<br/>7. sistem jaringan air limbah dan sistem pengelolaan sampah; dan<br/>8. aksesibilitas untuk difabel. ');
            }

            if (props.namobj == 'Kawasan Perikanan Budidaya'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan, meliputi:</b><br/>1. kegiatan mendirikan bangunan penunjang budidaya perikanan,perikanan organik, pengolahan dan pemasaran hasil perikanan,penelitian dan wisata;<br/>2. pengembangan sarana dan prasarana pendukung budidaya ikandan perikanan lainnya.  <hr>   <b>Kegiatan yang diperbolehkan bersyarat, meliputi:</b><br/>1. pengembangan industri pendukung pengembangan perikanan yang tidak mengganggu lingkungan;<br/>2. pengembangan perumahan berkepadatan rendah yang tidak mengganggu fungsi utama;<br/>3. kegiatan wisata alam yang berbasis ekowisata; dan<br/>4. kegiatan pengembangan sarana dan prasarana wilayah.   <hr>   Kegiatan yang tidak diperbolehkan yaitu pengembangan kegiatan yang berpotensi mencemari lingkungan pada kawasan yang ditetapkan sebagai kawasan perikanan budidaya.    <hr>   Intensitas pemanfaatan ruang meliputi KDH minimal sebesar 40%, KDB maksimal sebesar 60%, KLB maksimal sebesar 1,2.     <hr>   <b>Sarana dan prasarana minimum meliputi:</b><br/>1. jaringan jalan;<br/>2. jaringan air bersih;<br/>3. jaringan listrik;<br/>4. sistem jaringan limbah terpadu; dan<br/>5. jaringan drainase ');
            }

            if (props.namobj == 'Kawasan Perkantoran'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan, meliputi:</b><br/>1. pemanfaatan ruang untuk kegiatan pembangunan perkantoran;87<br/>2. kegiatan pembangunan prasarana dan sarana umumpendukung perkantoran; dan<br/>3. penyediaan jalur dan tempat evakuasi bencana.  <hr>   <b>Kegiatan yang diperbolehkan bersyarat, meliputi:</b><br/>1. kegiatan perumahan;<br/>2. kegiatan perdagangan dan jasa; dan<br/>3. pembangunan sarana dan prasarana wilayah.   <hr>   Kegiatan yang dilarang, yaitu kegiatan industri, kegiatan lainnyayang mengakibatkan terganggunya fungsi kawasan perkantoran.    <hr>   Intensitas pemanfaatan ruang meliputi KDH minimal sebesar 20%,KDB maksimal sebesar 80%, KLB maksimal sebesar 16.     <hr> <b>Sarana dan prasarana minimum meliputi:</b><br/>1. jaringan jalan, penerangan jalan dan pedestrian disertai tandaatau rambu keselamatan;<br/>2. jaringan air bersih;<br/>3. jaringan energi dan listrik;<br/>4. jaringan telekomunikasi;<br/>5. jaringan drainase; dan<br/>6. sistem jaringan air limbah dan sistem pengelolaan sampah ');
            }

            if (props.namobj == 'Kawasan Perlindungan Setempat'){

                $('#panelku-izin').append('<b>a. Ketentuan umum zonasi sempadan sungai meliputi:</b><br/>kegiatan yang diperbolehkan, meliputi:<br/>a) pengembangan RTH;<br/>b) pembangunan dan pemeliharaan bangunan pengelolaan air dan/atau pemanfaatan air;<br/>c) kegiatan yang berhubungan dengan pelestarian sungai; dan<br/>d) kegiatan konservasi, penataan dan pembangunan yang mendukung fungsi kawasan sempadan sungai.<br/><br/><b>b. Ketentuan umum zonasi sempadan pantai meliputi:</b><br/>kegiatan yang diperbolehkan, meliputi: <br/>a) kegiatan pengembangan infrastruktur pengendalian abrasi dan infiltrasi air laut; <br/>b) pengembangan RTH; <br/>c) kegiatan penelitian dan bangunan pengendali air; dan<br/>d) pembangunan dan pengembangan jalur serta evakuasi bencana dan sistem peringatan dini.  <hr>   <b>a. Ketentuan umum zonasi sempadan sungai meliputi:</b><br/>kegiatan yang diperbolehkan bersyarat, meliputi:<br/>a) pengembangan sarana dan prasarana wilayah yang tidak merusak atau berdampak langsung terhadap badan sungai;<br/>b) pengembangan sistem pengendalian banjir;<br/>c) pemanfaatan ruang khusus seperti bangunan sumberdayaair, jembatan dan dermaga, jalur air minum, bangunan telekomunikasi dan listrik, serta vegetasi rumput padas empadan bertanggul dan tanaman keras pada sempadantidak bertanggul, penanaman tumbuhan pelindung;<br/>d) bangunan pengolahan limbah dan bahan pencemar lainnya;<br/>e) kegiatan pariwisata dengan tidak mengubah bentang alam dan tidak merusak unsur keseimbangan lingkungan;<br/>f) bangunan dalam sempadan sungai, dengan ketentuan status quo artinya tidak boleh diubah dan ditambah luasan; dan<br/>g) kegiatan pertambangan yang tidak merubah bentang sungai, dan mengganggu fungsi sungai.<br/><br/><b>b. Ketentuan umum zonasi sempadan pantai meliputi:</b><br/>kegiatan yang diperbolehkan bersyarat, meliputi: <br/>a) sarana pendukung pariwisata yang bersifat bangunan semi permanen yang disertai dengan kajian teknis dan tidak menutup akses publik ke pantai;  <br/>e) kegiatan pertahanan dan keamanan sesuai ketentuan perundang–undangan yang berlaku; dan <br/>b) kegiatan penunjang transportasi laut dan perikanan.   <hr>   Ketentuan umum zonasi sempadan sungai yang tidak diperbolehkan berupa hunian baru dan seluruh kegiatan dan bangunan yang mengancam kerusakan dan menurunkan kualitas sungai.<br/><br/>Ketentuan umum zonasi sempadan pantai yang tidak diperbolehkan berupa semua kegiatan yang berpotensi menyebabkan terjadinya kerusakan lingkungan dan penurunan fungsi sempadan pantai.    <hr>   Intensitas pemanfaatan ruang meliputi KDH minimal sebesar 85%.     <hr>    <b>a. Ketentuan umum zonasi sempadan sungai meliputi:</b><br/>sarana dan prasarana minimum meliputi :<br/>a) jalur inspeksi yang dilengkapi dengan sistem penerangan;dan<br/>b) tanggul sungai pada sungai yang melewati area perumahan.<br/>6. tanah pada kawasan ini dimiliki oleh negara dan apabilaterdapat izin yang dikeluarkan untuk bangunan yang ada dengan prosedur yang benar, maka dibebaskan dengan penggantian yang layak.<br/><br/><b>b. Ketentuan umum zonasi sempadan pantai meliputi:</b><br/>sarana dan prasarana minimum meliputi:<br/>a) jalur inspeksi yang dilengkapi dengan sistem penerangan; dan<br/>b) penyediaan jalur evakuasi bencana. <br/><br/>6. tanah pada kawasan ini dimiliki oleh negara dan apabila terdapat izin yang dikeluarkan untuk bangunan yang ada dengan prosedur yang benar, maka dibebaskan dengan penggantian yang layak atau relokasi. ');
            }

            if (props.namobj == 'Kawasan Pertahanan dan Keamanan'){

                $('#panelku-izin').append('Kegiatan yang diperbolehkan yaitu pembangunan dan pengembangan kawasan pertahanan dan keamanan serta pembangunan sarana dan prasarana pendukung sesuai dengan ketentuan peraturan perundang-undangan  <hr>   Kegiatan yang diperbolehkan bersyarat yaitu kegiatan budidaya terbatas di sekitar kawasan pertahanan dan keamanan sesuai dengan ketentuan peraturan perundang-undangan   <hr>   Kegiatan yang tidak diperbolehkan meliputi kegiatan yang mengganggu atau tidak sesuai dengan fungsi pertahanan dan keamanan sesuai dengan ketentuan peraturan perundang-undangan    <hr>   <b>Sarana dan prasarana minimum meliputi:</b>1. jaringan jalan, penerangan jalan dan pedestrian disertai tanda atau rambu keselamatan;<br/>2. fasilitas parkir;<br/>3. sistem jaringan air bersih;<br/>4. sistem pengelolaan air limbah;<br/>5. jaringan drainase;<br/>6. pengelolaan persampahan;<br/>7. jaringan energi dan listrik; dan<br/>8. jaringan telekomunikasi. ');
            }

            if (props.namobj == 'Kawasan Perumahan'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan, meliputi:</b><br/>1. pengembangan RTH;<br/>2. kegiatan pembangunan dan pengembangan perumahan;<br/>3. kegiatan pengembangan infrastruktur pengendalian abrasi dan infiltrasi air laut pada kawasan perumahan di pesisir;<br/>4. bangunan pengendali air; dan<br/>5. kegiatan pembangunan prasarana dan sarana lingkungan perumahan sesuai dengan standar, hierarki dan skala pelayanannya.  <hr>   <b>Kegiatan yang diperbolehkan bersyarat, meliputi:</b><br/>1. kegiatan perdagangan dan jasa, serta kegiatan perkantoran dengan mempertimbangkan kajian lalu lintas;<br/>2. industri kecil dan menengah;<br/>3. kegiatan pariwisata di kawasan pesisir;83<br/>4. kawasan perumahan yang dibangun diatas kemiringan 15% wajib menggunakan rekayasa konstruksi serta memiliki KDH minimal 40%, KDB maksimal 60%, KLB Maksimal 1,2; dan<br/>5. kegiatan penunjang transportasi laut pada kawasan perumahan di wilayah pesisir.   <hr>   Kegiatan yang dilarang, berupa kegiatan yang mempunyai intensitas besar yang mengganggu fungsi kawasan perumahan.    <hr>   Intensitas pemanfaatan ruang meliputi KDH minimal sebesar 20%, KDB maksimal sebesar 80%, KLB maksimal sebesar 8.     <hr> <b>Sarana dan prasarana minimum meliputi:</b><br/>1. penyediaan RTH minimal 10% dari luas kawasan perumahan yang dibangun oleh pengembang;<br/>2. jaringan jalan, penerangan jalan;<br/>3. jaringan air bersih;<br/>4. penyediaan sumur resapan air;<br/>5. penyediaan jalur evakuasi bencana dan tempat evakuasi bencana;<br/>6. jaringan telekomunikasi;<br/>7. jaringan energi dan listrik;<br/>8. jaringan drainase;<br/>9. sistem jaringan air limbah; dan<br/>10. sistem pengelolaan sampah. ');
            }
        
            if (props.namobj == 'Kawasan Peruntukan Industri'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan, meliputi:</b><br/>1. pengembangan RTH dan jalur hijau sebagai penyangga fungsi antar kawasan;<br/>2. kegiatan pengembangan infrastruktur pengendalian abrasi dan  infiltrasi air laut pada kawasan peruntukan industri di wilayah pesisir;<br/>3. bangunan pengendali air; dan<br/>4. pengembangan sarana dan prasarana wilayah.  <hr>   <b>Kegiatan yang diperbolehkan bersyarat, meliputi:</b><br/>1. pembangunan permukiman perkotaan dan perkantoran;<br/>2. pengembangan/pembangunan sarana pendukung industri lainnya; dan<br/>3. kegiatan pertambangan mineral non logam, dan pertambangan batuan;<br/>4. kegiatan penunjang transportasi laut pada kawasan peruntukan  industri di wilayah pesisir; dan<br/>5. melakukan daur ulang air dan/atau penggunaan kembali air, mengolah air limbah sesuai dengan baku mutu yang dipersyaratkan, mengelola seluruh limbah yang ditimbulkan (emisi udara dan limbah B3), mengintegrasikan pengelolaan air  limbah air dengan rencana IPAL terpadu.     <hr>      <b>Sarana dan prasarana minimum meliputi:</b><br/>1. penyediaan RTH minimal 10% dari luas kawasan;<br/>2. jaringan jalan dilengkapi dengan pedestrian dan perambuan;<br/>3. penyediaan sumber air baku industri;<br/>4. jaringan energi dan kelistrikan;<br/>5. jaringan telekomunikasi;<br/>6. sistem pengelolaan air limbah sesuai dengan ketentuan dan persyaratan teknis yang berlaku untuk kawasan peruntukan industri;<br/>7. jaringan drainase;<br/>8. pengelolaan persampahan; dan<br/>9. penyediaaan fasilitas pemadam kebakaran untuk kawasan industri. ');
            }

            if (props.namobj == 'Kawasan Peruntukan Pertambangan Batuan'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan, meliputi: </b><br/>1. kegiatan penggalian, pengerukan pasir industri, pemotongan batu;<br/>2. kegiatan pemecahan dan penghancuran batu dan kerikil, serta penghalusan batu kasar; dan<br/>3. kegiatan pasca tambang wajib dilakukan rehabilitasi (reklamasi dan/atau revitalisasi) sehingga dapat digunakan kembali untuk kegiatan lain, seperti ruang terbuka hijau, permukiman, pertanian, kehutanan, pariwisata dan lain sebagainya.    <hr>   <b>Kegiatan yang diperbolehkan bersyarat berupa kegiatan permukiman dengan jarak dari kegiatan eksploitasi antara 1 (satu) kilometer sampai dengan 2 (dua) kilometer bila menggunakan  bahan peledak, dan paling sedikit berjarak 500 (lima ratus) meter bila tanpa peledakan, untuk menghindari bahaya yang diakibatkan oleh gerakan tanah, pencemaran udara, serta kebisingan akibat lalumlintas pengangkutan bahan galian, mesin pemecah batu, dan ledakan dinamit.   <hr>   Kegiatan yang tidak diperbolehkan meliputi kegiatan pertambanganmyang secara teknis, ekologis, sosial dan/atau budaya menimbulkanmkerusakan lingkungan, pencemaran lingkungan atau merugikan masyarakat sekitarnya.    <hr>   Intensitas pemanfaatan ruang meliputi KDH minimal sebesar 40%,KDB maksimal sebesar 60%, KLB maksimal sebesar 1,2.     <hr> <b>Sarana dan prasarana minimum meliputi:</b><br/>1. sarana dan prasarana pendukung kegiatan pertambangan;<br/>2. jaringan energi dan listrik;<br/>3. penyediaan sumber air baku pertambangan; dan<br/>4. jaringan jalan. ');
            }

            if (props.namobj == 'Kawasan Ruang Terbuka Non Hijau'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan meliputi kegiatan pemanfaatanruang untuk kegiatan berlangsungnya aktifitas masyarakat, kegiatan olahraga, kegiatan rekreasi, penyediaan plasa, monumen, tempat evakuasi bencana dan landmark.  <hr>   <b>Kegiatan yang diperbolehkan dengan syarat meliputi</b><br/>1. kegiatan perdagangan dan jasa;<br/>2. kegiatan pemanfaatan ruang untuk sektor informal secara terbatas untuk menunjang kegiatan sebagaimana dimaksud huruf a; dan<br/>3. pembangunan sarana dan prasarana wilayah.   <hr>   Kegiatan yang tidak diperbolehkan meliputi kegiatan yang mengganggu kegiatan kawasan ruang terbuka non hijau.    <hr>   Intensitas pemanfaatan ruang meliputi KDH minimal sebesar 30%, KDB maksimal sebesar 70%, KLB maksimal sebesar 1,4.     <hr> <b>Sarana dan prasarana minimum meliputi :</b><br/>1. jaringan jalan, penerangan jalan dan pedestrian disertai tanda atau rambu keselamatan;<br/>2. fasilitas parkir;<br/>3. fasilitas sanitasi;<br/>4. sistem pengelolaan sampah; dan<br/>5. aksesibilitas untuk difabel.');
            }

            if (props.namobj == 'Kawasan Tanaman Pangan'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan, meliputi: </b><br/>1. aktifitas pendukung pertanian;<br/>2. kegiatan pariwisata berbasis pertanian;<br/>3. kegiatan pelestarian sumber daya air;  <hr>   <b>Kegiatan yang diperbolehkan bersyarat, meliputi:<br/>1. pengembangan sarana dan prasarana pendukung pengembangan pertanian tanaman pangan dengan memperhatikan daya dukung kawasan; </b><br/>2. kegiatan industri pengolahan hasil pertanian tanaman pangan;<br/>3. pengembangan perumahan berkepadatan rendah yang tidak mengganggu fungsi utama;<br/>4. kegiatan perikanan budidaya pada lahan yang tidak termasuk ke dalam KP2B;<br/>5. kegiatan peternakan yang tidak mencemari lingkungan pada lahan yang tidak termasuk KP2B;<br/>6. pengembangan teknik konservasi lahan pertanian yang bersifat ramah lingkungan dan berkelanjutan;<br/>7. pengembangan budidaya tanaman tahunan/perkebunan dan kebun campuran/ladang; dan<br/>8. kegiatan pengembangan sarana dan prasarana wilayah.   <hr>   Kegiatan yang tidak diperbolehkan, meliputi:</b><br/>1. pengembangan kegiatan yang berpotensi merusak kesuburan tanah dan mengurangi unsur hara yang dibutuhkan tanaman pangan;<br/>2. mendirikan bangunan yang mengganggu saluran irigasi; dan<br/>3. alih fungsi lahan yang telah ditetapkan sebagai kawasan KP2B kecuali pengadaan tanah untuk kepentingan umum dan terjadi bencana sesuai dengan peraturan perundang-undangan.    <hr>   Intensitas pemanfaatan ruang meliputi KDH minimal sebesar 90%,  KDB maksimal sebesar 10%, KLB maksimal sebesar 0,1.     <hr> <b>Sarana dan prasarana minimum meliputi :</b><br/>1. jaringan irigasi dan utilitas; dan<br/>2. jaringan jalan lingkungan untuk jalan usaha tani.');
            }

            if (props.namobj == 'Kawasan Transportasi'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan, meliputi:</b><br/>1. pengembangan RTH;<br/>2. kegiatan pengembangan infrastruktur pengendalian abrasi dan infiltrasi air laut pada transportasi laut;<br/>3. bangunan pengendali air pada transportasi laut;<br/>4. kegiatan operasional, penunjang operasional, dan pengembangan kawasan transportasi untuk mendukung pergerakan orang dan barang; dan<br/>5. penyediaan jalur dan tempat evakuasi bencana.  <hr>   <b>Kegiatan yang diperbolehkan bersyarat, meliputi kegiatan selain sebagaimana dimaksud dalam huruf a yang tidak mengganggu keamanan dan keselamatan lalu lintas.   <hr>   Kegiatan yang dilarang, yaitu kegiatan yang mengakibatkan terganggunya fungsi kawasan transportasi.    <hr>   Intensitas pemanfaatan ruang meliputi KDH minimal sebesar 20%, KDB maksimal sebesar 80%, KLB maksimal sebesar 8.     <hr> <b>Sarana dan prasarana minimum meliputi:</b><br/>1. jaringan jalan, penerangan jalan dan pedestrian disertai tanda atau rambu keselamatan;88<br/>2. jaringan air bersih;<br/>3. jaringan energi dan listrik;<br/>4. jaringan telekomunikasi;<br/>5. jaringan drainase;<br/>6. sistem jaringan air limbah dan sistem pengelolaan sampah; dan<br/>7. aksesibilitas untuk difabel.');
            }

            if (props.namobj == 'Pemakaman'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan meliputi:</b><br/>1. kegiatan pemanfaatan ruang untuk fungsi resapan air, rekreasi dan olahraga alam;<br/>2. kegiatan pemanfaatan ruang untuk tempat evakuasi bencana; dan<br/>3. penguatan dengan menggunakan tanaman keras terhadap tebing-tebing yang lebih tinggi dari 3 meter dengan kemiringan lebih besar dari 20%.  <hr>   <b>Kegiatan yang diperbolehkan bersyarat meliputi:</b><br/>1. kegiatan rekreasi, pembibitan tanaman, pendirian bangunan fasilitas umum dan kegiatan yang tidak mengganggu fungsi RTH kota; dan<br/>2. kegiatan pendukung rekreasi dengan konstruksi tidak permanen.<br/>3. kegiatan sektor informal diperkenankan dengan menyesuaikan perencanaan yang telah ditetapkan pemerintah.   <hr>   Kegiatan yang tidak diperbolehkan meliputi:</b><br/>1. dilarang melakukan penebangan pohon tanpa seijin instansi atau pejabat yang berwenang;<br/>2. kegiatan sosial dan ekonomi yang mengganggu fungsi RTH; dan<br/>3. tidak diperkenankan melakukan alih fungsi lahan menjadi kegiatan budidaya, seperti mall, perkantoran, perumahan dan lainnya.    <hr>   Intensitas pemanfaatan ruang meliputi KDH minimal sebesar 90%, KDB maksimal sebesar 10%, KLB maksimal sebesar 0,1.     <hr> <b>Sarana dan prasarana minimum meliputi :</b><br/>1. RTH taman kota, meliputi:<br/>a) jalur pedestrian dan sepeda yang dilengkapi dengan penerangan jalan serta petunjuk informasi;<br/>b) aksesibilitas untuk difabel sesuai standar yang berlaku untuk fasilitas bagi penyandang difabilitas;<br/>c) jaringan listrik, air bersih dan telekomunikasi;<br/>d) jaringan drainase; dan<br/>e) sistem jaringan pembuangan limbah dan jaringan dan pengelolaan persampahan.<br/>2. RTH taman kecamatan, meliputi:<br/>a) jalur pedestrian;<br/>b) aksesibilitas untuk difabel sesuai standar yang berlaku untuk fasilitas bagi penyandang difabilitas;<br/>c) jaringan listrik, air bersih dan telekomunikasi; dan<br/>d) pengelolaan persampahan.<br/>3. Pemakaman, meliputi:<br/>a) jalur pedestrian;78<br/>b) aksesibilitas untuk difabel sesuai standar yang berlaku untuk fasilitas bagi penyandang difabilitas;<br/>c) jaringan listrik; dan<br/>d) pengelolaan persampahan.<br/>4. Jalur Hijau<br/>a) penanda keselamatan jalur sempadan rel kereta api; dan<br/>b) jaringan listrik.');
            }

            if (props.namobj == 'Taman Hutan Raya'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan, meliputi:</b><br/>1. penelitian dan pengembangan ilmu pengetahuan dan teknologi;<br/>2. pendidikan dan peningkatan kesadartahuan konservasi;<br/>3. koleksi kekayaan keanekaragaman hayati;74<br/>4. penyimpanan dan/atau penyerapan karbon, pemanfaatan air, energi air, angin, panas matahari, panas bumi, dan wisata alam;<br/>5. pemanfaatan tumbuhan dan satwa liar dalam rangka menunjang budidaya dalam bentuk penyediaan Plasma Nutfah;<br/>6. pemanfaatan tradisional oleh masyarakat setempat; dan<br/>7. pembinaan populasi melalui Penangkaran dalam rangka pengembangbiakan satwa atau perbanyakan tumbuhan secara buatan dalam lingkungan yang semi alami.  <hr>   <b>Kegiatan yang diperbolehkan bersyarat, meliputi:</b><br/>1. pemanfaatan ruang untuk kegiatan latihan militer tanpa mengurangi fungsi kawasan hutan dan tutupan vegetasi;<br/>2. diperbolehkan terbatas pendirian bangunan yang merupakan bagian dari suatu jaringan atau transmisi bagi kepentingan umum yang keberadaannya telah mendapat persetujuan dari instansi terkait; dan<br/>3. pengembangan RTH yang tetap memperhatikan fungsi konservasi.   <hr>   Kegiatan yang tidak diperbolehkan, meliputi:</b><br/>1. seluruh kegiatan yang berpotensi mengurangi luas taman hutan raya dan tutupan vegetasi; dan<br/>2. seluruh kegiatan yang berpotensi mengganggu dan merusak ekosistem taman hutan raya.    <hr>    <b>Sarana dan prasarana minimum sesuai dengan ketentuan perundang-undangan bidang kehutanan.');
            }

            if (props.namobj == 'Taman Kecamatan'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan meliputi:</b><br/>1. kegiatan pemanfaatan ruang untuk fungsi resapan air, rekreasi dan olahraga alam;<br/>2. kegiatan pemanfaatan ruang untuk tempat evakuasi bencana; dan<br/>3. penguatan dengan menggunakan tanaman keras terhadap tebing-tebing yang lebih tinggi dari 3 meter dengan kemiringan lebih besar dari 20%.  <hr>   <b>Kegiatan yang diperbolehkan bersyarat meliputi:</b><br/>1. kegiatan rekreasi, pembibitan tanaman, pendirian bangunan fasilitas umum dan kegiatan yang tidak mengganggu fungsi RTH kota; dan<br/>2. kegiatan pendukung rekreasi dengan konstruksi tidak permanen.<br/>3. kegiatan sektor informal diperkenankan dengan menyesuaikan perencanaan yang telah ditetapkan pemerintah.   <hr>   Kegiatan yang tidak diperbolehkan meliputi:</b><br/>1. dilarang melakukan penebangan pohon tanpa seijin instansi atau pejabat yang berwenang;<br/>2. kegiatan sosial dan ekonomi yang mengganggu fungsi RTH; dan<br/>3. tidak diperkenankan melakukan alih fungsi lahan menjadi kegiatan budidaya, seperti mall, perkantoran, perumahan dan lainnya.    <hr>   Intensitas pemanfaatan ruang meliputi KDH minimal sebesar 90%, KDB maksimal sebesar 10%, KLB maksimal sebesar 0,1.     <hr> <b>Sarana dan prasarana minimum meliputi :</b><br/>1. RTH taman kota, meliputi:<br/>a) jalur pedestrian dan sepeda yang dilengkapi dengan penerangan jalan serta petunjuk informasi;<br/>b) aksesibilitas untuk difabel sesuai standar yang berlaku untuk fasilitas bagi penyandang difabilitas;<br/>c) jaringan listrik, air bersih dan telekomunikasi;<br/>d) jaringan drainase; dan<br/>e) sistem jaringan pembuangan limbah dan jaringan dan pengelolaan persampahan.<br/>2. RTH taman kecamatan, meliputi:<br/>a) jalur pedestrian;<br/>b) aksesibilitas untuk difabel sesuai standar yang berlaku untuk fasilitas bagi penyandang difabilitas;<br/>c) jaringan listrik, air bersih dan telekomunikasi; dan<br/>d) pengelolaan persampahan.<br/>3. Pemakaman, meliputi:<br/>a) jalur pedestrian;78<br/>b) aksesibilitas untuk difabel sesuai standar yang berlaku untuk fasilitas bagi penyandang difabilitas;<br/>c) jaringan listrik; dan<br/>d) pengelolaan persampahan.<br/>4. Jalur Hijau<br/>a) penanda keselamatan jalur sempadan rel kereta api; dan<br/>b) jaringan listrik.');
            }

            if (props.namobj == 'Taman Kota'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan meliputi:</b><br/>1. kegiatan pemanfaatan ruang untuk fungsi resapan air, rekreasi dan olahraga alam;<br/>2. kegiatan pemanfaatan ruang untuk tempat evakuasi bencana; dan<br/>3. penguatan dengan menggunakan tanaman keras terhadap tebing-tebing yang lebih tinggi dari 3 meter dengan kemiringan lebih besar dari 20%.  <hr>   <b>Kegiatan yang diperbolehkan bersyarat meliputi:</b><br/>1. kegiatan rekreasi, pembibitan tanaman, pendirian bangunan fasilitas umum dan kegiatan yang tidak mengganggu fungsi RTH kota; dan<br/>2. kegiatan pendukung rekreasi dengan konstruksi tidak permanen.<br/>3. kegiatan sektor informal diperkenankan dengan menyesuaikan perencanaan yang telah ditetapkan pemerintah.   <hr>   Kegiatan yang tidak diperbolehkan meliputi:</b><br/>1. dilarang melakukan penebangan pohon tanpa seijin instansi atau pejabat yang berwenang;<br/>2. kegiatan sosial dan ekonomi yang mengganggu fungsi RTH; dan<br/>3. tidak diperkenankan melakukan alih fungsi lahan menjadi kegiatan budidaya, seperti mall, perkantoran, perumahan dan lainnya.    <hr>   Intensitas pemanfaatan ruang meliputi KDH minimal sebesar 90%, KDB maksimal sebesar 10%, KLB maksimal sebesar 0,1.     <hr> <b>Sarana dan prasarana minimum meliputi :</b><br/>1. RTH taman kota, meliputi:<br/>a) jalur pedestrian dan sepeda yang dilengkapi dengan penerangan jalan serta petunjuk informasi;<br/>b) aksesibilitas untuk difabel sesuai standar yang berlaku untuk fasilitas bagi penyandang difabilitas;<br/>c) jaringan listrik, air bersih dan telekomunikasi;<br/>d) jaringan drainase; dan<br/>e) sistem jaringan pembuangan limbah dan jaringan dan pengelolaan persampahan.<br/>2. RTH taman kecamatan, meliputi:<br/>a) jalur pedestrian;<br/>b) aksesibilitas untuk difabel sesuai standar yang berlaku untuk fasilitas bagi penyandang difabilitas;<br/>c) jaringan listrik, air bersih dan telekomunikasi; dan<br/>d) pengelolaan persampahan.<br/>3. Pemakaman, meliputi:<br/>a) jalur pedestrian;78<br/>b) aksesibilitas untuk difabel sesuai standar yang berlaku untuk fasilitas bagi penyandang difabilitas;<br/>c) jaringan listrik; dan<br/>d) pengelolaan persampahan.<br/>4. Jalur Hijau<br/>a) penanda keselamatan jalur sempadan rel kereta api; dan<br/>b) jaringan listrik.');
            }

            if (props.namobj == 'Taman Pulau Kecil'){

                $('#panelku-izin').append('<b>Kegiatan yang diperbolehkan yaitu perlindungan ekosistem pulau-pulau kecil;  <hr>   <b>Kegiatan yang diperbolehkan bersyarat, meliputi:</b><br/>1. pemanfaatan ruang untuk penelitian, pendidikan dan pariwisata;<br/>2. pembangunan sarana penunjang pariwisata; dan<br/>3. pengembangan permukiman penduduk lokal beserta sarana dan prasarana pendukungnya yang selaras dengan konsep ekowisata.   <hr>   Kegiatan yang tidak diperbolehkan yaitu fungsi dan kegiatan yang merusak ekosistem pulau-pulau kecil;    <hr>   Intensitas pemanfaatan ruang meliputi KDH minimal sebesar 75%, KDB maksimal sebesar 25%, KLB maksimal sebesar 0,75.     <hr> <b>Sarana dan prasarana minimum berupa jaringan jalan yang lengkapi dengan jalur pedestrian, dan penerangan jalan. ');
            }

            if (props.kp2b == 'K02A'){

                $('#panelkk-izin').append('<b>Ketentuan khusus kawasan yang ditetapkan sebagai Kawasan Pertanian Pangan Berkelanjutan (KP2B) meliputi:</b><br/> <br/><b>a. diperbolehkan kegiatan penunjang pertanian;</b><br/><br/><b>b. dalam hal untuk kepentingan umum dan/atau Proyek Strategis Nasional, Lahan Pertanian Pangan Berkelanjutan dapat dialihfungsikan dan dilaksanakan sesuai dengan ketentuan peraturan perundang-undangan;</b><br/><br/><b>c. pengalihfungsian lahan yang sudah ditetapkan sebagai Lahan Pertanian Pangan Berkelanjutan untuk kepentingan umum sebagaimana dimaksud pada huruf b hanya dapat dilakukan dengan syarat:</b><br/>1. dilakukan kajian kelayakan strategis;<br/>2. disusun rencana alih fungsi lahan;<br/>3. dibebaskan kepemilikan haknya dari pemilik; dan<br/>4. disediakan lahan pengganti terhadap Lahan Pertanian Pangan Berkelanjutan yang dialihfungsikan.<br/><br/><b>d. dalam hal terjadi bencana sehingga mengakibatkan hilang atau rusaknya infrastruktur secara permanen dan pembangunan infrastruktur pengganti tidak dapat ditunda, maka alih fungsi Lahan Pertanian Pangan Berkelanjutan dapat dilakukan dengan ketentuan:</b><br/>1. membebaskan kepemilikan hak atas tanah dengan pemberian ganti rugi sesuai dengan ketentuan peraturan perundang-undangan; dan<br/>2. menyediakan lahan pengganti terhadap Lahan Pertanian Pangan Berkelanjutan yang dialihfungsikan paling lama 24 (dua puluh empat) bulan setelah alih fungsi dilakukan.</b>');
            }



            if (props.krb == 'Rawan Gerakan Tanah Tingkat Tinggi'){

                $('#panelkk-izin').append('<b>a. ketentuan khusus kawasan rawan gerakan tanah tinggi pada kawasan hutan lindung, berupa penerapan teknik pengendalian gerakan tanah dan stabilisasi tanah dengan metode vegetatif dengan tepat sasaran (dipilahkan antara bagian kaki, bagian tengah, dan bagian atas lereng) maupun bangunan.</b><br/><br/><b>b. ketentuan khusus kawasan rawan gerakan tanah tinggi pada imbuhan air tanah meliputi:</b><br/>1. tidak diperkenankan adanya alih fungsi lahan;<br/>2. penerapan teknik pengendalian gerakan tanah metode vegetatif yang mampu menyerap air dan menahan erosi tanah; dan<br/>3. pembangunan sistem peringatan dini dan rambu-rambu peringatan bencana.<br/><br/><b>c. ketentuan khusus kawasan rawan gerakan tanah tinggi pada kawasan jalur hijau meliputi:</b><br/>1. penyediaan jalur evakuasi bencana dan pembangunan tempat evakuasi yang cukup tinggi dan mudah diakses; dan<br/>2. pembangunan sistem peringatan dini dan rambu-rambu peringatan bencana.<br/><br/><b>d. ketentuan khusus kawasan rawan gerakan tanah tinggi pada kawasan peruntukan industri meliputi:</b><br/>1. tidak diperkenankan penambahan bangunan, kecuali untuk kepentingan pemantauan ancaman bencana;<br/>2. bangunan wajib menggunakan rekayasa konstruksi dan adaptasi dengan permasalahan kawasan;<br/>3. penyediaan jalur evakuasi bencana dan pembangunan tempat evakuasi yangmudah diakses; dan<br/>4. pembangunan sistem peringatan dini dan rambu-rambu peringatan bencana.<br/><br/><b>e. ketentuan khusus kawasan rawan gerakan tanah tinggi pada kawasan perumahan meliputi:</b><br/>1. tidak diperkenankan penambahan bangunan, kecuali untuk kepentingan pemantauan ancaman bencana;<br/>2. bangunan wajib menggunakan rekayasa konstruksi dan adaptasi dengan permasalahan kawasan;<br/>3. penyediaan jalur evakuasi bencana dan pembangunan tempat evakuasi yangmudah diakses; dan<br/>4. pembangunan sistem peringatan dini dan rambu-rambu peringatan bencana.');
            }


            if (props.krb == 'Rawan Tsunami Tingkat Tinggi'){

                $('#panelkk-izin').append('<b>a. ketentuan khusus kawasan rawan bencana tsunami tingkat tinggi pada perlindungan setempat, kawasan ekosistem mangrove, pemakaman, dan jalur hijau meliputi:</b><br/>1. penyediaan infrastruktur tembok penahan gelombang pada garis pantai yang beresiko;<br/>2. penanaman mangrove serta tanaman lainnya sebagai upaya mitigasi bencana tsunami;<br/>3. pembangunan sistem peringatan dini tsunami dan ramburambu peringatan bencana; dan<br/>4. penyediaan jalur evakuasi bencana<br/><br/><b>b. ketentuan khusus kawasan rawan bencana tsunami tingkat tinggi pada kawasan perikanan budidaya, kawasan peruntukan industri, kawasan pariwisata, kawasan perumahan, kawasan fasilitas umum dan fasilitas sosial, kawasan perdagangan dan jasa, kawasan perkantoran, kawasan transportasi, infrastruktur perkotaan, dan kawasan pertahanan dan keamanan meliputi:</b><br/>1. penyediaan infrastruktur tembok penahan gelombang pada garis pantai yang beresiko;90<br/>2. penguatan struktur bangunan;<br/>3. penanaman mangrove serta tanaman lainnya sebagai upaya mitigasi bencana tsunami;<br/>4. penyediaan jalur evakuasi bencana;<br/>5. pembangunan tempat evakuasi sementara minimal 3 (tiga) lantai dan mudah diakses; dan<br/>6. pembangunan sistem peringatan dini tsunami dan ramburambu peringatan bencana.');
            }


            if (props.resair == 'Ada'){

                $('#panelkk-izin').append('<b>Ketentuan khusus kawasan resapan air meliputi:</b> <br/>a. kegiatan budidaya yang diperkenankan adalah kegiatan wisata alam, budidaya tanaman keras, budidaya hasil hutan, dan bangunan pendukung kawasan; <br/>b. tidak diperbolehkan melakukan kegiatan penambangan;<br/>c. pada kawasan yang telah terbangun dikendalikan dengan tidak  mengeluarkan izin pembangunan baru serta izin pertambangan baru;  <br/>d. bangunan mengikuti kontur tanah dan berbentuk rumah panggung;  <br/>e. diperbolehkan bangunan eksisting yang telah memiliki izin; dan<br/>f. pengembangan vegetasi tanaman yang mampu menyerap air dan menahan erosi tanah.');
            }

            
            if (props.resair == 'Tidak Ada' | props.krb == 'Tidak Ada' | props.kp2b == 'Tidak ada'){

                $('#panelkk-izin').append('<b>Tidak Ada</b>');
            }



        } else {

            $("#sidebarRight").addClass("hide");

            $('.loader').empty();
            $('.loader').addClass('loader-active');
            $('.loader').append('-');

            $('#panelku-izin').empty();
            $('#panelkk-izin').empty();
        }
        

      });
     }
  });



  function btnpanelpolaruang () {
        

    if ($("#btnpanelpolaruang").hasClass("active")) {
        $("#btnpanelpolaruang").removeClass("active");
    } else {
        $("#btnpanelpolaruang").addClass("active").siblings().removeClass("active");
    }

    if ($("#panelpolaruang").hasClass("show")) {
        $("#panelpolaruang").removeClass("show");
        $("#panelpolaruang").addClass("hide");
      } else {
        $("#panelpolaruang").removeClass("hide").siblings().removeClass("show");
        $("#panelpolaruang").addClass("show").siblings().addClass("hide");
      } 

}


function btnpanelku () {
        

    if ($("#btnpanelku").hasClass("active")) {
        $("#btnpanelku").removeClass("active");
    } else {
        $("#btnpanelku").addClass("active").siblings().removeClass("active");
    }

    if ($("#panelku").hasClass("show")) {
        $("#panelku").removeClass("show");
        $("#panelku").addClass("hide");
      } else {
        $("#panelku").removeClass("hide").siblings().removeClass("show");
        $("#panelku").addClass("show").siblings().addClass("hide");
      } 

}


function btnpanelkk () {
        

    if ($("#btnpanelkk").hasClass("active")) {
        $("#btnpanelkk").removeClass("active");
    } else {
        $("#btnpanelkk").addClass("active").siblings().removeClass("active");
    }

    if ($("#panelkk").hasClass("show")) {
        $("#panelkk").removeClass("show");
        $("#panelkk").addClass("hide");
      } else {
        $("#panelkk").removeClass("hide").siblings().removeClass("show");
        $("#panelkk").addClass("show").siblings().addClass("hide");
      } 

}




function btnpanellegenda () {

    if ($("#btnpanellegenda").hasClass("active")) {
        $("#btnpanellegenda").removeClass("active");
    } else {
        $("#btnpanellegenda").addClass("active").siblings().removeClass("active");
    }


    if ($("#panellegenda").hasClass("show")) {
        $("#panellegenda").removeClass("show");
        $("#panellegenda").addClass("hide");
      } else {
        $("#panellegenda").removeClass("hide").siblings().removeClass("show");
        $("#panellegenda").addClass("show").siblings().addClass("hide");
      } 

}




const toolbar = new oltb({
    map: map,
    tools: {
        HiddenMarkerTool: {
            onAdded: function(marker) {
                console.log('HiddenMarkerTool: Marker added', marker);
            },
            onRemoved: function(marker) {
                console.log('HiddenMarkerTool: Marker removed', marker);
            },
            onEdited: function(before, after) {
                console.log('HiddenMarkerTool: Marker edited', before, after);
            }
        },
        HiddenMapNavigationTool: {
            focusZoom: 10
        },
        HomeTool: {
            // lon: 18.1201,
            // lat: 35.3518,
            // zoom: 12,
            onInitiated: function() {
                console.log('HomeTool: Initiated');
            },
            onClicked: function() {
                console.log('HomeTool: Clicked');
            },
            onBrowserStateCleared: function() {
                console.log('HomeTool: State cleared');
            },
            onNavigatedHome: function(result) {
                console.log('HomeTool: Navigated home', result);
            }
        },
        LayerTool: {
            onInitiated: function() {
                console.log('LayerTool: Initiated');
            },
            onClicked: function() {
                console.log('LayerTool: Clicked');
            },
            onBrowserStateCleared: function() {
                console.log('LayerTool: State cleared');
            },
            onMapLayerAdded: function(layerWrapper) {
                console.log('LayerTool: Map layer added', layerWrapper);
            },
            onMapLayerRemoved: function(layerWrapper) {
                console.log('LayerTool: Map layer removed', layerWrapper);
            },
            onMapLayerRenamed: function(layerWrapper) {
                console.log('LayerTool: Map layer renamed', layerWrapper);
            },
            onMapLayerVisibilityChanged: function(layerWrapper) {
                console.log('LayerTool: Map layer visibility change', layerWrapper);
            },
            onMapLayerDragged(item, list) {
                console.log('LayerTool: Map layer dragged', item, list);
            },
            onFeatureLayerAdded: function(layerWrapper) {
                console.log('LayerTool: Feature layer added', layerWrapper);
            },
            onFeatureLayerRemoved: function(layerWrapper) {
                console.log('LayerTool: Feature layer removed', layerWrapper);
            },
            onFeatureLayerRenamed: function(layerWrapper) {
                console.log('LayerTool: Feature layer renamed', layerWrapper);
            },
            onFeatureLayerVisibilityChanged: function(layerWrapper) {
                console.log('LayerTool: Feature layer visibility change', layerWrapper);
            },
            onFeatureLayerDownloaded: function(layerWrapper, filename, content) {
                console.log('LayerTool: Feature layer downloaded', layerWrapper, filename, content);
            },
            onFeatureLayerDragged(item, list) {
                console.log('LayerTool: Feature layer dragged', item, list);
            }
        },
        LayerTool: {
            onInitiated: function() {
                console.log('LayerTool: Initiated');
            },
            onClicked: function() {
                console.log('LayerTool: Clicked');
            },
            onBrowserStateCleared: function() {
                console.log('LayerTool: State cleared');
            },
            onMapLayerAdded: function(layerWrapper) {
                console.log('LayerTool: Map layer added', layerWrapper);
            },
            onMapLayerRemoved: function(layerWrapper) {
                console.log('LayerTool: Map layer removed', layerWrapper);
            },
            onMapLayerRenamed: function(layerWrapper) {
                console.log('LayerTool: Map layer renamed', layerWrapper);
            },
            onMapLayerVisibilityChanged: function(layerWrapper) {
                console.log('LayerTool: Map layer visibility change', layerWrapper);
            },
            onMapLayerDragged(item, list) {
                console.log('LayerTool: Map layer dragged', item, list);
            },
            onFeatureLayerAdded: function(layerWrapper) {
                console.log('LayerTool: Feature layer added', layerWrapper);
            },
            onFeatureLayerRemoved: function(layerWrapper) {
                console.log('LayerTool: Feature layer removed', layerWrapper);
            },
            onFeatureLayerRenamed: function(layerWrapper) {
                console.log('LayerTool: Feature layer renamed', layerWrapper);
            },
            onFeatureLayerVisibilityChanged: function(layerWrapper) {
                console.log('LayerTool: Feature layer visibility change', layerWrapper);
            },
            onFeatureLayerDownloaded: function(layerWrapper, filename, content) {
                console.log('LayerTool: Feature layer downloaded', layerWrapper, filename, content);
            },
            onFeatureLayerDragged(item, list) {
                console.log('LayerTool: Feature layer dragged', item, list);
            }
        },
        ZoomInTool: {
            onInitiated: function() {
                console.log('ZoomInTool: Initiated');
            },
            onClicked: function() {
                console.log('ZoomInTool: Clicked');
            },
            onZoomed: function(result) {
                console.log('ZoomInTool: Zoomed in', result);
            }
        },
        ZoomOutTool: {
            onInitiated: function() {
                console.log('ZoomOutTool: Initiated');
            },
            onClicked: function() {
                console.log('ZoomOutTool: Clicked');
            },
            onZoomed: function(result) {
                console.log('ZoomOutTool: Zoomed out', result);
            }
        },
        ZoomboxTool: {
            onInitiated: function() {
                console.log('ZoomboxTool: Initiated');
            },
            onClicked: function() {
                console.log('ZoomboxTool: Clicked');
            },
            onBrowserStateCleared: function() {
                console.log('ZoomboxTool: State cleared');
            },
            onStart: function(event) {
                console.log('ZoomboxTool: Start', event);
            },
            onEnd: function(event) {
                console.log('ZoomboxTool: End', event);
            },
            onDrag: function(event) {
                console.log('ZoomboxTool: Drag', event);
            },
            onCancel: function(event) {
                console.log('ZoomboxTool: Cancel', event);
            },
            onError: function(event) {
                console.log('ZoomboxTool: Error', event);
            }
        },
        FullscreenTool: {
            onInitiated: function() {
                console.log('FullscreenTool: Initiated');
            },
            onClicked: function() {
                console.log('FullscreenTool: Clicked');
            },
            onEnter: function(event) {
                console.log('FullscreenTool: Enter fullscreen', event);
            },
            onLeave: function(event) {
                console.log('FullscreenTool: Leave fullscreen', event);
            }
        },
        ExportPngTool: {
            filename: 'map-image-export',
            onInitiated: function() {
                console.log('ExportPngTool: Initiated');
            },
            onClicked: function() {
                console.log('ExportPngTool: Clicked');
            },
            onExported: function(filename, content) {
                console.log('ExportPngTool: PNG exported', filename, content);
            },
            onError: function(error) {
                console.log('ExportPngTool: Error', error);
            }
        },
        // DrawTool: {
        //     onInitiated: function() {
        //         console.log('DrawTool: Initiated');
        //     },
        //     onClicked: function() {
        //         console.log('DrawTool: Clicked');
        //     },
        //     onBrowserStateCleared: function() {
        //         console.log('DrawTool: State cleared');
        //     },
        //     onStart: function(event) {
        //         console.log('DrawTool: Start');
        //     },
        //     onEnd: function(event) {
        //         console.log('DrawTool: End', event.feature);
        //     },
        //     onAbort: function(event) {
        //         console.log('DrawTool: Abort');
        //     },
        //     onError: function(event) {
        //         console.log('DrawTool: Error');
        //     },
        //     onIntersected: function(event, intersectedFeatures) {
        //         console.log('DrawTool: Intersected', event.feature);
        //         console.log('DrawTool: Intersected features', intersectedFeatures);
        //     },
        //     onSnapped: function(event) {
        //         console.log('DrawTool: Snapped');
        //     }
        // },
        MeasureTool: {
            onInitiated: function() {
                console.log('MeasureTool: Initiated');
            },
            onClicked: function() {
                console.log('MeasureTool: Clicked');
            },
            onBrowserStateCleared: function() {
                console.log('MeasureTool: State cleared');
            },
            onStart: function(event) {
                console.log('MeasureTool: Start');
            },
            onEnd: function(event) {
                console.log('MeasureTool: End', event.feature);
            },
            onAbort: function(event) {
                console.log('MeasureTool: Abort');
            },
            onError: function(event) {
                console.log('MeasureTool: Error');
            }
        },
        // EditTool: {
        //     hitTolerance: 5,
        //     onInitiated: function() {
        //         console.log('EditTool: Initiated');
        //     },
        //     onClicked: function() {
        //         console.log('EditTool: Clicked');
        //     },
        //     onBrowserStateCleared: function() {
        //         console.log('EditTool: State cleared');
        //     },
        //     onStyleChange: function(event, style) {
        //         console.log('EditTool: Style changed');
        //     },
        //     onCutFeatures: function(features) {
        //         console.log('EditTool: Cut features', features);
        //     },
        //     onCopyFeatures: function(features) {
        //         console.log('EditTool: Copied features', features);
        //     },
        //     onPasteFeatures: function(features, layerWrapper) {
        //         console.log('EditTool: Pasted features', features);
        //     },
        //     onShapeOperation: function(type, a, b, result) {
        //         console.log('EditTool: Shape operation', type);
        //     },
        //     onSelectAdd: function(event) {
        //         console.log('EditTool: Selected feature');
        //     },
        //     onSelectRemove: function(event) {
        //         console.log('EditTool: Deselected feature');
        //     },
        //     onModifyStart: function(event) {
        //         console.log('EditTool: Modify start');
        //     },
        //     onModifyEnd: function(event) {
        //         console.log('EditTool: Modify end');
        //     },
        //     onTranslateStart: function(event) {
        //         console.log('EditTool: Translate start');
        //     },
        //     onTranslateEnd: function(event) {
        //         console.log('EditTool: Translate end');
        //     },
        //     onRemovedFeatures: function(features) {
        //         console.log('EditTool: Removed features', features);
        //     },
        //     onError: function(event) {
        //         console.log('EditTool: Error');
        //     },
        //     onSnapped: function(event) {
        //         console.log('EditTool: Snapped');
        //     }
        // },
        // ScissorsTool: {
        //     onStart: function(event) {
        //         console.log('ScissorsTool: Start');
        //     },
        //     onEnd: function(event) {
        //         console.log('ScissorsTool: End', event.feature);
        //     },
        //     onAbort: function(event) {
        //         console.log('ScissorsTool: Abort');
        //     },
        //     onError: function(event) {
        //         console.log('ScissorsTool: Error');
        //     },
        //     onSnapped: function(event) {
        //         console.log('ScissorsTool: Snapped');
        //     }
        // },
        BookmarkTool: {
            markerLayerVisibleOnLoad: true,
            markerLabelUseEllipsisAfter: 20,
            markerLabelUseUpperCase: false,
            bookmarks: [{
                name: 'Custom Bookmark',
                zoom: 5,
                coordinates: [105, -5]
            }],
            onInitiated: function() {
                console.log('BookmarkTool: Initiated');
            },
            onClicked: function() {
                console.log('BookmarkTool: Clicked');
            },
            onBrowserStateCleared: function() {
                console.log('BookmarkTool: State cleared');
            },
            onAdded: function(bookmark) {
                console.log('BookmarkTool: Added', bookmark);
            },
            onRemoved: function(bookmark) {
                console.log('BookmarkTool: Removed', bookmark);
            },
            onRenamed: function(bookmark) {
                console.log('BookmarkTool: Renamed', bookmark);
            },
            onZoomedTo: function(bookmark) {
                console.log('BookmarkTool: Zoomed to', bookmark);
            },
            onCleared: function() {
                console.log('BookmarkTool: Cleared');
            },
            onDragged: function(item, list) {
                console.log('BookmarkTool: Dragged', item, list);
            }
        },
        SplitViewTool: {
            onInitiated: function() {
                console.log('SplitViewTool: Initiated');
            },
            onClicked: function() {
                console.log('SplitViewTool: Clicked');
            },
            onBrowserStateCleared: function() {
                console.log('SplitViewTool: State cleared');
            }
        },
        OverviewTool: {
            onInitiated: function() {
                console.log('OverviewTool: Initiated');
            },
            onClicked: function() {
                console.log('OverviewTool: Clicked');
            },
            onBrowserStateCleared: function() {
                console.log('OverviewTool: State cleared');
            }
        },
        GraticuleTool: {
            color: '#3B4352E6',
            dashed: true,
            width: 2,
            showLabels: true,
            wrapX: true,
            onInitiated: function() {
                console.log('GraticuleTool: Initiated');
            },
            onClicked: function() {
                console.log('GraticuleTool: Clicked');
            },
            onBrowserStateCleared: function() {
                console.log('GraticuleTool: State cleared');
            }
        },
        // MagnifyTool: {
        //     onInitiated: function() {
        //         console.log('MagnifyTool: Initiated');
        //     },
        //     onClicked: function() {
        //         console.log('MagnifyTool: Clicked');
        //     },
        //     onBrowserStateCleared: function() {
        //         console.log('MagnifyTool: State cleared');
        //     }
        // },
        ResetNorthTool: {
            onInitiated: function() {
                console.log('ResetNorthTool: Initiated');
            },
            onClicked: function() {
                console.log('ResetNorthTool: Clicked');
            },
            onReset: function(result) {
                console.log('ResetNorthTool: North reset', result);
            }
        },
        CoordinatesTool: {
            onInitiated: function() {
                console.log('CoordinatesTool: Initiated');
            },
            onClicked: function() {
                console.log('CoordinatesTool: Clicked');
            },
            onBrowserStateCleared: function() {
                console.log('CoordinatesTool: State cleared');
            },
            onMapClicked: function(coordinates) {
                console.log('CoordinatesTool: Map clicked at', coordinates);
            }
        },
        MyLocationTool: {
            enableHighAccuracy: true,
            timeout: 10000,
            description: 'This is the location that the browser was able to find. It might not be your actual location.',
            markerLabelUseEllipsisAfter: 20,
            markerLabelUseUpperCase: false,
            onInitiated: function() {
                console.log('MyLocationTool: Initiated');
            },
            onClicked: function() {
                console.log('MyLocationTool: Clicked');
            },
            onLocationFound: function(location) {
                console.log('MyLocationTool: Location found', location);
            },
            onError: function(error) {
                console.log('MyLocationTool: Error', error);
            }
        },
        ImportVectorLayerTool: {
            onInitiated: function() {
                console.log('ImportVectorLayerTool: Initiated');
            },
            onClicked: function() {
                console.log('ImportVectorLayerTool: Clicked');
            },
            onImported: function(features) {
                console.log('ImportVectorLayerTool: Imported', features);
            },
            onError: function(filename, error) {
                console.log('ImportVectorLayerTool: Error', filename, error);
            }
        },
        ScaleLineTool: {
            units: 'metric',
            onInitiated: function() {
                console.log('ScaleLineTool: Initiated');
            },
            onClicked: function() {
                console.log('ScaleLineTool: Clicked');
            },
            onBrowserStateCleared: function() {
                console.log('ScaleLineTool: State cleared');
            }
        },
        RefreshTool: {
            onInitiated: function() {
                console.log('RefreshTool: Initiated');
            },
            onClicked: function() {
                console.log('RefreshTool: Clicked');
            }
        },
        ThemeTool: {
            onInitiated: function() {
                console.log('ThemeTool: Initiated');
            },
            onClicked: function() {
                console.log('ThemeTool: Clicked');
            },
            onBrowserStateCleared: function() {
                console.log('ThemeTool: State cleared');
            },
            onChanged: function(theme) {
                console.log('ThemeTool: Changed to', theme);
            }
        },
        DirectionTool: {
            onInitiated: function() {
                console.log('DirectionTool: Initiated');
            },
            onClicked: function() {
                console.log('DirectionTool: Clicked');
            },
            onBrowserStateCleared: function() {
                console.log('DirectionTool: State cleared');
            },
            onChanged: function(direction) {
                console.log('DirectionTool: Changed to', direction);
            }
        },
        // ToolboxTool: {
        //     onInitiated: function() {
        //         console.log('ToolboxTool: Initiated');
        //     },
        //     onClicked: function() {
        //         console.log('ToolboxTool: Clicked');
        //     },
        //     onBrowserStateCleared: function() {
        //         console.log('ToolboxTool: State cleared');
        //     },
        //     onChanged: function(state) {
        //         console.log('ToolboxTool: Changed to', state);
        //     }
        // },
        // InfoTool: {
        //     title: 'Hey!', 
        //     content: '<p>This is a <strong>modal window</strong>, here you can place some text about your application or links to external resources.</p>',
        //     onInitiated: function() {
        //         console.log('InfoTool: Initiated');
        //     },
        //     onClicked: function() {
        //         console.log('InfoTool: Clicked');
        //     }
        // },
        // HelpTool: {
        //     url: 'https://github.com/qulle/oltb',
        //     target: '_blank',
        //     onInitiated: function() {
        //         console.log('HelpTool: Initiated');
        //     },
        //     onClicked: function() {
        //         console.log('HelpTool: Clicked');
        //     }
        // },
        // SettingsTool: {
        //     onInitiated: function() {
        //         console.log('SettingsTool: Initiated');
        //     },
        //     onClicked: function() {
        //         console.log('SettingsTool: Clicked');
        //     },
        //     onBrowserStateCleared: function() {
        //         console.log('SettingsTool: State cleared');
        //     }
        // },
        // TranslationTool: {
        //     onInitiated: function() {
        //         console.log('TranslationTool: Initiated');
        //     },
        //     onClicked: function() {
        //         console.log('TranslationTool: Clicked');
        //     },
        // },
        // DebugInfoTool: {
        //     showWhenGetParameter: false,
        //     onInitiated: function() {
        //         console.log('DebugInfoTool: Initiated');
        //     },
        //     onClicked: function() {
        //         console.log('DebugInfoTool: Clicked');
        //     }
        // },
        HiddenAboutTool: {}
    }
});
