<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>ARRAY</title>
</head>
<body>
    <div class="container">
        @foreach ($array as $item)
            <div class="item">
                <img src="{{$item['path']}}" alt="img">
                <p>{{$item['title']}}</p>
                <p>{{$item['price']}}</p>
            </div>
        @endforeach
    </div>
</body>
</html>