<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
      h3{
      margin-left: 570px;
      margin-top:-20px ;
      position: absolute;
      color: slategrey;
      }
</style>
<body>
    <h3>Task view</h3>
    <table border="1" style="background-Color:#758694;color:snow;border:1px solid gray;margin:auto;margin-top:30px;width:600px">
        <tr>
          <th>Task_name</th>
          <th>description</th>
          <th>date</th>
          <th>Asign_by</th>
          <th>Emp_Id</th>
          <th>Update</th>
          <th>Delete</th>
          {{-- <th>Update</th>
          <th>Delete</th> --}}
        </tr>
        @foreach ($data as $val)
        <tr>
             <td>{{$val->id}}</td>
             <td>{{$val->task_name}}</td>
             <td>{{$val->description}}</td>
             <td>{{$val->date}}</td>
             <td>{{$val->a_name}}</td>
             <td>{{$val->name}}</td>
             <td class="btn"><button><a href="{{route("updatetask",$val->id)}}">update</a></button></td>
             <td class="btn"><button><a href="/td/{{$val->id}}">delete</a></button></td> 
          </tr>
        @endforeach      
    </table>
    <style>
      svg{
        height: 10px !important;
        width:10px !important;
      }
    </style>
    {{$data->render()}}
    <a href="{{route('logout')}}"><h4>logout</h4></a>    
</body>
</html>
