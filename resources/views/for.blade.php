<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Example of for loop in laravel blade</h1>
   
    <table width="80%" border=2 align=center cellpadding=10>
    @for($i=1;$i<=5;$i++)
        <tr>
            <td>{{$i}}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    @endfor 
    </table>
</body>
</html>