<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$anggotas = Anggota::all()->paginate();
        $anggotas = Anggota::orderBy('ID_anggota','asc')->paginate();
        return view('pages.anggota')->with('anggotas',$anggotas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.anggotacreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_anggota' => 'required',
            'jenis_kel' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required'
        ]);

        $anggota = new Anggota;
        $anggota->nama_anggota = $request->input('nama_anggota');
        $anggota->jenis_kel = $request->input('jenis_kel');
        $anggota->alamat = $request->input('alamat');
        $anggota->no_telp = $request->input('no_telp');
        $anggota->save();

        return redirect('/anggota')->with('success', 'Anggota telah ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggota = Anggota::find($id);
        return view('pages.anggotashow')->with('anggota', $anggota);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = Anggota::find($id);
        return view('pages.anggotaedit')->with('anggota', $anggota);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_anggota' => 'required',
            'jenis_kel' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required'
        ]);
        
        $anggota = Anggota::find($id);
        $anggota->nama_anggota = $request->input('nama_anggota');
        $anggota->jenis_kel = $request->input('jenis_kel');
        $anggota->alamat = $request->input('alamat');
        $anggota->no_telp = $request->input('no_telp');
        $anggota->save();

        return redirect('/anggota')->with('success', 'Anggota telah diupdate');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = Anggota::find($id);
        $anggota->delete();

        return redirect('/anggota')->with('success', 'Anggota telah dihapus');
    }
}
