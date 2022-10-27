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
    
    <a href="{{url('addStudent')}}/{{$row->id}}"> <button> ADD STUDENT </button></a>

    @endforeach


    <div>    
        
        @foreach ($student as $row)
         <table>
            <thead>
                <tr>
                    <th>name</th>
                    <th>second name</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
            
                    
                <tr>
                    <td>{{$row->first_name}}</td>
                    <td>{{$row->last_name}}</td>
                    <td>{{$row->email}}</td>
                </tr>
              
    
            </tbody>
         </table>
         @endforeach
        </div>
    


    
    


</body>
</html>