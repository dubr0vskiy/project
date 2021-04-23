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
        background-color: #77c3b1;
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
     font-family:Arial, Helvetica, sans-serif;  }
  .navlink:hover {
      color: aquamarine;
      font-weight: bold;
  }
   #btn-form1{
       position: relative;
       left: 17rem;  
   }
   #lang {
       position: relative;
       left: 18rem;
   }
   #list {
       left: 5rem;
   }
   .img-phone{
       position: absolute;
       width: 45%;
       margin-left: 100px;
       margin-top: 50px;
   }
   .img-jostik{
       left: 0rem;
       margin-top: 150px;
       width: 45%;
   }
   .des1 {
        position: absolute;
        left: 55%;
        top: 90px;
        margin-top: 100px;
        color: #000;
   }
   .des1 h1 {
       position: absolute;
       top: -70px;
       font-size: 50px;
   }
   .des1 p{
       font-size: 18px;
   }
   .p1{
       font-size: 18px;
       font-weight: bold;
       color: #04035F;
   } 
   #img-group{
      width: 50px;
      height: 50px;
      margin-right: 30px;
   }
   #img-mario{
      width: 50px;
      height: 50px;
      margin-right: 30px;  
   }
   .row1{
       position: absolute;
       left: 57.5%;
       top: 370px;
   } 
   .row1 p{
       position: absolute;
       left: 5rem;
       width: 300px;
   }
   .row2{
       position: absolute;
       left: 57.5%;
       top: 500px;
   } 
   .circle {
       width: 50px;
       height: 50px;
       border-radius: 50px;
       background-color: #04D7CD;
       margin-right: 30px;
   }
   .p2{
       font-size: 18px;
       font-weight: bold;
       color: #04035F;
   } 
   .footer {
       width: 100%;
       height: 280px;
       color: #fff;
   }
   .footer h1{
       position: relative;
       left: 3rem;
       width: 300px;
   }
   .footer h5{
       width: 300px;
   }
   .footer p{
       width: 160px;
   }
   .contacts {
       width: 100%;
   }
   .row3 {
       margin-left: 15px;
       
   }
   .column1 {
     position: absolute;
     left: 30%;
     margin-top: 55px;
   }
   .social {
       position: absolute;
       left: 60%;
       top: 700px;
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
    left: 58%;
    top: 800px;
    color: #fff;
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
      <div class="dropdown">
  <a class="btn btn-success dropdown-toggle" id="lang" type="button" data-toggle="dropdown">{{__('text.language')}}
  </a>
  <style>
      .dropdown-menu{
       margin-left: 190px;   
      }
  </style>
  <ul class="dropdown-menu" id="list">
    <li><a class="dropdown-item" href="lang/en">EN</a></li>
    <li><a class="dropdown-item" href="lang/ru">RU</a></li>
  </ul>
</div>
</nav>
   <div class="container">
      
      <img src="{{asset('images/jostik.png')}}" class="img-rouded img-jostik" alt="jostik">
     <div class="container col-md-5 des1">
       <h1 class="heading">{{__('text.company_heading')}}</h1>
       <p>{{__('text.des14')}}<br></p>
          <p>{{__('text.des15')}}</p>
     </div>
     <div class="row row1">
       <img src="{{asset('images/Group.png')}}" id="img-group" alt="circles">
       <p class="p1">{{__('text.des16')}}</p>
     </div>
     <div class="row row2">
       <img src="{{asset('images/mario.png')}}" id="img-mario" alt="circles">
       <p class="p2">{{__('text.des17')}}<br>{{__('text.des17.5')}}</p>
     </div>
   </div>
   <div class="footer bg-dark">
       <div class="row con
       tacts">
           <h1>{{__('text.contacts')}}</h1>
           <div class=" container telephone">
           <h5>{{__('text.phone')}}</h5>
           <p>+7(71036)-4-91-42</p>
           </div>
           <div class=" container addres">
            <h5>{{__('text.address')}}</h5>
            <p>{{__('text.meken')}}<br>  {{__('text.meken2')}}</p> 
           </div>
        <div class="column1">
           <div class="container addres">
            <h5>{{__('text.email')}}</h5>
            <p>gamemaker@gmail.com</p> 
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
</body>
</html>