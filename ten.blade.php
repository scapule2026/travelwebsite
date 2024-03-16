<!DOCTYPE html>
<html lang="en">
<head>
  <title>Authentication</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&family=Nunito:wght@300&family=Ubuntu&display=swap" rel="stylesheet">
  <style>
    .fill-div {
      background-color: #744A4A;  
      height: calc(100vh - 75vh);
      
    }

    .col-md {
      width: 20%;
    }
    .img-container {
      position: relative;
      overflow: hidden;
    }
    .img2 {
      width: 100%;
      height: auto;
      display: block;
      opacity: 0.4;
    }
    .overlay {
      position: absolute;
      top: 22%;
      left: 80%;
      transform: translate(-50%, -50%);
      background-color: #CECE80;
      border-radius: 50px;
      border: 5px solid #BFBF82;
      display: inline-block;
      text-align: center;
      line-height: 100%;
      z-index: 1; 
    }
    .image-container {
      width: 100%;
      height: auto;
      overflow: hidden;
      border: 2px solid;
      border-radius: 25px; 
    }
    .image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover; 
    }
    .overlay p {
      font-size: 50px;
      margin: 0; 
      padding: 40px;
      font-family: 'Quicksand', sans-serif;
      width: 100%;
      box-sizing: border-box;
    }
    .otori {
      position: absolute;
      bottom: 0;
      left: 63%; 
      width: 65vh; 
      height: 60vh;
      display: block;
      z-index: 0; 
    }
    .logo {
      position: absolute;
      top:9%;
      left: 80%;
      width: 350px;
      transform: translate(-50%, -50%);
      z-index: 2; 
    }
    .jumbotron {
      padding: 0;
      margin-bottom: 0;
      position: relative;
      height: auto;
    }
    ::-webkit-scrollbar {
      width: 0px;
    }

  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="padding: 10px; background-color: #E0AEC6;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/wonderhoy">Packages</a>
      </li>
    </ul>
    @if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10" style = "margin-left: 20px;" >
        @auth
        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style = "text-decoration: none; color: #486D6A;  margin-left: 860px;">Dashboard </a>
                      @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style = "text-decoration: none; color: #486D6A;">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style = "text-decoration: none; color: #486D6A;">Register</a>
            @endif
        @endauth
    </div>
@endif
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link" href="/login" style = "color: #486D6A">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/register" style = "color: #486D6A">Register</a>
      </li>
    </ul>
  </nav>
  <div class="jumbotron jumbotron-fluid" style="margin-left: 0px; overflow: hidden; height: 600px;">
    <div class="img-container">
      <img src="{{ asset('images/shinrin.PNG') }}" alt="wonderland1" class="img2">
      <div class="overlay">
        <p style="font-family: Quicksand, sans-serif; font-weight: 300;">&nbsp;SHINRIN&nbsp;</p>
      </div>
      <a href ="/one">  <img class="logo" src="{{ asset('images/logo.png') }}" alt="logo"> </a>
    </div>
    </div>
  <div class="fill-div ">
    <div>
      &nbsp;
    </div>
</div>
</body>
</html>
