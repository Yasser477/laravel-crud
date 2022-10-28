<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url("hahaha")}}" method="POST">
    @csrf 
     <input type="text" placeholder="name" name="Fname"> <br> <br>
     <input type="text" placeholder="second name" name="secName"><br><br>
     <input type="text" placeholder="email" name="email"><br><br>
     <input type="hidden" value="{{$id}}" name="Promoid">
     <button type="submit"> add student </button>
    </form>
    

   


</body>
</html>