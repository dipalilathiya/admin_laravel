<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Password</th>
        <th>Email</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    @foreach ($data as $val)
         <tr>
             <td>{{$val->id}}</td>
             <td>{{$val->a_name}}</td>
             <td>{{$val->email}}</td>
             <td>{{$val->password}}</td>
             <td class="btn"><button><a href="/update1/{{$val->id}}">update</a></button></td>
             <td class="btn"><button><a href="/{{$val->id}}">delete</a></button></td>
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