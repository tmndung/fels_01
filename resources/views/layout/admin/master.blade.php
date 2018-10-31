<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Đăng nhập</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
      <meta name="keywords" content=" ZendVN - Học lập trình trực tuyến" >
      <meta name="description" content="ZendVN - Học lập trình trực tuyến" >
      <link href="/public/public/templates/default/login/favicon.png" rel="icon" type="image/x-icon" >
     {{--  <link rel="stylesheet" type="text/css" href="{{mix('css/all.css')}}"> --}}
      {{ Html::style(asset('resources/views/assets/css/library/bootstrap.min.css')) }}
      {{ Html::style(asset('resources/views/assets/css/login/JiSlider.css')) }}
      {{ Html::style(asset('resources/views/assets/css/login/style.css')) }}

      {{ Html::script(asset('resources/views/assets/js/login/jquery-1.10.2.min.js')) }}
      {{ Html::script(asset('resources/views/assets/js/login/JiSlider.js')) }}
      {{ Html::script(asset('resources/views/assets/js/login/my-js.js')) }}

   </head>
   <body>
      <div class="wrapper" id="wrapper">
         @include('layout.admin.header')
         @yield('content')
         @include('layout.admin.footer')
      </div>
   </body>
</html>
