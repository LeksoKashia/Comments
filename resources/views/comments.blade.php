<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @forelse ($comments as $comment)

        <form method='post'>
              {{csrf_field()}}
              <p>User: {{$comment->user->name}}</p>
              <p>{{$comment->body}}</p>
            
              <button class='delete' name="delete" value="{{$comment->id}}">Delete</button>
        </form>
        
        
      @empty
        <h1>No comments found</h1>
      @endforelse
  
</body>
</html>