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
            'htmlStr' => '' //組html串
        ]
    ];
--}}

{{ $htmlStr = '' }}

<ul class="leftMenu"> 

@foreach ($leftMenuPackage as $idx => $values)
    @switch($values[2])
        @case('首頁')
            {{ $htmlStr = '回'. $values[2] }}
            {{ $values[2] = "$momogo - $values[2]" }}
            @break

        @case('')
            {{ $values[2] = "menuItem ". ($idx + 1) }}
            @break

        @default
            {{-- Default case... --}}
    @endswitch

    <li>
        <a 
            {{ empty($values[0]) ? '' : "class= $values[0]  " }}
            href="{{ empty($values[1]) ? 'javascript:;' : $url_w_mo . $values[1] }}" 
            title="{{ $values[2] }}">
            <p></p>{{ $htmlStr ?: $values[2] }}</a>
    </li> 
    {{ $htmlStr = '' }} {{-- 歸零 --}}
@endforeach


</ul>


  {{-- 
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
--}}

