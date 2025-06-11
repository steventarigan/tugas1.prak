<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Models\dosen;
use App\Models\guru;
use App\Models\Matakuliah;
use App\Models\prodi;

Route::get('/', function () {
    return view('welcome');
});

Route::get('biodata',[BiodataController::class,'index']);

Route::post('biodata',[BiodataController::class,'proses']);

Route::get('prodi/create',function(){
        prodi::create([
            'namaprodi'=>'Sistem informasi',
            'kodeprodi'=>122
        ]);
        return "Berhasil Tambah Data";

    });

    Route::get('prodi/Lihat',function(){
        $prodi =prodi::all();
        foreach($prodi as $data){
            echo $data->namaprodi ."<br>". $data->kodeprodi . "<br>";
        }
    });

// Route::get('dosen/create',function(){
//         dosen::create([
//             'namadosen'=>'Arina',
//             'Matakuliah'=>'Sistem Basis Data',
//             'KodeMatakuliah'=>'SBD'
//         ]);
//         return "Berhasil Tambah Data";
//     });

//     Route::get('dosen/Lihat',function(){
//         $dosen =dosen::all();
//         foreach($dosen as $data){
//             echo $data->namadosen ."<br>". $data->Matakuliah ."<br>". $data->KodeMatakuliah. "<br>";
//         }
//     });
// namadosen','Matakuliah','KodeMatakuliah
