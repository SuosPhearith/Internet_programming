<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($c as $cat)
            <li style="display: flex;gap: 10px">
                <div>{{ $cat->id }}</div>
                <div>{{ $cat->name }}</div>
                <div>{{ $cat->created_at }}</div>
                <div>{{ $cat->updated_at }}</div>
            </li>
        @endforeach
    </ul>
</body>
</html>