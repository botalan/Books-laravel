<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create</h1>
    <form action="/posts" method="post">
        @csrf
        <div>
            <label for="name" >Gramatas nosaukums</label><br>
            <input type="name" name="name" id="name"><br>
        </div>
        <div>
            <label for="main" >Galvenā doma</label><br>
            <textarea name="main" id="main"></textarea><br>
        </div>
        <div>
            <input type="submit" value="Izveidot">
        </div>
    </form>
</body>
</html>