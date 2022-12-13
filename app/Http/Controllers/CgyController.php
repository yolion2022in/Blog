<?php

namespace App\Http\Controllers;

use App\Models\Cgy;
use Illuminate\Http\Request;

class CgyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cgies = Cgy::where('id','>',2)->Where('id','<=',7)->orderBy('id', 'desc')->get();
        return $cgies;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //查詢單筆
        // $cgy = Cgy::find($id);
        // $cgy = Cgy::findOrFail($id);
        // $cgy = Cgy::findOrFail([6,7]);

        // $cgy = Cgy::where('id',$id);
        // $cgy = Cgy::where('id',$id)->first();
        // $cgy = Cgy::where('id',$id)->orderBy('created_at','desc')->get();
        // $cgy = Cgy::where('id',true)->orderBy('created_at','desc')->get();   //true = 1 即 $id = 1 (第一筆))

        //查詢多筆
        // $cgy = Cgy::all();
        // $cgy = Cgy::get();
        // $cgy = Cgy::where('id',$id)->get();
        // $cgy = Cgy::where('id',$id)->orderBy('created_at','desc')->get();
        $cgy = Cgy::where('id', '>', $id)->orderBy('created_at','desc')->get();
        // $cgy = Cgy::where('id',true)->get();    //true = 1 即 $id = 1 (第一筆))
        // $cgy = Cgy::where('id',true)->orderBy('created_at','desc')->get();   //true = 1 即 $id = 1 (第一筆))




        // dd($cgy);    //會有結果，但找不到頁面 ( because 在記憶體暫存區，不會產生實際頁面資料)

        return $cgy;
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
