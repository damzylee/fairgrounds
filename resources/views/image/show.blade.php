<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-12">
            <h1>Details of {{$image->name}}</h1>
            <p><a href="{{$image->id}}/edit">Edit</a></p>

            <form action="{{$image->id}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>

    <div>
        <p><strong>Name:</strong>  {{$image->name}}</p>
        <p><strong>Description:</strong>  {{$image->description}}</p>
    </div>

    @if($image->image)
        <div class="row">
            <div class="col-12">
                <img src="asset{{'storage/' . $image->image}}" alt="{{$image->name}}" class="img-thumbnail">
            </div>
        </div>
    @endif
</body>
</html>