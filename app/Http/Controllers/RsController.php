<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use DB;
use Illuminate\Http\Request;

class RsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar = DB::table('kamar')
        ->join('pasien','pasien.id','=','kamar.id_pasien')
        ->join('dokter','dokter.id', '=', 'kamar.id_dokter')
        ->get();
        return view('kamar0006', ['kamar'=>$kamar]);
    }

    public function create()
    {
        //
    }
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