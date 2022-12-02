<html>
<head>
    {{-- 
        HTML::script() is used for .js files 
        HTML::style() is used for css.
        {!! Html::style('css/bootstrap.min.js') !!}
    --}}
    
    {{-- {!! Html::script(" asset('css/validate.js') ") !!} --}}
    
    
    <script>
        function validate(typestr) {
            var isfake_Title = document.getElementById("isfake_tt");
            var isfake = document.getElementById("isfake");
            var fakeTitle = document.getElementById('faketitle');
            var fakeContent = document.getElementById('fakecontent');

            if( typestr == 'title' ){
                isfake_tt.checked ? fakeTitle.value = "{!! $fakeTitle !!}" : fakeTitle.value = '';
            }else{
                isfake.checked ? fakeContent.value = "{!! $fakeContent !!}" : fakeContent.value = '';
            }
        }
    </script>
        
</head>

<body>
    
    <h1>表單頁面</h1>
    
    {!! Form::open(['url'=>'articles','method'=>'POST','files'=>true]) !!}
    {{-- {!! Form::open(['action'=>'App\Http\Controllers\ArticlesController@store','method'=>'POST','files'=>true]) !!} --}}
    
    @include('articles._form')

    {!! Form::close() !!}

    @include('articles._error')    
    
</body>
</html>