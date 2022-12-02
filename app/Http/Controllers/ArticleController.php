<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Services\CurlService;   //我建立 Services 資料夾 (有s) ???
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleStoreRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result['fakeContent'] = CurlService::get('https://textgen.cqd.tw?format=plain&size=30');
        $result['fakeTitle'] = mb_substr( $this -> mb_str_shuffle( $result['fakeContent'] ) ,0,8,"utf-8");   //取n個字
        $result['errTipAttr'] = " class='alert alert-danger' style='color:pink' ";

        return view('articles.create', $result);

        // return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleStoreRequest $request)
    {
        return $request->all();
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

    //自訂中文(中日韓亞洲語系雙bytes)打亂 方法
    public function mb_str_shuffle($str){ 

        $ret = array();
        $cotype = mb_detect_encoding($str);   //偵測編碼
  
        for ($i=0; $i<mb_strlen($str, $cotype); $i++){
           array_push($ret, mb_substr($str, $i, 1, $cotype));
        }
  
        shuffle($ret);
        return join($ret);
  
     }
  
}
