<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div id="OutRect">
            <div id="MainRect">
                <form action="welcome.html" method="POST">
                    <b id="pLogin"><p>LOGIN</p></b>
                    <input type="text" name="login" id="txtLogin" placeholder="Login" required pattern="[A-Za-zА-Яа-яЁё0-9,.:;]{3,20}">
                    <input type="password" name="password" id="txtPassword" placeholder="Password" required pattern="((?=.*\d)(?=.*[a-zа-яё])(?=.*[A-ZА-ЯЁ])(?=.*[@!#$%,.:;])().{5,20}">
                    <input type="submit" value="LOGIN" id="inpLogin">
                    <br>
                    <a href="#" id="aForgotPass">Forgot password?</a>
                </form>
            </div>
        </div>
    </main>
</body>
</html>

