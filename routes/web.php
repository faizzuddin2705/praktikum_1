<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', function () {
    $nama = "Faizuddin";
    $foto = 'images/faiz.jpeg';
    $tgl_lahir = "Sampang, 27 mei 2000";
    $NIM = "253107050010";
    $study = "Manajemen Informatika";
    $jurusan = "Teknologi Informasi";
    $alamat = "Psr. Gunung Buleng Pangilen";
    $no_telp = "0857765550882";
    return view('biodata.biodata_faiz', [
        'nyamah' => $nama,
        'gambar' => $foto,
        'lahir' => $tgl_lahir,
        'NIM' => $NIM,
        'kelas' => $study,
        'jrsn' => $jurusan,
        'roma' => $alamat,
        'hp' => $no_telp]);
});


Route::get('/biodata_ortu', function () {
    $nama = "Mosleh";
    $tgl_lahir = "Sampang, 23 mei 1989";
    $pekerjaan = "swasta";
    $alamat = "Sampang";
    $no_telp = "08544776821";
    $nama_ibu = "Halwiyah";
    $tgl_lahir_ibu = "Sampang, 11 juli 1990";
    $pekerjaan_ibu = "swasta";
    $alamat_ibu = "Sampang";
    $no_telp_ibu = "08544776821";
    return view('biodata.ortu', [
        'nyamah_bapak' => $nama,
        'lahir' => $tgl_lahir,
        'pekerjaan' => $pekerjaan,
        'alamat' => $alamat,
        'no_telp' => $no_telp,
        'nyamah_ibu' => $nama_ibu,
        'lahir_ibu' => $tgl_lahir_ibu,
        'pekerjaan_ibu' => $pekerjaan_ibu,
        'alamat_ibu' => $alamat_ibu,
        'no_telp_ibu' => $no_telp_ibu
    ]);
});

Route::get('/Alumni', function () {
   $jenjang = "SMA";
    $nama_sekolah_sma = "SMAS AL AFLAH";
    $jurusan = "Kurikulum Merdeka";
    $tahun_masuk_sma = "2022";
    $tahun_lulus_sma = "2025";
    $jenjang2 = "perguruan tinggi";
    $nama_perguruan_tinggi = "Politeknik Negeri Malang";
    $tahun_masuk_pt = "2025";
    $jurusan_pt = "Manajemen Informatika";

    return view('biodata.Alumni', 
    [
    'jnjng' => $jenjang,
    'jng_sekolah' => $nama_sekolah_sma,
    'jrsnsma' => $jurusan, 
    'masuk_sma' => $tahun_masuk_sma,
    'lulus_sma' => $tahun_lulus_sma,
    'jnjng2' => $jenjang2,
    'jng_pt' => $nama_perguruan_tinggi,
    'masuk_pt' => $tahun_masuk_pt,
    'jrsnpt' => $jurusan_pt
    ] );
});