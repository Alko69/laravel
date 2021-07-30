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
        <div id="logo"><a class = "nava" href="/"><img class="logo" src="/imges/1200px-Laravel.svg.png" alt=""></a></div>
        <ul id="navul">
          <li><a class = "nava" style="color: red" href="/">Accueil</a></li>
          <li><a class = "nava" href="contact">Contact</a></li>
          <div>
              <li id="menu">
                <a class = "nava" href="bookList">Book List</a>
                <a class = "deroule nava" href="addBook">Add a Book</a>
              </li>
          </div>
        </ul>
      </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
