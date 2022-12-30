<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>


  <h1>{{$post->name}}</h1>

  <ul>

    @foreach ($post->comments as $comment)

        <li>
          <p>User: {{$comment->user->name}}</p>
          {{$comment->body}}
          
        </li>

    @endforeach
    
     
  </ul>

    <form id="form" method="POST">
      @csrf

      <div>
          <input type="text" id="user_name" name="user_name" value='User' required>
      </div>

      <div>
          <input type="text" id="body" name="body" value='body'  required>
      </div>


      <button type="submit" name='submit' >Add to Database</button>

  </form>

  <script>

document.getElementById('form').addEventListener('submit', event => {

    fetch('/addcomms', {
        method: 'POST',
        body: JSON.stringify({
          user_name: document.getElementById('user_name').value,
          body: document.getElementById('body').value,
        }),
    })
    });


  </script>


</body>
</html>
