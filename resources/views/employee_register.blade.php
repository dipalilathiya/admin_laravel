<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Document</title>   
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

</head>
<style>
  *{
     margin: 0;
     padding: 0;
     /* background-color: aliceblue; */
  }
  .box1{
     width: 400px;
     height:450px;
     background-color: slategrey;
     margin: auto;
     color:  black;
     /* font-size: 20px;  */
     /* color: white; */
     border: 4px solid darkgray;
     border-radius: 40px;
     margin-top: 200px;

  }
  .box1 input{
     width:300px;
     color:  black;
     height: 30px;
     margin-top: 10px;
     padding: 5px 8px;
     border-radius: 10px;
     border: none;
  }
  .box1 p{
     font-size: 20px;
     margin-top: 20px;
  }
  .box2{
     width: 300px;
     border: 1px solid slategrey ;
     height: 445px;
     background-color: slategrey;
     font-size: 20px; 
     color: white;
     margin: auto;
  } 
  .box3 input
  {
     background-color:darkgray;
     color: white;
     width: 100px;
     height: 40px;
     border: 2px solid white;
     border-radius: 20px;
     /* margin-top: 10px; */
  }
  .btn{

     text-decoration: none;
     
  }
  .btn i{
   color: gray;
  }
  .btn button{
   width: 50px;
   height: 30px;
   border-radius: 40px;
   border: none;
   border: 3px solid gray;
  }
  h3{
   margin-left:580px; 
   position: absolute;
   color: #758694;
   margin-top: -50px;
  }
  .box4{
  margin-top: 20px;
  }
</style>
<body>
   <h3>Emloyee Registation Form</h3>
 <div class="box1">
 <form method="post">
   @csrf
   <div class="box2">
     <p>Name</p>
      <input type="text" placeholder="Name" name="name">
      <p>Email</p>
      <input type="email" placeholder="Email" name="email">
      <p>Password</p>
      <input type="password" placeholder="Password" name="password">
     <div class="box4">
     <label>Choose branch:</label>
     <select name="branch">
      @foreach($branch as $b)
        <option value="{{$b->id}}">{{$b->branch}}</option>
        @endforeach
      </select>
   </div>
      <div class="box3">
         <input type="submit" name="submit">
      </div>
     </div>
      </div>
 </form>
 <a href="{{route('logout')}}"><h4>logout</h4></a> 

  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
</body>
</html>
