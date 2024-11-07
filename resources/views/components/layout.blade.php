<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .nav-link{
        font-weight: bold;
        margin-right: 50px;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">EduFun</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" href="/">Home</a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" >
                    Category
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/interactive">Interactive Multimedia</a></li>
                  <li><a class="dropdown-item" href="/software">Software Engineer</a></li>
                </ul>
              </li>
      
              <a class="nav-link active" href="/writers">Writers </a>
              <a class="nav-link active" href="/about">About Us</a>
              <a class="nav-link active" href="/popular">Popular</a>
            </div>
          </div>
        </div>
      </nav>
      <div class="container1">
          @yield('container1')
      </div>

      <div class="container" >
        <footer class="py-3 my-4 mt-5">
          <p class="text-center text-body-secondary">©Edufun 2024 | Web Programming | Reinardus | 2602181534</p>
        </footer>
      </div>