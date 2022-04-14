<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
    <center>
    <h1>Silakan Login</h1>
    <form action="action-login.php" method="post">
<div class="form-group">
    <table>
        <tr>
            <td>Username </td> <td> <input type="text" name="username" class="form-control"></td>
        </tr>
        <tr>
            <td>Password </td> <td> <input type="password" name="password" class="form-control"></td>
        </tr>
        <tr>
            <td></td><td><input type="submit" value="Login" class="btn btn-primary"></td>
        </tr>
    </table>
</div>
    </form>
    </center>
</body>
</html>