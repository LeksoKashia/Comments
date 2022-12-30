<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <a href="/admin"><button>Admin</button></a>


  @forelse ($posts as $post)

    <a href="/{{$post->id}}"><h1>{{$post->name}}</h1></a>
          
  @empty
    <h1>No posts found</h1>
  @endforelse
  
</body>
</html>