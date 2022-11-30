<head>
{{-- 
    HTML::script() is used for .js files 
    HTML::style() is used for css.
    {!! Html::style('css/bootstrap.min.js') !!}
--}}

{{-- {!! Html::script(" asset('css/validate.js') ") !!} --}}


    <script>
        function validate() {
            var isfake = document.getElementById("isfake");
            var fakeContent = document.getElementById('fakecontent');

            isfake.checked ? fakeContent.value = 'fake content ...' : fakeContent.value = '';
        }
    </script>
    
</head>

<h1>表單頁面</h1>

<span>from</span>


{{-- {!! Form::open(['action'=>'App\Http\Controllers\ItemController@store','method'=>'POST','files'=>true]) !!} --}}

{!! Form::open(['url'=>'items','method'=>'POST','files'=>true]) !!}
{{-- {!! Form::open(['action'=>'App\Http\Controllers\ItemController@store','method'=>'POST','files'=>true]) !!} --}}

    {!! Form::label('title', '標題') !!}
    {!! Form::text('title', '請輸入標題', [
                                    'class' => 'myclass',
                                    'style' => 'color:red;',
                                    'otherAttr' => '自訂屬性'
                                ]) !!}
    @error('title')
        <div class="alert alert-danger" style='color:pink'>{{ $message }}</div>
    @enderror  

    <br><br>
    {!! Form::label('content', '內文') !!}
    {!! Form::textarea('content', null, [
                                    'id'=>'fakecontent',
                                    'cols'=>60,
                                    'rows'=>20
                                ]) !!}
    @error('content')
        <div class="alert alert-danger" style='color:pink'>{{ $message }}</div>
    @enderror

    <br><br>
    {!! Form::hidden('mode', 1) !!}

    <br><br>
    {!! Form::label('interest', '興趣？') !!}<br>
    球類活動 {!! Form::checkbox('interest[]', 'ball', false) !!}
    遊戲 {!! Form::checkbox('interest[]', 'game', true) !!}
    電影 {!! Form::checkbox('interest[]', 'movie', true) !!}

    <br><br>
    {!! Form::label('status', '填入假文？') !!}<br>
    是 {!! Form::radio('status', 1, false, ['id'=>'isfake', 'onclick'=>'validate()']) !!}
    否 {!! Form::radio('status', 0, true) !!}
    

    <br><br>
    {!! Form::submit('送出', []) !!}
    {!! Form::reset('重置', []) !!}

{!! Form::close() !!}



@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div style="color:red">{{$error}}</div>
    @endforeach
@endif

