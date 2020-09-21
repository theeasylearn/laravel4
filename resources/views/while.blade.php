<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Example of while loop in laravel blade</h1>
    @php  
        $counter = 1;
    @endphp
    <table width="80%" border=2 align=center cellpadding=10>
    @while($counter<=5)
        <tr>
            <td>{{$counter++}}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    @endwhile 
    </table>
</body>
</html>