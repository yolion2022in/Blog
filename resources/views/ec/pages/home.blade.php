{{-- 塞 大型購物網 首頁 --}}

@extends('ec.master.home');

@include('ec.pages.homehead')



@section('content')
    @parent
    <h3 style='color:blue'>Fake MoMo 子頁面內容</h3>
    <hr/>

    @include('ec.pages.homebody')
@endsection

