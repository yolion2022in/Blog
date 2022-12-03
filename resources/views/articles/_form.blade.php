
        {{-- Subject 標題 --}}
        {!! Form::label('subject', '標題') !!}
        {!! Form::text('subject', null, [
                                        'id'=>'faketitle',
                                        'class' => 'article',
                                        'style' => 'color:blue;',
                                        'placeholder' => '請輸入標題',
                                        'otherAttr' => '自訂屬性'
                                    ]) !!}
        {!! Form::label('fillin_tt', '填入標題？') !!}
        是 {!! Form::radio('fillin_tt', 1, false, ['id'=>'isfake_tt', 'onclick'=>'validate("title")']) !!}
        否 {!! Form::radio('fillin_tt', 0, true) !!}
        @error('subject')
            <div {{ $errTipAttr }} >{{ $message }}</div>
        @enderror  
    
        {{-- Category 類別 --}}
        <br><br>
        {!! Form::label('category', '類別', []) !!} (共5類)
        {!! Form::number('category', 3, ['min'=>1 , 'max'=>5]) !!}
        @error('category')
            <div {{ $errTipAttr }} >{{ $message }}</div>
        @enderror 

        
        {{-- desc 內文 --}}
        <br><br>
        {!! Form::label('desc', '內文') !!}<br>
        {!! Form::textarea('desc', null, [
                                        'id'=>'fakecontent',
                                        'style'=>'color:blue;',
                                        'cols'=>60,
                                        'rows'=>5
                                    ]) !!}
        {!! Form::label('fillin', '填入假文？') !!}
        是 {!! Form::radio('fillin', 1, false, ['id'=>'isfake', 'onclick'=>'validate()']) !!}
        否 {!! Form::radio('fillin', 0, true) !!}
        @error('desc')
            <div {{ $errTipAttr }} >{{ $message }}</div>
        @enderror

        <hr/>

        {{-- status 狀態 --}}
        <br><br>
        {!! Form::label('status', '狀態啟用？') !!}<br>
        是 {!! Form::radio('status', 1, false) !!}
        否 {!! Form::radio('status', 0, true) !!}
        @error('status')
            <div {{ $errTipAttr }} >{{ $message }}</div>
        @enderror



        {{-- sort 排序 --}}
        <br><br>
        {!! Form::label('sort', '排序方式？') !!}<br>
        {!! Form::label('sort', '排序', []) !!} (共2種：1升冪, 2降冪)
        {!! Form::number('sort', 2, ['min'=>1 , 'max'=>2]) !!}
        @error('sort')
            <div {{ $errTipAttr }} >{{ $message }}</div>
        @enderror


        {{-- enable_at 啟用日期 --}}
        <br><br>
        {!! Form::label('enable_at', '日期', []) !!}
        {!! Form::date('enable_at',null, []) !!}
        @error('enable_at')
            <div {{ $errTipAttr }} >{{ $message }}</div>
        @enderror


        {{-- tags 標籤 --}}
        <br><br>
        {!! Form::label('tags', '標籤') !!}<br>
        新聞 {!! Form::checkbox('tags[]', 'news', false) !!}
        技能 {!! Form::checkbox('tags[]', 'skill', false) !!}
        喜好 {!! Form::checkbox('tags[]', 'like', true) !!}
        @error('tags')
            <div {{ $errTipAttr }} >{{ $message }}</div>
        @enderror



        {{-- pic 圖片(檔案上傳) --}}
        <br><br>
        {!! Form::label('pic', '圖片上傳', []) !!}<br><br>
        {!! Form::file('pic') !!}
        @error('pic')
            <div {{ $errTipAttr }} >{{ $message }}</div>
        @enderror
    
        
    
        <br><br>
        {!! Form::submit('送出', []) !!}
        {!! Form::reset('重置', []) !!}
    

