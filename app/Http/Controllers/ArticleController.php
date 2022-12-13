<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Services\CurlService;   //我建立 Services 資料夾、 CurlService Class
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleStoreRequest;
use App\Services\GismoService;  //自訂小玩意 GismoService Class

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
        $result['fakeTitle'] = GismoService::mb_substr_and_shuffle( $result['fakeContent']  ,8 );
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
        $data = $request->all();

        if ($request->file('pic')->isValid()) {
            //處理檔案上傳
            if ($request->hasFile('pic')) {
                $file = $request->file('pic');  //獲取UploadFile例項
                if ( $file->isValid()) { //判斷檔案是否有效
                    $filename = $file->getClientOriginalName(); //檔案原名稱
                    $extension = $file->getClientOriginalExtension(); //副檔名
                    $fileName = time() . "." . $extension;    //重新命名
                    $data['pic'] = $fileName;
                    $path = $file->storeAs('public/pic',$fileName); //儲存至指定目錄
                }
            }
            // dd($data);
            return $data;
        }else{
            // dd($request->file('pic'));
            return $request->all();
        }
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
