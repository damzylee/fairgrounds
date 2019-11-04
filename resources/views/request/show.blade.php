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
            <h1>Details of {{$makeRequest->title}}</h1>
            <p><a href="{{$makeRequest->id}}/edit">Edit</a></p>

            <form action="{{$makeRequest->id}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>

    <div>
        <p><strong>Title:</strong>  {{$makeRequest->title}}</p>  
        <p><strong>Detail:</strong>  {{$makeRequest->detail}}</p>  
    </div>
</body>
</html>