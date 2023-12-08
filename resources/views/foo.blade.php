<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foo</title>
</head>
<body>

<form method="POST" action="{{ route('foo') }}">
    @csrf
    <input type="radio" id="en" name="language" value="en">
    <label for="en">English</label><br>
    <input type="radio" id="vi" name="language" value="vi">
    <label for="vi">Vietnamese</label><br>
    <input type="submit" value="Change Language">
</form>

@php
    $lang = session()->get('locale');
    app()->setLocale($lang);
@endphp

{{ __('auth.failed') }}
</body>
</html>
