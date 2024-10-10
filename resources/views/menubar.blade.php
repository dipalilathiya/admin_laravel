<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
      .box{
          width: 1400px;
          height:70px ;
          background-color: slategray;
          border: 1px solid rgb(255, 255, 255);
        }
        .b1{
          display: flex;
          margin-left: 25px;
      }
      .b1 i{
       font-size: 18px;
       color: white;
       margin-top: 25px;
       
      }
      .b1 h2{
        color: white;
        margin-left: 20px;
      }
      .b1 input{
       width: 350px;
       height: 40px;
       border-radius: 30px;
       border: none;
       margin-top: 15px;
       margin-left: 200px;
      }
      .b1 input::placeholder{
        margin-left: 30px;
        font-size: 15px;
        position: absolute;
      }
      .b2{
          width: 230px;
          /* height:auto; */
          height: 900px;
          background-color: slategrey;
          margin-top: 5px;
      }
      .b22{
         width: 220px;
         border-radius: 20px;
         height: 50px;
         font-size: 18px;
         /* margin-left: 10px; */
         /* margin-top: 20px; */
         text-align: center;
         border: 5px solid slategray;
         background-color: slategray;
         
      }
      .b21{
        margin-top: 20px;
        position: absolute;
      }
      .b22:hover{
        background-color: rgb(255, 255, 255);
        /* border: 1px solid white; */
        /* transition:ease-in 0.1s; */
      
      }
      .b22:hover a{
         color: slategray;
         margin-left: -70px;
         margin-top: 10px;
      }
      .b22 a{
        text-decoration: none;
       position: absolute;
       margin-left: -70px;
       margin-top: 10px;
       color: rgb(255, 255, 255);
      }
</style>
<body>
     <div class="box">
           <div class="b1"> 
               <i class="fa-solid fa-align-justify"></i>
               <h2>Dashboard</h2>
               <input type="text" placeholder="Search">
           </div>
            <div class="b2">
                <div class="b21">
                 <div class="b22">
                    <a href="{{route('a_login')}}">Admin-Login</a>
                 </div>   
                 <div class="b22">
                    <a href="">Employee</a>
                 </div>  
                 <div class="b22">
                    <a href="">home</a>
                 </div>  
                 <div class="b22">
                    <a href="">home</a>
                 </div>   
                 <div class="b22">
                    <a href="">home</a>
                 </div>  
                 </div>   
           </div>
     </div>
</body>
</html>