<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jabatan;
use App\Http\Helpers;
class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware(function($req,$next){
            if(!isset($_SESSION['login'])){
                return redirect('/');
            }
            return $next($req);
        });
    }
    public function index()
    {
        $d['jab']= Jabatan::get();
        return view('jabatan.home',$d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jabatan.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = $request->except(['_method','_token']);
        $req['created_at'] = \Carbon\Carbon::now();
        $req['updated_at'] = \Carbon\Carbon::now();
        $req['kode_jabatan'] = Helpers::uniquenumber($req['kode_jabatan']);
        $c = Jabatan::where(['kode_jabatan'=>$req['kode_jabatan']]);
        if($c->count() != 0){
            return redirect()->back()->withInput()->with('error','Kode jabatan sudah ada');
        }
        Jabatan::insert($req);
        return redirect('jabatan')->with('success','Berhasil Menambahkan data');
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
        $j = Jabatan::where(['kode_jabatan'=>$id]);
        if($j->count() == 0){
            return redirect()->back()->with('error','Tidak ada data tersedia');
        }
        $d['j'] = $j->first();
        return view('jabatan.edit',$d);
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
        $req = $request->except(['_token','_method']);
        Jabatan::where(['kode_jabatan'=>$id])->update($req);
        return redirect('/jabatan')->with('success','Berhasil Mengedit Data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Karyawan::where(['kode_jabatan'=>$id])->delete();
        Jabatan::where(['kode_jabatan'=>$id])->delete();
        return redirect('/jabatan')->with('success','Berhasil Menghapus data');
    }
}
