@section('script2')
    <script type="text/javascript">
        var isAgeCheck = 'false' == 'true';
        var isYearAgree = false;
    </script>
    
    <link type="text/css" rel="stylesheet" href="{{ $url_i_mo }}{{ $ecmcss }}/jquery-ui.css?t=20201119001">
    
    <script language="javascript" type="text/javascript" src='{{ $url_i_mo }}{{ $ecmjs }}/jquery-1.12.4.js?t=20201119001'></script>
    
    <script language="javascript" type="text/javascript" src='{{ $url_i_mo }}{{ $ecmjs }}/jquery-ui.js?t=20201119001'></script>
    
    <script type="text/javascript" src="{{ $url_i_mo }}{{ $ecmjs }}/tool/txtTool.js?t=20210607006"></script>
    <script type="text/javascript" src="{{ $url_i_mo }}{{ $ecmjs }}/tool/storageTool.js?t=20220524005"></script>
    
    <script language="JavaScript" type="text/JavaScript">
        var IS_WEBP_JS = 'true' == 'true';
        var BALANCE_IMG_DOMAIN_JS = '//i<BYPASS>.momoshop.com.tw';
    </script>

    <script language="javascript" type="text/javascript" src='{{ $url_i_mo }}{{ $ecmjs }}/goods/imgWebp.js?t=20210601006'></script>
    <script language="javascript" type="text/javascript" src='{{ $url_i_mo }}{{ $ecmjs }}/momo.js?t=20220915001'></script>
    
    <script type="text/javascript" src='{{ $url_i_mo }}{{ $ecmjs }}/AstarConvert.js?t=20201120001'></script>
    
    
    
    <script type="text/javascript" src="{{ $url_i_mo }}{{ $ecmjs }}/sso.js?t=20211015001"></script>
    
    <script type="text/javascript" src="{{ $url_i_mo }}{{ $ecmjs }}/main/urlCache.js?t=20220524005"></script>
    
    <link rel="stylesheet" href='{{ $url_i_mo }}{{ $ecmcss }}/2015Base.css?t=20221114001' type="text/css" />
    <link rel="stylesheet" href='{{ $url_i_mo }}{{ $ecmcss }}/2019Main.css?t=20221115002' type="text/css" />
    <link rel="stylesheet" href='{{ $url_i_mo }}{{ $ecmcss }}/2019MenuList.css?t=20220912001' type="text/css" />
    
    <script src='{{ $url_i_mo }}{{ $ecmjs }}/2019MenuList.js?t=20220912001'></script>
    <script src='{{ $url_i_mo }}{{ $ecmjs }}/block.js?t=20220309001'></script>
    <script src='{{ $url_i_mo }}{{ $ecmjs }}/tooth.js?t=20201119001'></script>
    <script src='{{ $url_i_mo }}{{ $ecmjs }}/2019Main.js?t=20221115007'></script>
    <script src='{{ $url_i_mo }}{{ $ecmjs }}/slide.js?t=20201119001'></script>
    <script src='{{ $url_i_mo }}{{ $ecmjs }}/floatingLayerBox.js?t=20201119001'></script>
    <script src='{{ $url_i_mo }}{{ $ecmjs }}/tooth2019.js?t=20201119001'></script>
    
    
    
    
    
    
    <script>
    if (true && location.href.toString().indexOf('https') == -1) {
    
        var momowaCmds = momowaCmds || [];
        momowaCmds.push(['setSiteId','shop']);
        momowaCmds.push(['setTrackerUrl','{{ $url_m_mo }}/momowa/rc/RC.MMW']);
        momowaCmds.push(['trackPageView']);
        (function(){
        var _mwa =document.createElement('script');_mwa.type = 'text/javascript';
        _mwa.async = true;
        _mwa.src = '{{ $url_m_mo }}/momowa/rc/js/momowa.js?t=20170508001';
        var _mwa_s = document.getElementsByTagName('script')[0];
        _mwa_s.parentNode.insertBefore(_mwa,_mwa_s);
        }());
        
        window.momowaReady = function() {
        ChangeHttps();
        }
        function ChangeHttps() {
            // 可惡的自動跳轉，終於抓到你！
            // location.replace('{{ $url_w_mo }}/main/Main.jsp');
        
        }
    }
    </script>

    <script language="JavaScript">
        function MM_swapImage() { //v3.0
            var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
            if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
        }
        function MM_findObj(n, d) { //v4.0
            var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
            d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
            if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
            for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
            if(!x && document.getElementById) x=document.getElementById(n); return x;
        }
        function MM_swapImgRestore() { //v3.0
            var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
        }
        function Main_openBrWindow(theURL,winName,features) { //v2.0
            window.open(theURL,winName,features);
        }
        function MM_openBrWindow(theURL,winName,features) { //v2.0
            window.open(theURL,winName,features);
        }
    
    </script>
    
    
    
    <!-- Google Tag Manager -->
    <script>
        window.dataLayer = [];
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-K77NGQ6');
    </script>
    <!-- End Google Tag Manager -->
    
    
    
    <script type="text/javascript" src='{{ $url_i_mo }}{{ $ecmjs }}/ArkModule.js?t=20201119001'></script>
    
    
    
    <!-- Global site tag (gtag.js) - Google Analytics 4-->
    <script async src="//www.googletagmanager.com/gtag/js?id=G-ZF0L1038WJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-ZF0L1038WJ');
    </script>
@endsection
