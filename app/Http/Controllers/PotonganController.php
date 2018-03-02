<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Potongan;
use App\Http\Helpers;
class PotonganController extends Controller
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
        $d['jab']= Potongan::get();
        return view('potongan.home',$d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('potongan.add');
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
        Potongan::insert($req);
        return redirect('potongan')->with('success','Berhasil Menambahkan data');
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
        $j = Potongan::where(['id_potongan'=>$id]);
        if($j->count() == 0){
            return redirect()->back()->with('error','Tidak ada data tersedia');
        }
        $d['j'] = $j->first();
        return view('potongan.edit',$d);
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
        Potongan::where(['id_potongan'=>$id])->update($req);
        return redirect('/potongan')->with('success','Berhasil Mengedit Data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Potongan::where(['id_potongan'=>$id])->delete();
        return redirect('/potongan')->with('success','Berhasil Menghapus data');
    }
}
