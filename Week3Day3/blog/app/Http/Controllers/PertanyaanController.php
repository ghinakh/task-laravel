<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function index()
    {
        $data = DB::table('questions')->get();
        // dd($data);
        return view('konten/indexPertanyaan', compact('data'));
    }
    public function create()
    {
        return view('konten/createPertanyaan');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $query = DB::table('questions')->insert([
            'judul' => $request["title"],
            'isi' => $request["body"]
        ]);
        return redirect('/pertanyaan')->with('success', 'Question created!');
    }
    public function show($id)
    {
        $data = DB::table('questions')->where('id', $id)->first();
        // dd($data);
        return view('konten/showPertanyaan', compact('data'));
    }
    public function edit($id)
    {
        $data = DB::table('questions')->where('id', $id)->first();
        // dd($data);
        return view('konten/editPertanyaan', compact('data'));
    }
    public function update($id, Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        date_default_timezone_set('Asia/Jakarta');
        $query = DB::table('questions')->where('id', $id)->update([
            'judul' => $request["title"],
            'isi' => $request["body"],
            'tanggal_diperbaharui' => date("Y-m-d H:i:s")
        ]);

        return redirect('/pertanyaan')->with('success', 'Question updated!');
    }
    public function destroy($id)
    {
        $query = DB::table('questions')->where('id', $id)->delete();
        return redirect('/pertanyaan')->with('success', 'Question deleted!');
    }
}
