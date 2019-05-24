<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Content;
use Illuminate\Support\Facades\DB;

class ContentsController extends Controller
{
    function index()
    {
        //$data = Content::paginate(2);
        //$data = DB::select('select * from contents');
        $data = DB::table('contents')->get();
        //dd($data);
        return view('contents.index', compact('data'));
    }
    public function tambah()
	{
 
	// memanggil view tambah
	return view('contents.tambah');
 
	}

    public function store(Request $request)
    {
    // insert data ke table
    DB::table('contents')->insert([
        'title' => $request->title,
        'excerpt' => $request->excerpt,
        'content' => $request->content
    ]);
    // alihkan halaman ke halaman contents
    return redirect('contents');
 
    }
    // method untuk edit data contents
    public function edit($id)
    {
    // mengambil data contents berdasarkan id yang dipilih
    $data = DB::table('contents')->where('id',$id)->get();
    // passing data contents yang didapat ke view edit.blade.php
    return view('contents.edit',['data' => $data]);
 
    }

    // update data contents
    public function update(Request $request)
    {
    // update data contents
    DB::table('contents')->where('id',$request->id)->update([
        'title' => $request->title,
        'excerpt' => $request->excerpt,
        'content' => $request->content
    ]);
    // alihkan halaman ke halaman contents
    return redirect('contents');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
    // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('contents')->where('id',$id)->delete();
        
    // alihkan halaman ke halaman pegawai
    return redirect('contents');
    }
}

 