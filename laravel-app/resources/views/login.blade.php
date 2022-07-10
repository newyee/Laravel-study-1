<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <div>
        <a href="{{ route('login.create') }}">login</a>
        <a href="{{ route('register.create') }}">register</a>
    </div>
    <form action="route('register.create') " method="POST">
        @csrf
        <div>
            <label for="email">E-Mail Address</label>
            <input type="email" id="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password">
        </div>
        <input type="submit" value="Login">
    </form>
</body>
</html>
