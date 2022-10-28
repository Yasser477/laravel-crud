<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($students as $row)
        
   
    <form action="{{url("updS")}}/{{$row->id}}" method="POST">
    @csrf 
     <input type="text" placeholder="name" value="{{$row->first_name}}" name="Fname"> <br> <br>
     <input type="text" placeholder="second name" value="{{$row->last_name}}" name="secName"><br><br>
     <input type="text" placeholder="email" value="{{$row->email}}" name="email"><br><br>
     
     <button type="submit"> update</button>
    </form>
     @endforeach

   


</body>
</html>