<!DOCTYPE HTML>
<html lang="zh-TW">
  <head>
    @yield('link')

    <title>@yield('title', 'Fake MoMo 線上購物') {{-- title給預設值 --}}</title>
    
    @yield('script')

    @yield('meta')

    @yield('script2')

  </head>

  <body>
    @section('content')
        <hr/>
        <div style='color:goldenrod'>Master Fake Pchome</div>
        <hr/>
    @show
  </body>
</html>