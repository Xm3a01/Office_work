<!DOCTYPE html>
<html lang="en">
<head>
    @include('_include.head')
    @yield('stylesheet')
</head>
<body>
   
     @include('_include.navbar')

     @yield('content')
   
 

    

    @include('_include.footer') 
    @include('_include.jsfile')
    @include('_include.message');
    <script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}"></script>
    <script>
        $('.ck_editor').ckeditor();

        CKEDITOR.config.extraPlugins = 'justify';
        CKEDITOR.config.extraPlugins = 'bidi';

    </script>
    
    @yield('scripts')

</body>
</html>