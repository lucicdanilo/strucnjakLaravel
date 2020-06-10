<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Stručnjak</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="/css/main.css">
    </head>
  
    <body>
      <div id="app">
        <div class="content">
            <nav-bar></nav-bar>
            <main-search-bar></main-search-bar>
            <popular-categories></popular-categories>
            <popular-experts></popualr-expertrs>
        </div>
      </div>
      <footer>
      <div class="flex bg-gray-200">
        <div class="flex-1 text-gray-700 text-center bg-gray-400 py-2 m-2">
          Item that can grow or shrink if nedfsdfsdf
        </div>
        <div class="flex-1 text-gray-800 text-center bg-gray-500 px-4 py-2 m-2">
          Item that cannot grow or shrink
        </div>
        <div class="flex-1 text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">
          Kontaktirajte nas
        </div>
      </div>
      <div class="text-center">
        Copyright © 2020. Stručnjak.me
      </div>
    </footer>
      <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
