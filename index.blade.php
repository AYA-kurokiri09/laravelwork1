<html>
<head>
    <title>Laravel work1</title>

    <style>
    * {margin: 0; padding: 0;}
    h1 {font-size: 12pt; color: #000; font-weight: normal;}
    header {display: flex; justify-content: space-between; padding: 20px; border-bottom: 1px solid #000;}
    .container {height: 300px; width: 600px; margin: 100px auto; border: 1px solid #000;}
    .container_title {display: block; padding: 20px; background-color: #ccc; border-bottom: 1px solid #000;}
    .container_content {display: block; padding: 20px;}
    #submit {background-color: royalblue; color: #fff; padding: 5px; border-radius: 4px;}
    </style>

</head>

<body>
    <header>
        <div>
            <h1>Laravel</h1>
        </div>
        <div>
            <a href="">Login</a>
            <a href="work1/register">Register</a>
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
