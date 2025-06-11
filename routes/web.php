<?php

use App\Models\guru;
use App\Models\dosen;
use App\Models\prodi;
use App\Models\Matakuliah;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\BiodataController;
use GuzzleHttp\Promise\Create;

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

    Route::get('/buku',[BukuController::class, 'index'])->name('buku.index');
    Route::get('/buku/create',[BukuController::class, 'Create'])->name('buku.create');
    Route::post('/buku',[BukuController::class, 'store'])->name('buku.store');
    Route::get('/buku/{id}/edit',[BukuController::class, 'edit'])->name('buku.edit');
    Route::put('/buku/update/{id}',[BukuController::class, 'update'])->name('buku.update');
    Route::delete('/buku/destroy/{id}',[BukuController::class, 'destroy'])->name('buku.destroy');
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
