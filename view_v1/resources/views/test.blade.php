<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>anjing</h2>
    @php
        $img = "finding/LDd8MOT7adT8agiSqIZF2TsCCwEWD3pSzTFli8vM.png";
    @endphp
    <img src='{{ url("storage/$img") }}' alt="foto"></img>
    <h2>item->id</h2>
</body>
</html>