<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies in laravel</title>
</head>
<body>
        <form action="createcookie" method="post">
            @csrf
            <table border="2" align="center" width=50% border="2">
                <tr>
                    <td>
                        <input type="text" name="txtname" placeholder="cookie name" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="txtvalue" placeholder="cookie value" required />
                    </td>
                </tr>
                <tr>
                    <td>
                         <input type="number" name="txtminute" placeholder="cookie duration" required />
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="submit" name="btnsubmit" value="Create cookie"  />
                    </td>
                </tr>  
            </table>
        </form>
</body>
</html>