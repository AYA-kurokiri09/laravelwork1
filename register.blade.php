<html>
<head>
    <title>Laravel work1</title>

    <style>
    * {margin: 0; padding: 0;}
    h1 {font-size: 12pt; color: #000; font-weight: normal;}
    header {display: flex; justify-content: space-between; padding: 20px; border-bottom: 1px solid #000;}
    .container {height: 400px; width: 600px; margin: 100px auto; border: 1px solid #000;}
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
            <a href="/work1">Login</a>
            <a href="">Register</a>
        </div>
    </header>
    <div class="container">
        <div class="container_title">
            <h1>Register</h1>
        </div>
        <div class="container_content">
            <p>Name</p>
            <input type="text" name="name">
            <br><br>
            <p>E-Mail Address</p>
            <input type="text" name="email">
            <br><br>
            <p>Password</p>
            <input type="text" name="password">
            <br><br>
            <p>Confirm Password</p>
            <input type="text" name="confirmPassword">
            <br><br>
            <input type="submit" id="submit" value="Register">
        </div>
    </div>
        
</body>
</html>