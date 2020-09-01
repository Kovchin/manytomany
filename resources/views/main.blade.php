<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css\app.css')}}">
    <title>Document</title>
</head>
<body>

@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a class="btn btn-success" href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a class="btn btn-success" href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif

<h1>Bootstrap</h1>

<div class="container">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam assumenda blanditiis cumque dolorum, earum et id iste, iure libero maxime minus, modi odio omnis sint voluptatem? Aliquid architecto beatae doloribus, eum, ex explicabo fugit in ipsam itaque magni nobis officia quasi quis quod, repudiandae suscipit tempora ullam unde voluptas voluptatem? Aliquam aut blanditiis, commodi cum delectus dolor doloribus magni mollitia quia quidem quis rem tempora voluptatibus. Dolorem ducimus id nobis officia voluptatem? Consequatur consequuntur culpa, earum et ex fugiat impedit inventore molestias neque non, pariatur perferendis, possimus quas quia quidem quis repellendus temporibus tenetur! Ab atque debitis, delectus, deleniti eligendi enim eveniet libero maiores maxime molestiae nesciunt quos tempora. At consectetur cum perspiciatis praesentium quis, ratione repudiandae ut? Adipisci aperiam aspernatur at, autem deleniti dolorem eum fuga in laboriosam molestiae nihil nobis non quaerat reprehenderit saepe vitae voluptate. Architecto atque beatae consequatur, consequuntur distinctio ea eaque earum eos est explicabo fugiat fugit illum incidunt, itaque molestiae mollitia nam natus neque, officia officiis placeat possimus quaerat quas quasi quibusdam quos recusandae rem sapiente sequi tempora temporibus tenetur ut veritatis vitae voluptates.</p>
</div>
</body>
</html>
