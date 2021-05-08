<?php

namespace App\Http\Controllers;

use App\Models\slucaj;
use GuzzleHttp\RedirectMiddleware;
use Illuminate\Http\Request;

class SlucajController extends Controller
{
    public function index(){
        $slucaj = auth()->user()->slucaj;
        return view ('dashboard', compact('slucaj'));
    }
    public function add(){
        return view('add');
    }
    public function create(Request $request){
        //$this->validate($request, ['description'=>'required']);
        $slucaj = new Slucaj();
        $slucaj->naziv = $request->naziv;
        $slucaj->korisnik = $request->korisnik;
        $slucaj->opis = $request->opis;
        $slucaj->tipSlucaja = $request->tipSlucaja;
        $slucaj->arhiviran = $request->arhiviran;
        $slucaj->user_id = auth()->user()->id;
        return redirect('/dashboard');
    }

    public function edit(Slucaj $slucaj){
        if(auth()->user()->id==$slucaj->user_id){
            return view('edit', compact('slucaj'));
        }else{
            return redirect('/dashboard'); 
        }
    }

    public function update(Request $request, Slucaj $slucaj){
        $this->validate($request, ['description'=>'required']);
        $slucaj->description = $request->description;
        $slucaj->save();
        return redirect('/dashboard');
    }
}
