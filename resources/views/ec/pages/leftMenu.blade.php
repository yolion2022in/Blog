{{-- from  ec.pages.homeBody.blade.php --}}

{{-- 
    @foreach ($teams as $key => $team)
        {{ str_ordinal($key + 1) }}
    @endforeach

    @foreach($products as $key => $value)
        <p>{{ $value }}</p>
    @endforeach

    "" ?: javascript:;
 --}}

{{-- 
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
            'aClass' => ['','appDownloadbtn insuranceBtn','appDownloadbtn','appDownloadbtn','appDownloadbtn','appDownloadbtn','appDownloadbtn'],
            'aHref' => ['/main/Main.jsp?cid=memb&oid=back2hp&mdiv=1099800000-bt_0_150_01-bt_0_150_01_e1&ctype=B',
                        '/fuli/redirect.jsp?redirect_url=//www.momo5188.com',
                        '/edm/edm.jsp?lpn=Nzpe4YTLgeM&n=1&cid=memb&oid=APP&mdiv=1099800000-bt_0_150_01-bt_0_150_01_e3',
                        '/league/indexServlet?cid=memb&oid=league&mdiv=1099800000-bt_0_150_01-bt_0_150_01_e4',
                        '/category/LgrpCategory.jsp?l_code=3200100000&cid=memb&oid=china&mdiv=1099800000-bt_0_150_01-bt_0_150_01_e5',
                        '/category/LgrpCategory.jsp?l_code=4099900000&cid=memb&oid=china&mdiv=1099800000-bt_0_150_01-bt_0_150_01_e6',
                        ''
                        ],
            'aTitle' => ['首頁','momo富立保險','APP','點點賺','直配大陸','書店',''],
        ],
        //Class 262 Area
        'class262area' => [

        ],
        'htmlStr' => '' //組html串
    ]
];
--}}

{{ $htmlStr = '' }}

@foreach ($leftMenuPackage as $k => $v)
    <li>
        <a href="{{ $url_w_mo }}/main/Main.jsp?cid=memb&oid=back2hp&mdiv=1099800000-bt_0_150_01-bt_0_150_01_e1&ctype=B" title="{{ $momogo }} - 首頁">
            <p></p>回首頁</a>
    </li> 
@endforeach


  <ul class="leftMenu"> 
    <li>
        <a href="{{ $url_w_mo }}/main/Main.jsp?cid=memb&oid=back2hp&mdiv=1099800000-bt_0_150_01-bt_0_150_01_e1&ctype=B" title="{{ $momogo }} - 首頁">
            <p></p>回首頁</a>
    </li> 
    <li class="appDownloadbtn insuranceBtn">
        <a href="{{ $url_w_mo }}/fuli/redirect.jsp?redirect_url=//www.momo5188.com" title="momo富立保險">
            <p></p>momo富立保險</a>
    </li> 
    <li class="appDownloadbtn">
        <a href="{{ $url_w_mo }}/edm/edm.jsp?lpn=Nzpe4YTLgeM&n=1&cid=memb&oid=APP&mdiv=1099800000-bt_0_150_01-bt_0_150_01_e3" title="APP下載">
            <p></p>APP下載</a>
    </li> 
    <li class="appDownloadbtn"><a href="{{ $url_w_mo }}/league/indexServlet?cid=memb&oid=league&mdiv=1099800000-bt_0_150_01-bt_0_150_01_e4" title="點點賺"><p></p>點點賺</a></li> 
    <li class="appDownloadbtn"><a href="{{ $url_w_mo }}/category/LgrpCategory.jsp?l_code=3200100000&cid=memb&oid=china&mdiv=1099800000-bt_0_150_01-bt_0_150_01_e5" title="直配大陸"><p></p>直配大陸</a></li> 
    <li class="appDownloadbtn"><a href="{{ $url_w_mo }}/category/LgrpCategory.jsp?l_code=4099900000&cid=memb&oid=china&mdiv=1099800000-bt_0_150_01-bt_0_150_01_e6" title="書店"><p></p>書店</a></li> 
    <li class="appDownloadbtn"><a href="" title="{{$menuItem}}"><p></p>{{$menuItem}}</a></li> 
  </ul> 

