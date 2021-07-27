<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="/css/@yield('css').css">
</head>
<body>
    <header>
      <nav>
        {{-- <div><img id="logo" src="/imges/1200px-Laravel.svg.png" alt=""></div> --}}
        <ul>
          <li><a href="/">Accueil</a></li>
          <li><a href="contact">Contact</a></li>
          <li><a href="/">Lien 2</a></li>
        </ul>
      </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
