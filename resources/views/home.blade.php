
@extends('footer')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title','Movie Counter') </title>
    <style>


        .button {
            transition-duration: 0.4s;
        }

        .button:hover {
             background-color: blue;
             color: white;
        }

        body {
            min-height: 800px;
            margin-bottom: 90px;
            clear: both;
        }
         .column {
             float: left;
             width: 25%;
            padding: 0 10px;
         }


        .row {margin: 0 -5px;}


        .row:after {
            content: "";
             display: table;
            clear: both;
        }

    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }
    }

            </style>
</head>
<body>
    <ul class="nav nav-pills justify-content-center bg-primary">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Movie Counter</a>
        </li>
      </ul>
      <ul class="nav nav-pills justify-content-center  ">
        <li class="nav-item">
          <a class="nav-link button" aria-current="page" href="/insert">Insert Movie</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link button" aria-current="page" href="/update">Update Movie</a>
          </li>
      </ul>
    <br> <br>
    <center>


    <div>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Photo</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Episodes</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <th scope="row">{{$movie->id}}</th>

                        <td>
                            <img width="200px" height="200px" src="{{Storage::url($movie->image)}}" alt="">
                        </td>
                        <td>{{$movie->title}}</td>
                        <td>{{$movie->description}}</td>
                        <td>
                            @foreach ($movie->episodes as $episode)
                                <div>{{$episode->episode}} : {{$episode->title}}</div>
                            @endforeach
                        </td>
                        <td>
                            <form action="/movie/{{$movie->id}}" method="POST">
                                {{method_field('DELETE')}}
                                @csrf
                                <input class="btn btn-primary" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>







    </div>

</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
