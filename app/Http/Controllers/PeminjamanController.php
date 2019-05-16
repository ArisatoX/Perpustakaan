<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$anggotas = Anggota::all()->paginate();
        $peminjamans = Peminjaman::orderBy('ID_pinjam','asc')->paginate();
        return view('pages.peminjaman')->with('peminjamans',$peminjamans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.peminjamancreate');
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
            'ID_buku' => 'required',
            'ID_anggota' => 'required',
            'ID_staff' => 'required',
            'tgl_pinjam' => 'required'
        ]);

        $peminjaman = new Peminjaman;
        $peminjaman->ID_buku = $request->input('ID_buku');
        $peminjaman->ID_anggota = $request->input('ID_anggota');
        $peminjaman->ID_staff = $request->input('ID_staff');
        $peminjaman->tgl_pinjam = $request->input('tgl_pinjam');
        $peminjaman->save();

        return redirect('/peminjaman')->with('success', 'Peminjaman telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjaman = Peminjaman::find($id);
        return view('pages.peminjamanshow')->with('peminjaman', $peminjaman);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjaman = Peminjaman::find($id);
        return view('pages.peminjamanedit')->with('peminjaman', $peminjaman);
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
            'ID_buku' => 'required',
            'ID_anggota' => 'required',
            'ID_staff' => 'required',
            'tgl_pinjam' => 'required'
        ]);

        $peminjaman = Peminjaman::find($id);
        $peminjaman->ID_buku = $request->input('ID_buku');
        $peminjaman->ID_anggota = $request->input('ID_anggota');
        $peminjaman->ID_staff = $request->input('ID_staff');
        $peminjaman->tgl_pinjam = $request->input('tgl_pinjam');
        $peminjaman->save();

        return redirect('/peminjaman')->with('success', 'Peminjaman telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->delete();

        return redirect('/peminjaman')->with('success', 'Peminjaman telah dihapus');
    }
}
