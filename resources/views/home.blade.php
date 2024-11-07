<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
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
          <a class="navbar-brand" href="#"><img src="" alt="">EduFun</a>
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
      <div class="container container-gambar">
          <img src="img/img1.jpg" alt="image1" >
      </div>
      
      <div class=container-article>
      <article>
        <div class="article">
          <img src="img/img2.jpg" alt="image2">
          <div class="text">
            <h4>Human Computer Interaction</h4>
            <h6>14 May 2024 | by: Bia</h6>
            <p>Human-Computer Interaction atau HCI adalah studi tentang bagaimana manusia berinteraksi
              dengan...
            </p>
            <div class="button1">
              <a href="">
                <button><h1>read more..</h1></button>
              </a>
            </div>
          </div>
        </div>
      </article>
      <article1>
        <div class="article">
          <img src="img/img3.jpg" alt="image3">
          <div class="text">
            <h4>Software Engineer</h4>
            <h6>14 May 2024 | by: Sabrina</h6>
            <p>Software Engineer adalah studi tentang bagaimana manusia membuat dan 
              mengembangkan...
            </p>
            <div class="button2">
              <a href="/readmore">
                <button><h1>read more..</h1></button>
              </a>
            </div>
          </div>
        </div>
      </article1>
    </div>

    <div class="container" >
      <footer class="py-3 my-4 mt-5">
        <p class="text-center text-body-secondary">©Edufun 2024 | Web Programming | Reinardus | 2602181534</p>
      </footer>
    </div>  
      
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>