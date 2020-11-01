<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session in laravel</title>
</head>
<body>
        <h2>Example of Session</h2>
        @if($value!=null)
            {{$name}} has {{$value}}
        @else 
            {{$name}} not found
        @endif
</body>
</html>