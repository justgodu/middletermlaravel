<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action="{{ route('adminbookupdate')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$book->id}}">
            <input class="form-control" type="text" name="title" value="{{$book->title}}">
            <input class="form-control" type="text" name="author_name" value="{{$book->author_name}}">
            <input class="form-control" type="text" name="genre_id" value="{{$book->genre_id}}">
            <input class="form-control" type="text" name="picture" value="{{$book->picture}}">
            <label for="description">აღწერა</label>
            <textarea class="form-control" name="description" value="{{$book->description}}"></textarea>
            <button class="btn w-100 btn-primary">Submit</button>

        </form>
    </div>
</body>
</html>