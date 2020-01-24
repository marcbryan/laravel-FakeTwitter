<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nuevo post</title>
    <style>
      form { display: flex; flex-direction: column; width: 50vw; }
      form > input { margin-bottom: 5px; }
      form > input[type="submit"] { align-self: flex-start; }
    </style>
  </head>
  <body>
    <h3>Nuevo post</h3>
    <form action="/newpost" method="post">
      @csrf
      <input type="text" name="text" placeholder="Texto del post">
      <input type="text" name="img" placeholder="URL de imagen">
      <input type="submit" value="Crear post">
    </form>
  </body>
</html>
