<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Example of forelse loop </h1>
    <!-- @block used to declare variables -->
    @php
        $names = array(); //blank array
        $CurrentYear = date("Y");
        $CurrentMonth = date("m");
        $CurrentDate = date("d");
    @endphp
    <ul>
        @forelse($names as $name)
            @if($loop->first)
            <table width="80%" align=center border='2'>
                <tr>
                    <th>index</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Gender</th>
                </tr>
            @endif
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$name}}</td>
                    <td></td>
                    <td></td>
                </tr>
            @if($loop->last)
                </table>
            @endif
        @empty
                <p>this is an empty array </p>
        @endforelse
        
    </ul>
</body>
</html>