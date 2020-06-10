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
            <categories></categories>
            <user-recommendations></user-recommendations>
            <popular-experts></popualr-expertrs>
        </div>
      </div>
      <footer>
      <div class="flex bg-gray-200">
        <div class="flex-1 text-gray-700 text-center bg-gray-400 py-2 m-2">
          <div class="text-2xl m-3">Stručnjak.me</div>
          <div class="m-3 p-3">
            Stručnjak.me je mijesto gdje možete pronaći ljude koji će Vam odraditi ili pomoći oko raznih stvari. Takođe nudimo registraciju ljudi koji su spremni da odrađuju poslove u određenim oblastima.
          </div>
        </div>
        <div class="flex-1 text-gray-800 text-center bg-gray-500 px-4 py-2 m-2">
          <div class="text-2xl m-3">Korisni linkovi</div>
          <div class="m-3 p-3">
          sddsf ffffff fff ffff f fff f fdsffd  f dsfsdfsdf sdffs dfs dfsdfsdf s fs df dsfs f sdf s dfs df sf s dffsfsfdf fsfs fs fsd f sdf 
          </div>  
        </div>
        <div class="flex-1 text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">
          <div class="text-2xl m-3">Kontak</div>
          <div class="m-3 p-3">
            Radosava Burića 165<br/>
            Telefon: (020) 648-234<br/>
            Email: lucic.danilo94@gmail.com
          </div>
        </div>
      </div>
      <div class="text-center m-3">
        Copyright © 2020. Stručnjak.me
      </div>
    </footer>
      <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
