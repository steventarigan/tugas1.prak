<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BiodataController extends Controller
{

  public function index()
  {
    return view('biodata');
  }
  public function proses(Request $request){
    // untuk debugging
    //  dd($request);
    
    $request->validate([
        'nama' => 'required',
        'gender' => 'required',
        'email' => 'required|email',
        'ponsel' => 'required'
    ],[
        'nama.required' => 'Isi Yang betul lhh jelek!', 
        'gender.required' => 'Gender wajib dipilih!',
        'email.required' => 'Email wajib diisi!',
        'email.email' => 'Format email nya salah!',
        'ponsel.required' => 'Ponsel wajib diisi!',
        'ponsel.min'=> 'nomor minimal 11',
    ]);
            
    echo "Nama : $request->nama</br>";
    echo "Jenis Kelamin : $request->gender </br>";
    echo "Email : $request->email </br>";
    echo "Ponsel : $request->ponsel </br>";
  }
}