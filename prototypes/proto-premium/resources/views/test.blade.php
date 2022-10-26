
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
</head>
<body>


        <form action="{{'insert'}}" method="POST">
            @csrf
            <input type="text" name="name">
            <input type="submit" name="submit">
        </form>


        <div id="para">
           @foreach ($data as $row)
               <div>
                <p >  name  : {{$row->name}} <a href="edit/{{$row->id}}"></a>
                <button>update</button>
               </div>
           @endforeach
        </div>
     
        <div>
                    <input type="text" id="search">

        </div>


    <script src="/promotion.js"></script>
    
    
    </body>
</html>