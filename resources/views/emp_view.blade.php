<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
      h4{
        margin-left: 570px;
      margin-top:-20px ;
      position: absolute;
      color: slategrey;
      }
     
</style>
<body>
    <a href="{{route('logout')}}"><h5>logout</h5></a>  
 
    <h4><a href="{{ route('reg') }}">Add Employee</a></h4>
    <h3><a href="{{ route('tview') }}">View_Task</a></h3>
    <table border="1" style="background-Color:#758694;color:snow;border:1px solid gray;margin:auto;margin-top:30px;width:600px">
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Password</th>
          <th>Add_by</th>
          <th>Brance</th>
          <th>Update</th>
          <th>Delete</th>
          <th>Add task</th>
        </tr>
        @foreach ($data as $val)
        <tr>
             <td>{{$val->id}}</td>
             <td>{{$val->name}}</td>
             <td>{{$val->email}}</td>
             <td>{{$val->password}}</td>
             <td>{{$val->add_by}}</td>
             <td>{{$val->branch}}</td>
             <td class="btn"><button><a href="/update/{{$val->id}}">update</a></button></td>
             <td class="btn"><button><a href="/d/{{$val->id}}">delete</a></button></td>
             <td class="btn"><button><a href="/task/{{$val->id}}">Add task</a></button></td>
          </tr>
        @endforeach   
        <style>
          svg{
            height: 10px !important;
            width:10px !important;
          }
        </style>
        {{$data->render()}}   
    </table>
    
</body>
</html>
