<?php

namespace App\Http\Controllers;
Use App\guru;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class guruController extends Controller
{
    //
    public function tampilGuru () {
        $dtguru = guru::paginate(3);
        return view('guru.guru', compact('dtguru'));
    }

    public function tambahGuru() {
        return view ('guru.tambahGuru');
    }

    public function store(Request $request) {
        // dd($request->all());
        // guru::create([
        //     'nip' => $request->nip,
        //     'nama_guru' => $request->nama_guru,
        // ]);
        $this->_validation($request);
        $dtguru = new guru;
        $dtguru->nip = $request->nip;
        $dtguru->nama_guru = $request->nama_guru;

        $dtguru->save();
        return redirect()->route('guru')->with('success', 'Data Berhasil ditambahkan!');
    }

    public function editGuru($id) {
        $dtguru = guru::findorfail($id);
        return view('guru.editGuru', compact('dtguru'));
        // $dtguru = DB::table('guru')->where('id', $id)->first();
        // return view('guru.editGuru', ['mapel' => $dtguru]);
    }

    public function updateGuru(Request $request, $id){
        $this->_validation($request);
        guru::where('id', $id)->update(['nip' => $request->nip, 'nama_guru' => $request->nama_guru]);
        return redirect()->route('guru')->with('success', 'Data Berhasil di edit!');
    }

    private function _validation(Request $request)
    {
        $validation = $request->validate(
            [
                'nip' => 'required',
                'nama_guru' => 'required'
            ],
            [
                'nip.required' => 'data tidak boleh kosong!',
                'nama_guru.required' => 'Nama tidak boleh kosong!'
            ]
        );
    }


    public function delete($id)
    {
        guru::where('id', $id)->delete();
        // DB::table('mapel')->where('id', $id)->delete();
        return redirect()->back();
    }
}
