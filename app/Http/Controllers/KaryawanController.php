<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jabatan;
use App\Karyawan;
use App\Http\Helpers;
class KaryawanController extends Controller
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
        $d['jab']= Karyawan::get();
        return view('karyawan.home',$d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['jab'] = Jabatan::get();
        return view('karyawan.add',$d);
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
        $req['nip'] = Helpers::uniquenumber($req['nip'],20);
        $req['password'] = password_hash($req['password'],1);
        $c = Karyawan::where(['nip'=>$req['nip']]);
        if($c->count() != 0){
            return redirect()->back()->withInput()->with('error','NIP sudah ada');
        }
        Karyawan::insert($req);
        return redirect('karyawan')->with('success','Berhasil Menambahkan data');
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
        $j = Karyawan::where(['nip'=>$id]);
        if($j->count() == 0){
            return redirect()->back()->with('error','Tidak ada data tersedia');
        }
        $d['j'] = $j->first();
        $d['jab'] = Jabatan::get();
        return view('karyawan.edit',$d);
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
        if(isset($req['password'])){
            $req['password'] = password_hash($req['password'],1);
        }
        Karyawan::where(['nip'=>$id])->update($req);
        return redirect('/karyawan')->with('success','Berhasil Mengedit Data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Karyawan::where(['nip'=>$id])->delete();
        return redirect('/karyawan')->with('success','Berhasil Menghapus data');
    }
}
