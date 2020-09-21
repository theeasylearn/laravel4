<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Example of Decision Makeing loop </h1>
    <!-- @block used to declare variables -->
    @php
        $CurrentDate = date("d")
    @endphp
    @if ($CurrentDate==31)
        there are 31 days in current month 
    @elseif($CurrentDate%2==0)
        today is even date
    @else 
        today is odd date 
    @endif
</body>
</html>