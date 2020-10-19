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
        <table class="table table-dark">
            <tr>
                <th>#</th>
                <th>წიგნი</th>
                <th>ჟანრი</th>
                <th>ავტორი</th>
                <th>მოქმედება</th>
                
            </tr>
            @foreach ($books as $book)
            <tr>
                <td>{{++$loop->index}}</td>
                <td>{{ $book->title}}</td>
                <td>
                <form action="{{ route('booksbygenre',["id"=> $book->genre_id])}}" method="GET">
                    <button class="btn btn-secodary">{{$book->genre_id}}</button>
                </form>
                </td>
                <td>{{ $book->description}}</td>
                <td>{{ $book->author_name}}</td>
                <td>
                <form action="{{ route('adminbookdestroy')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $book->id}}">
                    <button class="btn btn-danger">წაშლა</button>
                </form>
                    <button class="btn btn-warning">ჩასწორება</button>
            <a href="{{ route('books')}}" class="btn btn-success">დათვალიერება</a>
               
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>