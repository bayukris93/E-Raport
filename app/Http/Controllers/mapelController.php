<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mapel;
use Illuminate\Support\Facades\DB;

class mapelController extends Controller
{
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    //tampil mapel  
    public function mapel()
    {
         $mapel = mapel::paginate(3);

         return view('mapel.mapel', ['mapel' => $mapel]);
    }

    //tambah mapel
    public function tambahMapel()
    {
        return view('mapel.tambahMapel');
    }

    //simpan mapel
    public function simpanMapel(Request $request)
    {
        {
            // Validate the request...
            $this->_validation($request);
            $mapel = new mapel;
            $mapel->kd_mapel = $request->kd_mapel;
            $mapel->nama_mapel = $request->nama_mapel;
            $mapel->pengajar = $request->pengajar;
    
            $mapel->save();
        return redirect()->route('mapel')->with('success', 'Data Berhasil di tambahkan!');

        }
    //     DB::table('mapel')->insert(
    //         ['kd_mapel' => $request->kd_mapel, 'nama_mapel'=>$request->nama_mapel, 'pengajar'=> $request->pengajar]
    //     );
        // return redirect()->route('mapel');
    }

    //edit mapel
    public function editMapel($id)
    {
        $mapel = DB::table('mapel')->where('id', $id)->first();
        return view('mapel.editMapel', ['mapel' => $mapel]);
    }

    //update mapel
    public function updateMapel(Request $request, $id)
    {
        $this->_validation($request);
        mapel::where('id', $id)->update(['kd_mapel' => $request->kd_mapel, 'nama_mapel' => $request->nama_mapel, 'pengajar' => $request->pengajar]);
        return redirect()->route('mapel')->with('success', 'Data Berhasil di edit!');
    }
    private function _validation(Request $request)
    {
        $validation = $request->validate(
            [
                'kd_mapel' => 'required',
                'nama_mapel' => 'required',
                'pengajar' => 'required',
            ],
            [
                'kd_mapel.required' => 'data tidak boleh kosong!',
                'nama_mapel.required' => 'Nama tidak boleh kosong!',
                'pengajar.required' => 'data tidak boleh kosong!'
            ]
        );
    }

    //hapus mapel
    public function delete($id)
    {
        mapel::where('id', $id)->delete();
        // DB::table('mapel')->where('id', $id)->delete();
        return redirect()->back();
    }
}
