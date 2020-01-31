<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Post #{{ $post->id }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
      body { margin: 5px; }
      form { width: 60vw; }
      textarea { width: 100%; }
    </style>
  </head>
  <body>
    <h4>Editar Post #{{ $post->id }}</h4>
    <form action="{{ route('post.update', $post->id) }}" method="post">
      @csrf
      @method('PUT')
      @foreach ($columns as $column)
        <div class="form-group">
          <label for="input-{{ $column }}">{{ $column }}</label>
        @if ($column == 'id' || $column == 'created_at' || $column == 'updated_at')
          <input id="input-{{ $column }}" class="form-control" type="text" name="{{ $column }}" value="{{ $post->$column }}" disabled>
        @elseif ($column == 'text')
          <textarea id="input-{{ $column }}" class="form-control" name="{{ $column }}" rows="4">{{ $post->$column }}</textarea>
        @else
          <input id="input-{{ $column }}" class="form-control" type="text" name="{{ $column }}" value="{{ $post->$column }}">
        @endif
        </div>
      @endforeach
      <input class="btn btn-primary" type="submit" name="submit" value="Actualizar">
    </form>
  </body>
</html>
