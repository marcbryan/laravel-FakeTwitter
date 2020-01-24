<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista de usuarios</title>
  </head>
  <body>
    <h2>Usuarios</h2>
    <ul>
      @foreach ($users as $user)
        <li>{{ $user->name }}</li>
        <li style="list-style: none;">
          <ul>
            @foreach ($user->posts as $post)
              <li>{{ $post->text }}</li>
            @endforeach
          </ul>
        </li>
      @endforeach
    </ul>
  </body>
</html>
