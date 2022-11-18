<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Yolion2022 - @yield('title')</title>
    
    @yield('css')
</head>
<body>
    {{-- @yield('content') --}}
    {{-- 特例形況下，section ... show 也可以是挖洞 --}}
    @section('content')
        <div style='color:green'>可被選擇繼承的內容</div>
    @show

    @yield('js')
</body>
</html>
