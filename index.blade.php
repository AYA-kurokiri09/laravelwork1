<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('work1_css/stylesheet.css') }}">
    <title>Laravel work1</title>
    
</head>

<body>
    <header>
        <div>
            <h1>Laravel</h1>
        </div>
        <div>
            <a href="">Login</a>
            <a href="{{ route('work1.create')}}">Register</a>
        </div>
    </header>
    <div class="container">
        <div class="container_title">
            <h1>Login</h1>
        </div>
        <div class="container_content">
            <p>E-Mail Address</p>
            <input type="text" name="email">
            <br><br>
            <p>Password</p>
            <input type="text" name="password">
            <br><br>
            <input type="submit" id="submit" value="Login">
            <a href="">Forgot your password?</a>
        </div>
    </div>
</body>
</html>
