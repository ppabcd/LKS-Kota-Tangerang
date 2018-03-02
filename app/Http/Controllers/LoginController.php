<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Login;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware(function($req,$next){
            if(isset($_SESSION['login'])){
                return redirect('/');
            }
            return $next($req);
        });
    }
    public function index()
    {
        return view('login.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function check(Request $request)
    {
        $req = $request->except(['_method','_token']);
        $c = Login::where(['username'=>$req['username']]);
        if($c->count() == 0){
            return redirect()->back()->with('error','Username / Password salah');
        }
        $f = $c->first();
        if(md5($req['password']) != $f->password){
            return redirect()->back()->with('error','Username / Password salah');
        }
        $_SESSION['username'] = $f->username;
        $_SESSION['login'] = true;
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
