
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/test.css">
    <title>Document</title>
   
</head>
<body>

    <div>
        <input type="text" id="search" placeholder="search">

    </div>
    <div id="container">
<br><br>
        <form action="{{'insert'}}" method="POST">
            @csrf
            <input type="text" name="name" id="inp">
            <input type="submit" name="submit" id="inpbtn">
            <br><br>
        </form>

<br><br>
        <div id="para">
           @foreach ($data as $row)
               <div>
                <p >  <b> <span id="spn">PROMO NAME : </b>  {{$row->name}}</span> <a href="edit/{{$row->id}}">
                <button id="btn1">update</button>
                </a>
               <a href="{{'dltpromo'}}/{{$row->id}} "><button id="btn2">delete</button></a> 
               </div>
           @endforeach
        </div>
        <br><br>
        
    </div>

    <script src="/promotion.js"></script>
    
    
    </body>
</html>