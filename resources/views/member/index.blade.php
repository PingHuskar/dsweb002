<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $user = "too";
    $menu = array("Home","Member","About","Contact");

    ?>
    <h1>ยินดีต้อนรับสมาชิก</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit maiores aliquam eveniet iure odio numquam explicabo corporis eaque, debitis quis in iusto modi eum necessitatibus. Esse corrupti itaque aliquid nemo.</p>
    <h1>{{$user}}</h1>

    @if($user == "chadin")
    <h2>Admin</h2>
    @else
    <h2>Member</h2>
    @endif

    <a href="{{url('/')}}">Home</a>
    <a href="{{route('mem')}}">Member</a>
    <a href="{{url('/about')}}">About</a>
    <a href="{{url('/contact')}}">Contact</a>
</body>
</html>