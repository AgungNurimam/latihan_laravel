<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        //Mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->get();

        //Mengirim data pegawai ke view index
        return view('index',['pegawai'=>$pegawai]);
    }

    //Fungsi untuk memanggil view tambah
    public function tambah()
    {
    	//memanggil view tambah
    	return view('tambah');
    }

    //Fungsi untuk menerima data dari form dan simpan ke database
    public function store(Request $request)
    {
    	//insert data ke table pegawai
    	DB::table('pegawai')->insert([
    		'pegawai_nama'=>$request->nama,
    		'pegawai_jabatan'=>$request->jabatan,
    		'pegawai_umur'=>$request->umur,
    		'pegawai_alamat'=>$request->alamat
    	]);

    	//alihkan halaman ke halaman pegawai
    	return redirect('/pegawai');
    }

    public function edit($id)
    {

    }
}
