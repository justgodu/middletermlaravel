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
                <th>ჟანრი</th>
                <th>მოქმედება</th>
            </tr>
            @foreach ($genres as $genre)
            <tr>
                <td>{{++$loop->index}}</td>
                <td>{{ $genre->title}}</td>
                <td>{{ $genre->content}}</td>
                <td>
                <form action="{{ route('admingenredestroy')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $genre->id}}">
                    <button class="btn btn-danger">წაშლა</button>
                </form>
                <form action="{{ route('adminbookedit', ["id" => $genre->id])}}" method="get">
                   
                    
                    <button class="btn btn-warning" type="submit">ჩასწორება</button>
                </form>
            <a href="{{ route('genres')}}" class="btn btn-success">დათვალიერება</a>
               
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>