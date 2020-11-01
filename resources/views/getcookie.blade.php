<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies in laravel</title>
</head>
<body>
        <h2>Example of cookies</h2>
        @if(Cookie::get($name)!=null)
            {{Cookie::get($name)}}
        @else
            cookie not found
        @endif
        
</body>
</html>