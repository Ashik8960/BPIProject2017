<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Reset Password Mail</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
</head>
<body style="font-family: 'Roboto Slab', serif;">
<p>Please Click the following link to reset your password:</p>
{{--<a style="background: #2298ff;display: inline-block;padding: 8px;color:#fff;text-decoration: none;border-radius: 5px;" href="http://localhost/exampleProject-22/public/reset/{{$reset}}">Reset Your  Password</a>--}}
<a style="background: #2298ff;display: inline-block;padding: 8px;color:#fff;text-decoration: none;border-radius: 5px;" href="{{url('/reset/'.$reset)}}">Reset Your B.P.I Password</a>

</body>
</html>