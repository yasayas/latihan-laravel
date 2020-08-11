<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function create() {
        return view('pertanyaan.create');
    }

    public function store(Request $request) {
        // dd($request->all());
        $request->validate([
            "title" => "required|unique:posts",
            "body" => "required"
            ]);

        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["title"],
            "isi" => $request["body"]
        ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan Berhasil Disimpan!');
    }

    public function index() {
        $tables = DB::table('pertanyaan')->get();
        // dd($tampil);
        return view('pertanyaan.index', compact('tables')); 
    }

    public function show($id) {
        $post = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.show', compact('post'));
    }

    public function edit($id) {
        $post = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.edit', compact('post'));
    }
    
    public function update($id, Request $request) {
        $request->validate([
            "title" => "required|unique:posts",
            "body" => "required"
        ]);

        $query = DB::table('pertanyaan')->where('id', $id)->update([
            'judul' => $request['title'],
            'isi' => $request['body']
        ]);
        return redirect('/pertanyaan')->with('success', 'Berhasil Update Pertanyaan!');
    }

    public function destroy($id) {
        $query = DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/pertanyaan')->with('success', 'Pertanyaan Berhasil dihapus!');
    }
}
