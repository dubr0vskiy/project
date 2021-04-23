<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    <title>GameMaker</title>
</head>
<body>
<style>
    body {
        background-color: aquamarine;
    }
    .navbar-brand {
      margin-left: 70px;
      color: #fff;
      font-weight: bold;
      font-size: 30px;
   }
    .navbar-brand:hover {
      color: #fff;
   }
    .navlink {
      position: relative;
      left: 5rem;
      margin-right: 15px;
      color: orange;
      font-size: 20px;
      font-family:Arial, Helvetica, sans-serif;
  }
  .navlink:hover {
      color: aquamarine;
      font-weight: bold;
  }
   #btn-form1{
       position: relative;
       left: 17rem;   
   }
   #lang{
       position: relative;
       left: 217%;
   }
   .box {
       position: absolute;
       top: 0px;
   }
   .heading1{
       font-size: 60px;
       color: #000;
       margin-top: 120px;
   }
   .svg1 {
       position: absolute;
       left: 0px;
       top: 0px;
   }
   .des1 {
       color: #000;
       font-size: 20px;
   }
   .btn-cost {
       width: 250px;
       border-radius: 50px;
       color: #fff;
       font-size: 20px;
       background-color: #5360FE;
       box-shadow: 5px 10px #000;
   }
   .img-phone{
       position: absolute;
       left: 44%;
       top: 50px;
       width: 50%;
   }
   .img-vectary {
       position: absolute;
       left: 58%;
       top: 150px;
       width: 40%;
   }
   .vector {
       position: absolute;
       left: 0px;
       top: -120px;
       width: 100%;
   }
</style>
    <nav class="navbar navbar-expand bg-dark fixed-top">
      <a href="{{route('project')}}" class="navbar-brand"><span style="color:yellow;">Game</span><span style="color: white;">Maker</span></a>
      <ul class="navbar-nav">
       <li class="nav-item"><a href="{{route('about_us')}}" target="_blank" class="nav-link navlink">{{__('text.about_us')}}</a></li>
       <li class="nav-item"><a href="{{route('works')}}" target="_blank" class="nav-link navlink">{{__('text.projects')}}</a></li>
       <li class="nav-item"><a href="{{route('company')}}" target="_blank" class="nav-link navlink">{{__('text.company')}}</a></li>
      </ul>
      <a href="{{route('contact')}}" class="btn btn-success" id="btn-form1">{{__('text.application')}}</a>
      <div class="nav-item dropdown">
  <a class="btn btn-success dropdown-toggle" id="lang" type="button" data-toggle="dropdown">{{__('text.language')}}
  </a>
  <style>
      .dropdown-menu{
       margin-left: 270px;   
      }
  </style>
  <ul class="dropdown-menu" id="list">
    <li><a class="dropdown-item" href="lang/en">EN</a></li>
    <li><a class="dropdown-item" href="lang/ru">RU</a></li>
  </ul>
</div>
    </nav>    
    <img src="{{asset('images/Vector 3.svg')}}" alt="vector" id="vector3">
    <img src="{{asset('images/Vector 4.svg')}}" alt="vector" id="vector4">
    <div class="circle"></div>
    <div class="circle2"></div>
<div class="container">
     <svg class="svg1" height="220" width="100">
        <ellipse cx="-10" cy="150" rx="50" ry="40" style="fill:#5360FE;"/>
      </svg>
<div class="box">
    <h1 class=" heading1">{{__('text.des1')}}<br>{{__('text.des1.5')}}</h1>
    <p class="des1">{{__('text.des2')}}<br>{{__('text.des2.5')}}</p>
    <button class="btn btn-cost" id="btn_cost">{{__('text.cost')}}</a></button>
</div>
<style>
          #vector3{
              position:relative;
              left: 0px;
              top: 0px;
              width: 100%;
          }
          #vector4 {
              position: absolute;
              width: 100%;
              left: 0px;
              top: 90px;
          }
          .circle {
              position: absolute;
              left: 60px;
              top: 460px;
              width: 50px;
              height: 50px;
              background-color: #5360FE;
              border-radius: 50px;
          }
          .circle2 {
              position: absolute;
              left: 90%;
              top: 180px;
              width: 50px;
              height: 50px;
              background-color: #5360FE;
              border-radius: 50px;
          }
          .btn-cost:hover {
             background-color: green;
             box-shadow: 5px 10px #f1f1f1;
             color: #fff;
  }
  #modal4 form{
    position: relative;
    left: 25%;
    top: 70px;
    width: 600px;
    height: 450px;
    border-radius: 30px;
    background-color: #5360FE;
}
#modal4 .close{
    position: relative;
    left: 20%;
    top: -60px;
    color: red;
    border: none;
    font-size: 50px;
    font-weight: bold;
    cursor: pointer;
}
#modal4 input {
    position: relative;
    left: 10%;
}
#modal4 input[type=text]{
    width: 37%;
    height: 50px;
    border-radius: 50px;
}
#modal4 #name{
    position: relative;
    top: 100px;
}
#modal4 #number {
    position: relative;
    top: 27px;
    margin-left: 40%;
}
#modal4 input[type=email]{
    position: relative;
    top: 30px;
    width: 77%;
    height: 50px;
    border-radius: 50px;
}
#modal4 input[type=file]{
    position: relative;
    width: 77%;
    top: 30px;
    height: 50px;
    border-radius: 50px;
}
#modal4 h1{
    position: absolute;
    left: 19%;
    top: 20px;
    color: #fff;
}
#modal4 #submit {
    position: absolute;
    left: 27%;
    top: 350px; 
    width: 40%;

}
#modal4 {
    width: 100%;
    height: 100%;
    border-color: rgb(0, 0, 0, 0.9);
}
.modal {
    width: 100%;
    height: 100%;
    background-color: rgb(0, 0, 0, 0.9);
}
</style>
<script>
      $("#btn_cost").click(function() {
       $("#modal4").show(1000);
     });
     $(document).ready(function(){
      $('#header1').fadeIn(2000);
    });
