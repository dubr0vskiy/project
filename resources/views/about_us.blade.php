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
      color: red;
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
      color: aquama;
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
   .heading1{
       margin-top: 120px;
   }
   #vector3 {
       position: absolute;
       top: -100px;
       left: 0px;
       width: 100%;
   }
   #vector4 {
       position: absolute;
       top: 250px;
       left: 0px;
       width: 100%;
   }
   .column {
       left: 70px;
       margin-left: 50px;
       float: left;
       width: 420px;
       height: 250px;
       top: -70px;
       margin-top: 30px;
       position: relative;
       border: 1px solid #4456;
       border-radius: 16px;
       background-color: #ca9de1;
   }
   .column:hover{
    box-shadow: 3px 3px 50px red;
    border-radius: 16px;
   }
   .display-4 {
       margin-top: 100px;
       color: red;
   }
   .box3-3{
    position: relative;
    left: 40px;
    top: 20px;
    width:55px; 
    height:45px; 
    border-radius:5px; 
    background-color:gray;
   }
   .circle2 {
       position:absolute;
       left: 73%;       
       top: 90px;
       width: 60px;
       height: 60px;
       background-color: red;
       border-radius:200px;
   }
   .circle {
       position: relative;
       left: 0px;
       top: 240px;
       width: 60px;
       height: 60px;
       background-color:  pink;
       border-radius:200px;
   }
   .circle3 {
       position:absolute;
       left: 90%;
       top: 340px;
       width: 60px;
       height: 60px;
       background-color:yellow;
       border-radius:200px;
   }
#circle14{
    position: relative;
    left: 27px;
    top: 10px;
    width: 15px;
    height: 15px;
    border-radius: 40px;
    background-color: black;
} 
#circle15{
    position: relative;
    left: 10px;
    top: 10px;
    width: 15px;
    height: 15px;
    border-radius: 40px;
    background-color: white;
}
.box4-4{
    position: relative;
    left: 40px;
    top: 20px;
    width:55px; 
    height:45px; 
    border-radius:5px; 
    background-color:gray;
}
.row h3{
    position: relative;
    left: 40px;
    top: 30px;
    color: #000;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: 500;
}
.row p{
    position: relative;
    left: 40px;
    top: 30px;
}
#circle16 {
    position: relative;
    left: 12px;
    top: 8px;
    width: 30px;
    height: 30px;
    border-radius: 50px;
    background-color: green;
}
.box5-5{
    position: relative;
    left: 40px;
    top: 20px;
    width:55px; 
    height:45px; 
    border-radius:5px; 
    background-color:yellow;
}
#circle17 {
    position: relative;
    left: 10px;
    top: 6px;
    width: 15px;
    height: 15px;
    border-radius: 10px;
    background-color: red;
}
#circle18 {
    position: absolute;
    left: 30px;
    top: 6px;
    width: 15px;
    height: 15px;
    border-radius: 10px;
    background-color: green;
}
#circle19 {
    position: relative;
    left: 10px;
    top: 10px;
    width: 15px;
    height: 15px;
    border-radius: 10px;
    background-color: blue;
}
#circle20 {
    position: absolute;
    left: 30px;
    top: 25px;
    width: 15px;
    height: 15px;
    border-radius: 10px;
    background-color: purple;
}
.box6-6{
    position: relative;
    left: 40px;
    top: 20px;
    width:55px; 
    height:45px; 
    border-radius:5px; 
    background-color:green;
}
#circle21 {
    position: relative;
    left: 10px;
    top: 6px;
    width: 15px;
    height: 15px;
    border-radius: 10px;
    background-color: aquamarine;
}
#circle22 {
    position: absolute;
    left: 30px;
    top: 6px;
    width: 15px;
    height: 15px;
    border-radius: 10px;
    background-color: red;
}
#circle23 {
    position: relative;
    left: 10px;
    top: 10px;
    width: 15px;
    height: 15px;
    border-radius: 10px;
    background-color: #fff;
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
.p1{
    font-size: 16px;
    font-weight:bold;
    
}
.p2{
    font-size: 16px;
    font-weight:bold;
    
}
.p3{
    font-size: 16px;
    font-weight:bold;
    
}
.p4{
    font-size: 16px;
    font-weight:bold;
    
}
</style>
    <nav class="navbar navbar-expand-sm bg-dark fixed-top">
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
  <h4 style="font-size: 60px; color:#000; margin-top:100px;">{{__('text.des5')}}</h4>
  <img src="{{asset('images/Vector 3.svg')}}" alt="vector" id="vector3">
  <div class="circle"></div>
  <div class="circle2"></div>
  <img src="{{asset('images/Vector 4.svg')}}" alt="vector" id="vector4">
  <div class="circle3"></div>
  <div class="row">
         <div class="column">
         <div class="box3-3">
          <div id="circle14"></div>
          <div id="circle15"></div> 
        </div>
         <h3>{{__('text.des6')}}</h3>
         <p class="p1" >{{__('text.des7')}}<br>{{__('text.des7.5')}}<br>{{__('text.des7.6')}}</p>
       </div>
         <div class="column">
        <div class="box4-4">
          <div id="circle16"></div>
        </div>
         <h3>{{__('text.des8')}}</h3>
         <p class="p2">{{__('text.des9')}}<br>{{__('text.des9.5')}}<br>{{__('text.des9.6')}}</p>
       </div>
        <div class="column">
        <div class="box5-5">
          <div id="circle17"></div>
          <div id="circle18"></div>
          <div id="circle19"></div>
          <div id="circle20"></div>
        </div>
         <h3>{{__('text.des10')}}</h3>
         <p class="p3">{{__('text.des11')}}<br>{{__('text.des11.5')}}<br>{{__('text.des11.6')}}</p>
       </div>
        <div class="column">
        <div class="box6-6">
          <div id="circle21"></div>
          <div id="circle22"></div>
          <div id="circle23"></div>
        </div>
         <h3>{{__('text.des12')}}</h3>
         <p class="p4">{{__('text.des13')}}<br>{{__('text.des13.5')}}<br>{{__('text.des13.6')}}</p>
       </div>
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
           {{__('text.address-des1')}},<br> {{__('text.address-des2')}} 
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
</body>
</html>    