<!DOCTYPE html>
<html lang="en">
  <head>
  
    @include('partials._head')

    @yield('stylesheets')

  </head>

  <body>

    @include('partials._nav')

    <div class="container">

      @yield('content')

      @include('partials._footer')

    </div>
      
    @include('partials._javascripts')

    @yield('scripts')
    
  </body>
</html>