</script>
<div class="modal" id="modal4" style="display: none;">
                <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
                  <h1>{{__('text.cost')}}</h1>
                  @csrf
                  <span class="close" onclick="document.getElementById('modal4').style.display='none'">&times;</span>
                  <input class="form-control" type="text" id="name" name="name" placeholder="Имя"><br>
                  <input class="form-control" type="text" id="number" name="phone" id="number" placeholder="Телефон"><br>
                  <input class="form-control" type="email" id="email" name="email" placeholder="E-mail"><br>
                  <input type="file" name="file" id="file" class="form-control">
                  <input class="form-control btn btn-success" id="submit" type="submit" id="submit" value="Отправить">
                </form>
</div>
        <div class="img">
        <img src="{{asset('images/Vectary.png')}}" alt="vectary" class="img-rounded img-vectary">
        <img src="{{asset('images/phone1.png')}}" alt="phone" class="img-rounded img-phone">
        </div>
</div>
 
 <style>
     .carousel-inner img {
        width: 100%;
     }
 </style>
  <div class="footer bg-dark">
       <div class="row contacts">
           <h1>{{__('text.contacts')}}</h1>
           <div class="container telephone">
           <h5>{{__('text.phone')}}</h5>
           +7(71036)-4-91-42
           </div>
           <div class=" container addres">
            <h5>{{__('text.address')}}</h5>
           {{__('text.meken')}}<br> {{__('text.meken2')}} 
           </div>
        <div class="column1">
           <div class="container addres">
            <h5>{{__('text.email')}}</h5>
            gamemaker@gmail.com
           </div>
           <div class="container addres">
           <h5>{{__('text.schedule')}}</h5>
            {{__('text.schedule1')}}<br>{{__('text.schedule2')}}
        </div>
       </div>
       </div>
       <div class="social">
       <a href="https://instagram.com/donermeow" id="icon" class="fa fa-instagram" style="font-size: 30px;"></a>
        <a href="https://facebook.com/zuck" id="icon" class="fa fa-facebook" style="font-size: 30px;"></a>
        <a href="https://whatsapp.com" id="icon" class="fa fa-whatsapp" style="font-size: 30px;"></a>
        <a href="https://twitter.com/potus" id="icon" class="fa fa-twitter" style="font-size: 30px;"></a>
       </div>
       <div class="row row4">GameMaker,
       {{__('text.rights111')}} © 2021</div>
   </div>
   <style>
   .footer {
       position: relative;
       top: 30px;
       height: 280px;
       color: #fff;
   }
   .footer h1{
       position: relative;
       left: 3rem;
       width: 300px;
       color: #fff;
   }
   .footer h5{
       width: 300px;
   }
   .footer p{
       position: relative;
       width: 160px;
   }
   .row3 {
       margin-left: 15px;
   }
   .contacts {
       width: 100%;
   }
   .column1 {
     position: absolute;
     left: 30%;
     margin-top: 55px;
   }
   .social {
       position: absolute;
       left: 60%;
       top: 50px;
   }
   .social a{
       margin-right: 30px;
       text-decoration: none;
   }
   .fa-instagram {
    padding: 12px;
	color: #456;
	background-color: #f1f1f1;
    border-radius: 10px;
	cursor: pointer;
}
.fa-facebook {
    padding: 12px;
	color: #456;
	background-color: #f1f1f1;
    border-radius: 10px;
	cursor: pointer;
}
.fa-whatsapp {
    padding: 12px;
	color: #456;
	background-color: #f1f1f1;
    border-radius: 10px;
	cursor: pointer;
}
.fa-twitter {
    padding: 12px;
	color: #456;
	background-color: #f1f1f1;
    border-radius: 10px;
	cursor: pointer;
}
.fa-instagram:hover{
    background-color: rgb(143, 19, 19);
    color: #fff;
}
.fa-facebook:hover{
    background-color: rgb(19, 62, 143);
    color: #fff;
}
.fa-whatsapp:hover{
    background-color: rgb(90, 180, 38);
    color: #fff;
}
.fa-twitter:hover{
    background-color: rgb(133, 162, 255);
    color: #fff;
}
.row4 {
    position:absolute;
    left: 57%;
    top: 150px;
}
   </style>
</body>
</html>