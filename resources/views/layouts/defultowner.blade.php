<!DOCTYPE html>
<html lang="en">
<head>
    @include('_include.head')
    @yield('stylesheet')
</head>
<body>
   
    <div class="site-wrap">
        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
              </div>
             </div>
            <div class="site-mobile-menu-body"></div>
        </div>
@include('_include.navowner')


    @yield('content')
   
 

@include('_include.footer') 

   
@include('_include.jsfile') 
</div> 
</body>
</html>