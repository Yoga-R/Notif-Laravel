<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbltenagakerja;
use App\tblkeahlian;

class TenagaKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tbltenagakerja::all();
        return view('TenagaKerja.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $keahlian = tblkeahlian::all();
        return view('TenagaKerja.create', compact('keahlian'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name'     => 'required',
        //     'email'     => 'required',
        //     'no_telepon'   => 'required',
        //     'keahlian'   => 'required'
        // ]);

        //upload image


        $post = tbltenagakerja::create([
            'name'     => $request->nama,
            'email'     => $request->email,
            //  'password'   => bcrypt($request->password),
            'notelpon'   => $request->no_telepon,
            'keahlian'   => $request->keahlian
        ]);

        if ($post) {
            //redirect dengan pesan sukses
            return redirect()->route('tenagakerja.create')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('tenagakerja.create')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
