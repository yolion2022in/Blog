<?php

namespace App\Http\Controllers;

// use App\Models\Ec;
use Illuminate\Http\Request;

class EclabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($arg = 'home')
    {
        $momo_packge = [
            'obj' => [
                'url_w_mo' => '//www.momoshop.com.tw',
                'url_i_mo' => '//image.momoshop.com.tw',
                'url_m_mo' => '//momowa.momoshop.com.tw',
                'ecmcss' => '/ecm/css',
                'ecmjs' =>  '/ecm/js',
                'ecmimg' => '/ecm/img',
                'momogo' => 'momo購物網',
            ]
        ];

        return $arg=='portal' ? view('ec.pages.portal') : view('ec.pages.home', $momo_packge['obj']);
        // return view('ec.pages.temp');
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
