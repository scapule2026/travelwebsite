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
      background-color: #f5f3eb;  
      height: calc(100vh - 45vh);
    }
    .fill-div img {
      width: 100%;
      height: auto;
      overflow: hidden;
    }
    .img-container {
      position: relative;
      overflow: hidden;
    }
    .img2 {
      width: 100%;
      height: auto;
      display: block;
      opacity: 0.6;
    }
    .overlay {
      position: absolute;
      top: 35%;
      left: 50%;
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
      height: 300px;
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
      top:20%;
      left: 50%;
      width: 350px;
      transform: translate(-50%, -50%);
      z-index: 2; 
    }
    .jumbotron {
      padding: 0;
      margin-bottom: 0;
      position: relative;
      height: 70vh;
      overflow: hidden; 
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
          
  
            @if (Route::has('register'))
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

  <div class="jumbotron jumbotron-fluid" style="margin-left: 0px; overflow: hidden;">
    <div class="img-container">
      <img src="{{ asset('images/wallpaper.png') }}" alt="wonderland1" class="img2">
      <div class="overlay">
        <p style="font-family: Quicksand, sans-serif; font-weight: 200;">OTORI TRAVEL</p>
      </div>
      <img class="logo" src="{{ asset('images/logo.png') }}" alt="logo">
    </div>
    <img class="otori" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/6642957b-4132-4095-82c1-177a8a048dac/dfrko0t-fcd6cd6f-5ae1-42f4-ad55-e872439d0ac9.png/v1/fill/w_1280,h_1184/render__35___otori_emu_by_budhih_dfrko0t-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTE4NCIsInBhdGgiOiJcL2ZcLzY2NDI5NTdiLTQxMzItNDA5NS04MmMxLTE3N2E4YTA0OGRhY1wvZGZya28wdC1mY2Q2Y2Q2Zi01YWUxLTQyZjQtYWQ1NS1lODcyNDM5ZDBhYzkucG5nIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.Y5WukqH-cKxn_Nv1xhNHWLFiKds1W4GMZsiraPIN5xg" alt="otori">
  </div>
  <hr style="margin-top: 0; margin-bottom: 0; border: 3px solid #BFBF82;">
  <div class="fill-div">
    <br>
    <h1 style="text-align: center; font-family: 'Quicksand', sans-serif; font-weight: 400;">Most Popular Deals</h1>
    <br>
    <div class="container">
      <div class="row" style="margin: 0;">
        <div class="col-md-3">
          <div class="image-container">
            <img src="https://static.miraheze.org/projectsekaiwiki/thumb/d/d4/Bg_area_9.png/1920px-Bg_area_9.png" alt="wonderland" style="object-fit: cover;">
            
        </div>
        <h4 style="font-family: 'M PLUS 1p', sans-serif;  font-weight: 400;">Wonderland</h4>
        </div>
        <div class="col-md-3">
          <div class="image-container">
            <img src="https://static.miraheze.org/projectsekaiwiki/thumb/b/b3/Puroland_Sekai.png/1920px-Puroland_Sekai.png" alt="puroland" style="object-fit: cover;">
          </div>
          <h4 style="font-family: 'M PLUS 1p', sans-serif; font-weight: 400;">Puroland</h4>
        </div>
        <div class="col-md-3">
          <div class="image-container">
            <img src="https://static.miraheze.org/projectsekaiwiki/thumb/d/dd/Aku_no_Taizai_Series_SEKAI_background.png/1920px-Aku_no_Taizai_Series_SEKAI_background.png" alt="taizai" style="object-fit: cover;">
          </div>
          <h4 style="font-family: 'M PLUS 1p', sans-serif; font-weight: 400;">Taizai</h4>
        </div>
        <div class="col-md-3">
          <div class="image-container">
            <img src="https://pbs.twimg.com/media/GCpbLc7WwAACRZY?format=jpg&name=large" alt="uninhabited" style="object-fit: cover;">
          </div>
          <h4 style="font-family: 'M PLUS 1p', sans-serif; font-weight: 400;">Shinrin</h4>
      </div>
    </div>
  </div>
</div>
</body>
</html>
