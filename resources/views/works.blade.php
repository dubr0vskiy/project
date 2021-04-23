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
     font-family:Arial, Helvetica, sans-serif,Garamond;  }
  .navlink:hover {
      color: aquamarine;
      font-weight: bold;
  }
  #btn-form1{
       position: relative;
       left:17rem;   
  }
   #lang {
       position: relative;
       left: 18rem;
  }
   .display-4{
       margin-top: 90px;
   }
   .column:hover{
    box-shadow: 3px 3px 50px orange;
    border-radius: 16px;
}
.column { 
    margin-left: 50px;
    float: left;
    width: 300px;
    position: relative;
    left:170px;
    margin-right: 10px;
    margin-top: 0px;
    border: 1px solid #3399FF;
    border-radius: 16px;
    background-color: #3399FF;
    height: 440px; 
}
#col3{
    position: relative;
    left: 32px;
    top:50px;
    width: 300px;
    font-weight: bold;
}
#col4{
    position: relative;
    left: 32px;
    top:50px;
    font-weight: bold;
}

#col5{
    position: absolute;
    left: 170px;
    top:390px;
    font-weight: bold;
}
#first-proj{
    position: relative;
    left: 35px;
    top: 40px;
    width: 230px;
    cursor: crosshair;
}
.footer {
       position: relative;
       top: 100px;
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
       left: 50px;
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
    left: 60%;
    top: 150px;
}
</style>
<nav class="navbar navbar-expand bg-dark fixed-top">
      <a href="{{route('project')}}" class="navbar-brand"><span style="color:yellow;">Game</span><span style="color: white;">Maker</span></a>
      <ul class="navbar-nav">
       <li class="nav-item"><a href="{{route('about_us')}}" class="nav-link navlink">{{__('text.about_us')}}</a></li>
       <li class="nav-item"><a href="{{route('works')}}" class="nav-link navlink">{{__('text.projects')}}</a></li>
       <li class="nav-item"><a href="{{route('company')}}" class="nav-link navlink">{{__('text.company')}}</a></li>
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
   <div class="container">
       <h1 style="margin-top:80px; font-size:60px; color:#000;">{{__('text.des3')}}</h1> 
<div id="demo" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
  <div class="row">
    <div class="carousel-item active">
      <div class="column"> 
         <img src="{{asset('images/Rectangle 1.png')}}" id="first-proj" width="300" height="300">
         <p id="col3">Counter-Strike: Global Offensive</p>
          <p id="col4">1.2+ {{__('text.mlrd')}}<br>{{__('text.downloads')}}</p> 
          
          <p id="col5">15+{{__('text.mln')}}<br>{{__('text.comments')}}</p>
      </div>
      <div class="column"> 
         <img src="{{asset('images/Rectangle 2.png')}}" id="first-proj" width="300" height="300">
         <p id="col3">    GTA V </p>
          <p id="col4">1+{{__('text.mlrd')}} <br>{{__('text.downloads')}}</p> 
          
          <p id="col5">10+ {{__('text.mln')}}<br>{{__('text.comments')}}</p>
      </div>
</div>
   <div class="carousel-item">
      <div class="column"> 
         <img src="{{asset('images/Rectangle 3.png')}}" id="first-proj" width="300" height="300">
         <p id="col3">Minecraft</p>
          <p id="col4">2+ {{__('text.mlrd')}}<br>{{__('text.downloads')}}</p> 
          
          <p id="col5">400+ {{__('text.mln')}}<br>{{__('text.comments')}}</p>
      </div>
      <div class="column"> 
         <img src="{{asset('images/Rectangle 4.png')}}" id="first-proj" width="300" height="300">
         <p id="col3">Dota 2</p>
          <p id="col4">1+ {{__('text.mlrd')}}<br>{{__('text.downloads')}}</p> 
          
          <p id="col5">20+ {{__('text.mln')}}<br>{{__('text.comments')}}</p>
      </div>
    </div>
  </div>
</div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
  </div>
</div>
<div class="footer bg-dark">
       <div class="row contacts">
           <h1>{{__('text.contacts')}}</h1>
           <div class="container telephone">
           <h5>{{__('text.phone')}}</h5>
           +7(71036)-4-91-42
           </div>
           <div class=" container addres">
            <h5>{{__('text.address')}}</h5>
           {{__('text.meken')}}<br>{{__('text.meken2')}} 
           </div>
        <div class="column1">
           <div class="container address">
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
</body>
</html>