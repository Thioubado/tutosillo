<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Films</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    @yield('css')
    // './resources/css/app.scss',
    @vite([
        // './public/assets/css/semantic.min.css',
        // './public/assets/js/jquery363.min.js',
        // './public/assets/js/semantic.min.js',
        'resources/js/app.js'
    ])
  </head>
  <body>
    <main class="section">
        <div class="container">
            @yield('content')
        </div>
    </main>
  </body>
</html>
