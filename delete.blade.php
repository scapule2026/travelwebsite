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


        ::-webkit-scrollbar-track {
        }

 
        ::-webkit-scrollbar-thumb {
       
        }

   
        ::-webkit-scrollbar-thumb:hover {
       
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
    <h1 class="mt-4" style="font-family: 'Rubik Doodle Shadow', system-ui; font-size: 6vw;">Classmate Registry</h1>
    <h3 class="mb-4" style="font-family: 'Oswald', sans-serif; font-size: 2vw;">add 'em, delete 'em, you name it</h3>
    <h3 style="font-family: 'Rubik Doodle Shadow', system-ui; font-size: 3vw;">Registry List</h3>
    <hr>
        <section class = "my-3">
           
        <form method="post" action="{{route('r.destroy', $id)}}">
            
            @csrf
            @method('DELETE')

        <div class = "col-12">
            <h5>
            Delete Classmate?
            {{$last_name??''}}
            </h5>
        </div>
    </form>
    </section>


</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
