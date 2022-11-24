$(function (){
     
    $('.tombolAnswer1').on('click', function (){
        $('#fromTittle').html('Berapa Bulan Sebelum Kelulusan ? ');
    })
    $('.tombolAnswer2').on('click', function (){
        $('#fromTittle').html('Berapa Bulan Sesudah Kelulusan ? ');
    })
    $('.tombolAnswer3').on('click', function (){
        $('#fromTittle').html('Dimana anda Melanjutkan Kuliah ? ');
    })
    $('.tombolAnswer4').on('click', function (){
        $('#fromTittle').html(' Alasan Belum Berkerja ? ');
    })
    $('.wirausaha').on('click', function (){
        $('#yesOrNo').html('');
    })

    $('.yes-button').on('click', function (){
        $('#lesensi').html('<div class= "mb-3"><label for="recipient-name" class="col-form-label">Apa Nama Wirausaha Anda ? </label><input type="text" class="form-control" id="recipient-name"></div>   <div class="mb-3"><label for="recipient-name" class="col-form-label">Bidang Wirausaha yang anda jalani saat ini?</label><input type="text" class="form-control" id="recipient-name"></div>');
    })
    $('.no-button').on('click', function (){
        $('#lesensi').html(' <div class="mb-3"><label for="recipient-name" class="col-form-label">Bidang Wirausaha yang anda jalani saat ini?</label><input type="text" class="form-control" id="recipient-name"></div>');
    })
});