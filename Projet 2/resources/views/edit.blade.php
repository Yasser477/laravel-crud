<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

   

    @foreach ($promotion as $row)
        
   
    <form action="{{url('update')}}/{{$row->id}}" method="POST">
        @csrf

        <input type="text" name="name" value="{{$row->name}}" >
        <button>click</button>
    </form>
    @endforeach


    <div>
     <a href="{{url('addStudent')}}/{{$row->id}}"> <button  > ADD STUDENT </button></a>


    </div>


</body>
</html>