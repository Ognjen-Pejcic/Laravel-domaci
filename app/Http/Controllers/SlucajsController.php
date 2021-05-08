<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slucaj;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class SlucajsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SLucaj::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Slucaj::create($request->all());
        echo "<script>alert('Uspesno ste sacuvali slucaj');</script>";
        return view('unos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Slucaj::find($id);
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
        $slucaj = Slucaj::find($id);
        $slucaj->update($request->all());
        return $slucaj;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Slucaj::destroy($id);
    }
    // public function indexx(){
    //     $slucaj = auth()->user()->slucaj;
    //     return view ('dashboard', compact('slucaj'));
    // }


    public function indexx(){
        $slucaj = DB::select('select * from slucajs');
        return view('dashboard',['slucaj'=>$slucaj]);
        }

        public function dodaj(){
            //$slucaj = DB::select('select * from slucajs');
            return view('unos');
            }
}
