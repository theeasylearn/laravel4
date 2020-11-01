<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session in laravel</title>
</head>
<body>
        <form action="createsession" method="post">
            @csrf
            <table border="2" align="center" width=50% border="2">
                <tr>
                    <td>
                        <input type="text" name="txtname" placeholder="Session name" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="txtvalue" placeholder="Session value" required />
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="submit" name="btnsubmit" value="Create Session"  />
                    </td>
                </tr>  
            </table>
        </form>
</body>
</html>