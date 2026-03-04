<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All posts</h1>
    @foreach ($allBooks as $book)
        <h2>{{ $book->name }}</h2>
        <a href="/books/{{$book->id}}">Show</a>
    @endforeach
</body>
</html>