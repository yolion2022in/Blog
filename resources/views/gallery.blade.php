@extends('layouts.master')

@section('title', '動靜態相簿')

@section('content')
  <div style='color:red;'>內容區塊 test</div>

  <!-- partial:index.partial.html -->
  <!-- 
  This is the BEST photo gallery out there. Read why:

  https://github.com/yairEO/photobox
  -->
  <ul id='gallery'></ul>
  <!-- partial -->

@endsection

@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdn.rawgit.com/yairEO/photobox/master/photobox/photobox.css'>
  <link rel="stylesheet" href="{{ asset('gallery/style.css') }}">
@endsection

@section('js')
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdn.rawgit.com/yairEO/photobox/master/photobox/jquery.photobox.js'></script>
  <script  src="{{ asset('gallery/script.js') }}"></script>
@endsection