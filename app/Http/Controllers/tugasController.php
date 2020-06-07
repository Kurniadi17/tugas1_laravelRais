<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tugas;

class tugasController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function store(Request $request){
        tugas::create([
            'Nama'=>$request->nama,
            'Nomor_Urut'=>$request->nomor_urut,
            'Kelas'=>$request->kelas,
            'No_HP'=>$request->no_hp
        ]);
    return redirect('/tugas-list');
    }
    public function getTugas(){
        $listtugas1=tugas::all();
        return view('listtugas1',compact('listtugas1'));
    }
    public function delete($id){
        tugas::destroy($id);
        return back();
    }
    public function edit($id){
        $Tugas=tugas::findOrFail($id);
        return view('edittugas1',compact('tugas'));
    }
    public function update(Request $request){
        tugas::findOrFail($id)->update([
            'Nama'=>$request->nama,
            'Nomor_Urut'=>$request->nomor_urut,
            'Kelas'=>$request->kelas,
            'No_HP'=>$request->no_hp
        ]);
    return redirect('/tugas-list');
    }
}
