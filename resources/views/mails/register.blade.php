<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activación de cuenta</title>
</head>
<body>

    <a href="{{asset('activate-account?token='.$token.'&userEmail='.$user->email)}}">Activar cuenta</a>

</body>
</html>
