<!DOCTYPE html>
{% load static %}
<html lang="it">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{%static 'polls/style.css' %}">
   <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" ></script>
   <title>Cvl</title>
   <script type="text/javascript" src="{% static 'polls/scripts.js' %}"></script>
 </head>
 <body>
   {% load static %}
   <!--NAVBAR -->
  <nav class="header ">
   <center>
    <img src="{%static 'polls/img/LogoCVL.svg'%}" alt="" class="header__logo">  </div>

      <hr class="Header__Hr">

   <div class="Menu__box ">
     </center>

     <div class="Burger"> <a href="">
       <div class="line-1"></div>
       <div class="line-2"></div>
       <div class="line-3"></div></a>

    </div>
   <center>
   <div class="Navbar__list animate" >
     <ul class="Header__menu clearfix" align: 'center'>
       <li class="menu__item"><a href="/polls/home" >Home</a></li>
       <li class="menu__item"><a href="/polls/info" >Info</a></li>
       <li class="menu__item"><a href="/polls/blog" >Blog</a></li>
       <li class="menu__item"><a href="/polls/contatti" >Contatti</a></li>
       <li class="menu__item"><a href="/polls/istruttori" >Istruttori</a></li>
      </ul>
      <iframe class="map__navbar" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2988.0798275301395!2d12.578480814707708!3d41.502544879253776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1325bcfe63317385%3A0xdd62b9e62cb98ec2!2sA.S.D.+Centro+Velico+L&#39;Atollo!5e0!3m2!1sit!2sit!4v1565890033497!5m2!1sit!2sit" allowfullscreen></iframe>

    </div>

   </center>
   </div>
   <hr class="Header__Hr">
  </nav>
