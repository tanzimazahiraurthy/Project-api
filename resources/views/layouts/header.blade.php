<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Layout Fan</title>
</head>
<body>

    <div id="header">
        <a href="/student/myself/fan">Fan |</a>
        <a href="/student/myself/friend">Friend |</a>
        <a href="/student/myself/hobby">Hobby </a>
    </div>

    @yield('content')
    
</body>
</html>

<br><br>

@extends('layouts.footer')