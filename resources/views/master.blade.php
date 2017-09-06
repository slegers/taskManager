<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" />       
    
  </head>
  <body>
      <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>        
        <script src="{{ URL::asset('js/custom.js') }}"></script>
        @include('layout.nav')
        <div class="container">
        @yield('header')
        <div id="content" class="row-fluid">
            <div class="row">
                <div class="col-sm-9">
                   <h2> @yield('title') </h2>
                    @yield('content')
               
                </div>
                @include('layout.sidebalk')
              </div>
        </div>
        </div>
  </body>
</html>