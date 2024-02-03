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
        @foreach ($p as $pro)
            <li style="display: flex;gap: 10px">
                <div>{{ $pro->id }}</div>
                <div>{{ $pro->name }}</div>
                <div>{{ $pro->category_id }}</div>
                <div>{{ $pro->pricing }}</div>
                <div>{{ $pro->description }}</div>
                <div>{{ $pro->image }}</div>
                <div>{{ $pro->created_at }}</div>
                <div>{{ $pro->updated_at }}</div>
            </li>
        @endforeach
    </ul>
</body>
</html>