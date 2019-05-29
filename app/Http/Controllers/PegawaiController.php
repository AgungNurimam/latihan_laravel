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
        //mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();

        //passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['pegawai'=>$pegawai]);
    }


    //Update data pegawai

    public function update(Request $request)
    {
        //Update ke tabel pegawai
        DB::table('pegawai')->where('pegawai_id',$request->id)->update([
            'pegawai_nama'=>$request->nama,
            'pegawai_jabatan'=>$request->jabatan,
            'pegawai_umur'=>$request->umur,
            'pegawai_alamat'=>$request->alamat
        ]);

        //alihkan ke halaman pegawai
        return redirect('/pegawai');
    }
}
