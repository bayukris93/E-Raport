<?php

namespace App\Http\Controllers;

use App\mapel;
use Illuminate\Support\Facades\DB;
use App\siswa_model;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class siswaController extends Controller
{
    //tampil data siswa
    public function tampilSiswa()
    {
        $siswa = siswa_model::paginate(5);

        return view('siswa', ['siswa' => $siswa]);
    }

    //tambah siswa 
    public function tambah()
    {
        return view('tambahSiswa');
    }
    // simpan siswa
    public function simpan(Request $request)
    {
        // DB::table('siswa')->insert(
        //     ['nis' => $request->nis, 'nama_siswa'=>$request->nama_siswa, 'ttl'=> $request->ttl, 'tgl_lahir'=> $request->tgl_lahir, 'agama'=> $request->agama, 'alamat'=>$request->alamat]
        // );
        // return redirect()->route('siswa')->with('success', 'Data Berhasil di tambahkan!');
        $this->_validation($request);
        $siswa = new siswa_model;
        $siswa->nis = $request->nis;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->ttl = $request->ttl;
        $siswa->tgl_lahir = $request->tgl_lahir;
        $siswa->agama = $request->agama;
        $siswa->alamat = $request->alamat;
        $siswa->update_by = auth()->user()->id;
        $siswa->save();

        $user = new User;
        $user->name = $request->nama_siswa;
        $user->roles = "siswa";
        $user->email = "$request->nis@gmail.com";
        $user->password = Hash::make($request->tgl_lahir);
        $user->save();
        return redirect()->route('siswa')->with('success', 'Data Berhasil di tambahkan!');
    }
    // edit siswa
    public function edit($id)
    {
        $siswa = DB::table('siswa')->where('id', $id)->first();
        return view('editSiswa', ['siswa' => $siswa]);
    }

    //update siswa
    public function update(Request $request, $id)
    {
        // DB::table('siswa')->where('id', $id)->update([
        //     'nis' => $request->nis, 'nama_siswa' => $request->nama_siswa, 'ttl'=> $request->ttl, 'tgl_lahir' => $request->tgl_lahir, 'agama'=> $request->agama, 'alamat' => $request->alamat
        // ]);
        $this->_validation($request);
        siswa_model::where('id', $id)->update(['nis' => $request->nis, 'nama_siswa' => $request->nama_siswa, 'ttl' => $request->ttl, 'tgl_lahir' => $request->tgl_lahir, 'agama' => $request->agama, 'alamat' => $request->alamat, 'update_by'=>auth()->user()->id]);
        return redirect()->route('siswa')->with('success', 'Data Berhasil di edit!');
    }

    private function _validation(Request $request)
    {
        $validation = $request->validate(
            [
                'nis' => 'required',
                'nama_siswa' => 'required',
                'ttl' => 'required',
                'tgl_lahir' => 'required',
                'agama' => 'required',
                'alamat' => 'required'
            ],
            [
                'nis.required' => 'Harus di isi!',
                'nama_siswa.required' => 'Harus di isi!',
                'ttl.required' => 'data tidak boleh kosong!',
                'tgl_lahir.required' => 'data tidak boleh kosong!',
                'agama.required' => 'Harus di isi!',
                'alamat.required' => 'alamat tidak boleh kosong!'

            ]
        );
    }

    //hapus siswa
    public function delete($id)
    {
        siswa_model::where('id', $id)->delete();
        return redirect()->back();
    }
    public function inputnilai($idsiswa){
        $siswa = siswa_model::find($idsiswa);
        $matapelajaran = mapel::paginate(10);
        return view('inputnilai', ['siswa' => $siswa, 'mapel'=>$matapelajaran]);
    }
    public function simpanNilai(Request $request, $idsiswa){
        // dd($request->all());
        $siswa = siswa_model::find($idsiswa);
        if ($siswa->mapel()->where('mapel_id', $request->mapel)->exists()){
            return redirect()->route('siswa')->with('error', 'Nilai sudah ada');
        }
        $siswa->mapel()->attach($request->mapel,['nilai'=>$request->nilai]);

        return redirect()->route('siswa')->with('success', 'Input nilai berhasil');
    }
    public function tampilnilai(){
        
        $siswa = siswa_model::all();
        // dd($siswa);
        $mapel = mapel::with('siswa')->get();
        // dd($mapel);
        return view('nilaiSiswa', ['siswa'=>$siswa, 'mapel'=>$mapel]);
    }
}
