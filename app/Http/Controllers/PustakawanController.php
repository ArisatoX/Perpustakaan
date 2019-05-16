<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pustakawan;

class PustakawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pustakawans = Pustakawan::orderBy('nama_staff','asc')->paginate();
        return view('pages.pustakawan')->with('pustakawans',$pustakawans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pustakawancreate');
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
            'nama_staff' => 'required',
            'jenis_kel' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'no_telp' => 'required'
        ]);

        $pustakawan = new Pustakawan;
        $pustakawan->nama_staff = $request->input('nama_staff');
        $pustakawan->jenis_kel = $request->input('jenis_kel');
        $pustakawan->alamat = $request->input('alamat');
        $pustakawan->tgl_lahir = $request->input('tgl_lahir');
        $pustakawan->no_telp = $request->input('no_telp');
        $pustakawan->save();

        return redirect('/pustakawan')->with('success', 'Pustakawan telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pustakawan = Pustakawan::find($id);
        return view('pages.pustakawanshow')->with('pustakawan', $pustakawan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pustakawan = Pustakawan::find($id);
        return view('pages.pustakawanedit')->with('pustakawan', $pustakawan);
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
            'nama_staff' => 'required',
            'jenis_kel' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'no_telp' => 'required'
        ]);

        $pustakawan = Pustakawan::find($id);
        $pustakawan->nama_staff = $request->input('nama_staff');
        $pustakawan->jenis_kel = $request->input('jenis_kel');
        $pustakawan->alamat = $request->input('alamat');
        $pustakawan->tgl_lahir = $request->input('tgl_lahir');
        $pustakawan->no_telp = $request->input('no_telp');
        $pustakawan->save();

        return redirect('/pustakawan')->with('success', 'Pustakawan telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pustakawan = Pustakawan::find($id);
        $pustakawan->delete();

        return redirect('/pustakawan')->with('success', 'Pustakawan telah dihapus');
    }
}
