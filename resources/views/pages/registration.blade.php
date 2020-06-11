<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('includes.head')
    </head>
    <body>
      <div id="app">
        <div class="content">
            <nav-bar></nav-bar>
            <registration-for></registration-form>
        </div>
      </div>
      <footer>
        @include('includes.footer')
    </footer>
      <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>