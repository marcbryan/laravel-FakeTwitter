<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>El post de {{ $post->user->name }}</title>
  </head>
  <body>
    <h2>Random post</h2>
    <h4>{{ $post->user->name }}</h4>
    <p>{{ $post->text }}</p>
  </body>
</html>
