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
        {!! $master_content !!}
        <div>語法：<pre>{{ $master_content }}</pre></div>
        <div>轉義後：<pre>{{{ $master_content }}}</pre></div>
      <hr/>
    @show
  </body>
</html>