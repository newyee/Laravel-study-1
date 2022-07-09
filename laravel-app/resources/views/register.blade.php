<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
</head>
<body>
    <div>
        <a href="{{ route('login.index') }}">login</a>
        <a href="{{ route('register.index') }}">register</a>
    </div>
    <form action="" method="POST">
        <div>
            <label for="name">Name</label>
            <input type="text" id="name">
        </div>
        <div>
            <label for="email">E-Mail Address</label>
            <input type="email" id="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password">
        </div>
        <div>
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password">
        </div>
        <input type="submit" value="Register">
    </form>
</body>
</html>