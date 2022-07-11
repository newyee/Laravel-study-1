<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <title>register</title>
</head>
<body>
    <div>
        <a href="{{ route('login.create') }}">login</a>
        <a href="{{ route('register.create') }}">register</a>
    </div>
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
        </div>
        @error('name')
        <p class="error">{{ $message }}</p>
        @enderror

        <div>
            <label for="email">E-Mail Address</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
        </div>
        @error('email')
        <p class="error">{{ $message }}</p>
        @enderror

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" value="{{ old('password') }}">
        </div>
        @error('password')
        <p class="error">{{ $message }}</p>
        @enderror

        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}">
        </div>
        @error('password_confirmation')
        <p class="error">{{ $message }}</p>
        @enderror

        <input type="submit" value="Register">
    </form>
</body>
</html>
