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

</body>
</html>