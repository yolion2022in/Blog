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
    
    {!! Form::open(['url'=>'articles','method'=>'POST','files'=>true]) !!}
    {{-- {!! Form::open(['action'=>'App\Http\Controllers\ArticlesController@store','method'=>'POST','files'=>true]) !!} --}}
    
        {!! Form::label('subject', '標題') !!}
        {!! Form::text('subject', '請輸入標題', [
                                        'class' => 'article',
                                        'style' => 'color:red;',
                                        'otherAttr' => '自訂屬性'
                                    ]) !!}
        @error('subject')
            <div class="alert alert-danger" style='color:pink'>{{ $message }}</div>
        @enderror  
    
    
        <br><br>
        {!! Form::hidden('category', 1) !!}


        <br><br>
        {!! Form::label('desc', '內文') !!}
        {!! Form::textarea('desc', null, [
                                        'id'=>'fakecontent',
                                        'cols'=>60,
                                        'rows'=>20
                                    ]) !!}
        @error('desc')
            <div class="alert alert-danger" style='color:pink'>{{ $message }}</div>
        @enderror


        <br><br>
        {!! Form::label('status', '狀態啟用？') !!}<br>
        是 {!! Form::radio('status', 1, false, ['id'=>'isfake', 'onclick'=>'validate()']) !!}
        否 {!! Form::radio('status', 0, true) !!}

        <br><br>
        {!! Form::hidden('sort', 1) !!}


        <br><br>
        {{-- {!! Form::hidden('enable_at', 'date') !!} --}}



    
        <br><br>
        {!! Form::label('tags', '標籤') !!}<br>
        新聞 {!! Form::checkbox('tags[]', 'news', false) !!}
        技能 {!! Form::checkbox('tags[]', 'skill', false) !!}
        喜好 {!! Form::checkbox('tags[]', 'like', false) !!}
    
        
    
        <br><br>
        {!! Form::submit('送出', []) !!}
        {!! Form::reset('重置', []) !!}
    
    {!! Form::close() !!}
    
    
    
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div style="color:red">{{$error}}</div>
        @endforeach
    @endif
    
    