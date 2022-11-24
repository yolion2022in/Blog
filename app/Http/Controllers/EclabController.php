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
        $momo_package = [
            'obj' => [
                'url_w_mo' => '//www.momoshop.com.tw',
                'url_i_mo' => '//image.momoshop.com.tw',
                'url_m_mo' => '//momowa.momoshop.com.tw',
                'ecmcss' => '/ecm/css',
                'ecmjs' =>  '/ecm/js',
                'ecmimg' => '/ecm/img',
                'momogo' => 'momo購物網',
                'master_content' => "<h1 style='color:goldenrod'>Master Fake MoMo 線上購物 @_@ !!!  </h1>",
                'js_script' => " <br/> &nbsp; <script>conso.info(\'log test\')</script>",
                //leftMenu Package
                'leftMenuPackage' => [
                    ['','/main/Main.jsp?cid=memb&oid=back2hp&mdiv=1099800000-bt_0_150_01-bt_0_150_01_e1&ctype=B','首頁'],
                    ['appDownloadbtn insuranceBtn','/fuli/redirect.jsp?redirect_url=//www.momo5188.com','momo富立保險'],
                    ['appDownloadbtn','/edm/edm.jsp?lpn=Nzpe4YTLgeM&n=1&cid=memb&oid=APP&mdiv=1099800000-bt_0_150_01-bt_0_150_01_e3','APP'],
                    ['appDownloadbtn','/league/indexServlet?cid=memb&oid=league&mdiv=1099800000-bt_0_150_01-bt_0_150_01_e4','點點賺'],
                    ['appDownloadbtn','/category/LgrpCategory.jsp?l_code=3200100000&cid=memb&oid=china&mdiv=1099800000-bt_0_150_01-bt_0_150_01_e5','直配大陸'],
                    ['appDownloadbtn','/category/LgrpCategory.jsp?l_code=4099900000&cid=memb&oid=china&mdiv=1099800000-bt_0_150_01-bt_0_150_01_e6','書店'],
                    ['appDownloadbtn','','']
                ],
                //Class 262 Area
                'class262area' => [
                    
                ],
                'htmlStr' => '' //組html串
            ]
        ];

        return $arg=='portal' ? view('ec.pages.portal') : view('ec.pages.home', $momo_package['obj']);
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
