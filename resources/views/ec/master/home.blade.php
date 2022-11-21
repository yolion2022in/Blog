<html lang="zh-TW">
  <head>
    @yield('meta')

    @yield('link')

    <title>@yield('title', 'Fake PChome 線上購物') {{-- title給預設值 --}}</title>
    
    @yield('script')

    @yield('meta2')
  </head>

  <body>
    @section('content')
        <div style='color:goldenrod'>Master Fake Pchome</div>
    @show
  </body>
</html>