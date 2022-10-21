<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>

        <form action="{{'insert'}}" method="POST">
            @csrf
            <input type="text" name="name">
            <input type="submit" name="submit">



        </form>

        <div>
           @foreach ($data as $row)
               <div>
                <p>  name  : {{$row->name}}  </p>
               </div>
           @endforeach
        </div>

    </div>
    
</body>
</html>