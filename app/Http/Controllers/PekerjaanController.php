<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tblPekerjaan;
class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pekerjaan=tblPekerjaan::paginate(25);
        return view('dashboard-baru',compact('pekerjaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pekerjaan.create2');
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
            'judul'     => 'required',
            'detail'     => 'required'
         ]);
         $post = tblPekerjaan::create([
'Judul_Pekerjaan'=>$request->judul,
'Detail_Pekerjaan'=>$request->detail,
'File'=>'null',
         ]);
         if($request->file('file')!=null){
            //simpan icon storage
            $image = $request->file('file');
            $image->storeAs('public/file-pekerjaan/', $image->hashName());
            //simpan icon database
            $post->update([
                'File'=>$image->hashName()
            ]);
            if($post){
                return redirect()->route('pekerjaan.index')->with('success','Data berhasil ditambahkan');
            }else{
                return redirect()->route('pekerjaan.index')->with('error','Data gagal ditambahkan');
            }
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
    $pekerjaan=tblpekerjaan::findOrFail($id);
    $pekerjaan->delete();
    if ($pekerjaan){
        return redirect()->route('pekerjaan.index')->with(['Success'=> 'data berhasil dihapus']);
    }else{
        return redirect()->route('pekerjaan.index')->with(['Error'=> 'data berhasil dihapus tapi boong']);
    }
        //
    }
}
