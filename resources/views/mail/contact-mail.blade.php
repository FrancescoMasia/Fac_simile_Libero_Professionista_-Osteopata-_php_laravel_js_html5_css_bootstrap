<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ciao {{$user_date['name']}}</h1>
    <h2>ti risponderemo al più presto</h2>
    <p>Questi sono i dati che hai inserito <br> {{$user_date['email']}} <br> {{$user_date['message']}}</p>
    
</body>
</html>