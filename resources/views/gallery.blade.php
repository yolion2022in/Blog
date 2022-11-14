<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Photobox</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdn.rawgit.com/yairEO/photobox/master/photobox/photobox.css'>
<link rel="stylesheet" href="{{ asset('gallery/style.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- 
This is the BEST photo gallery out there. Read why:

https://github.com/yairEO/photobox
-->
<ul id='gallery'></ul>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.rawgit.com/yairEO/photobox/master/photobox/jquery.photobox.js'></script>
<script  src="{{ asset('gallery/script.js') }}"></script>

</body>
</html>
