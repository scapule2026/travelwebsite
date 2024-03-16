<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is This Familiar? </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Rubik+Doodle+Shadow&family=Rubik+Scribble&family=Tajawal&display=swap" rel="stylesheet">


    <style>
        body {
            padding: 20px;
            background-color: #e0f2e9;
            font-family: 'Tajawal', sans-serif;
        }

        h1, h3 {
            color: #3d6a35; 
        }

        label {
            color: #3d6a35; 
        }

        .form-control {
            background-color: #f5f5f5; 
        }

        button.btn-primary {
            background-color: #5d9c5a; 
            border-color: #5d9c5a; 
        }

        button.btn-primary:hover {
            background-color: #4a7c47;
            border-color: #4a7c47; 
        }

        .list-group-item {
            background-color: #f5f5f5; 
            border-color: #d3d3d3;
        }
        .btn:hover {
            color: #5d9c5a;
        }

        .btn-danger{
           background-color: #542e04;
        }
              
        ::-webkit-scrollbar {
        width: 0px;
        }

        body {
            margin: 0;
        }

        footer {
            background-color: #5d9c5a;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }

    </style>
</head>
<body>
<div class="container">
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
    <hr>
        <section class = "my-3">
        <form action="{{route('r.store')}}" method="post">
            @csrf
        <div class="form-group">
            <h5>
                
                <label for="txtFirstName">User ID:</label>
                <input type="number" class="form-control" id="txtFirstName" name="user_id" required>
                
                <label for="ddlPackage">Select Package:</label>
                <select type="int" class="form-control" id="ddlPackage" name="package">
                    <option value="1">1 - Wonderland</option>
                    <option value="2">2 - Puroland</option>
                    <option value="3">3 - Taizai</option>
                    <option value="4">4 - Secadia</option>
                    <option value="5">5 - Honami</option>
                    <option value="6">6 - Amagi</option>
                    <option value="7">7 - Anirashi</option>
                    <option value="8">8 - Wonderland Lite</option>
                    <option value="9">9 - Taniruka</option>
                    <option value="10">10 - Shinrin</option>
                </select>
            </h5>
        </div>
        <button type="submit" class="btn btn-success">Order</button>
       
    </form>
    </section>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
