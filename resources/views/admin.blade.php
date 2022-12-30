<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  
    @forelse ($posts as $post)

        <form method='post'>
              {{csrf_field()}}
              <h1 class="inline">{{$post->name}}</h1>
              <br>
              <button class='delete' name="delete" value="{{$post->name}}">Delete</button> 
        </form>
        <br>

        <a href="/comments/{{$post->id}}">
          <button class='comments' name='comments' value='{{$post->id}}'>All Comments</button>
        </a>

        <br>

          
      @empty
        <h1>No posts found</h1>
      @endforelse
    
      
      <br>

      <form method="post">
        @csrf
        <div style="display: inline-block">
          <input type="text" name='name' placeholder="name">
        </div>
      
      <button class='add' name='add' value='1'>Add Poster</button>
      </form>
 
  

  
</body>

<style>
    .inline{
      display: inline-block
    }
    button{
      height: 40px;
      width:75px;
    }

    .delete{
      background-color:rgb(223, 55, 55);
    }
    .add{
      background-color:rgb(77, 82, 182)
    }
    .comments{
      background-color:rgb(115, 120, 53)
    }



</style>


</html>