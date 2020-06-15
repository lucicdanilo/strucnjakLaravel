<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('includes.head')
    </head>
    <body>
      <div id="app">
        <div class="content">
          <home-nav-bar></home-nav-bar>
          <home-side-bar></home-side-bar>
          <create-job-form></create-job-form>
        </div>
      </div>
      <footer>
        @include('includes.footer')
    </footer>
      <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>