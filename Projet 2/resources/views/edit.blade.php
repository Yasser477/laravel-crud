<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/edit.css">
    <title>Document</title>
</head>
<body>

   

    @foreach ($promotion as $row)

   <br><br>
    <form action="{{url('update')}}/{{$row->id}}" method="POST">
        @csrf
        
        <input type="text" name="name" value="{{$row->name}}" id="inp">
        <button id="inpbtn">Update</button>

        
    </form>
    <br><br><br>
    <a href="{{url('addStudent')}}/{{$row->id}}" > <button id="add"> ADD STUDENT </button></a>

    @endforeach

<br><br>
    <div >    
        
        
         <table>
            <thead>
                <tr>
                    <th>name</th>
                    <th>second name</th>
                    <th>email</th>
                    <th>action</th>
                </tr>
            </thead>
            @foreach ($student as $row)
            <tbody>
            
                    
                <tr>
                    <td>{{$row->first_name}}</td>
                    <td>{{$row->last_name}}</td>
                    <td>{{$row->email}}</td>
                    <td>
                        <a href="{{url('getS')}}/{{$row->id}}"><button id="btn1">edit</button></a>
                        <a href="{{url('delete')}}/{{$row->id}}"><button id="btn2">delete</button></a>
                    </td>
                </tr>
              
    
            </tbody>
            @endforeach
         </table>
         
        </div>
    


    
    


</body>
</html>