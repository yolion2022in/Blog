{{-- 塞 大型購物網 首頁 --}}

@extends('ec.master.home');

{{-- 
    @section('title','Welcome to Fake MoMo'); 
    測試由 master default give value.
--}}

@section('content')
    @parent
    <h3 style='color:blue'>Fake MoMo 子頁面內容</h3>
    <hr/>

    @include('ec.pages.homebody')
@endsection

