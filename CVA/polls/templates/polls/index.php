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
   <!--NAVBAR -->
  <nav class="header ">
   <center>
    <img src="{%static 'polls/img/LogoFIV_CMYK.jpg'%}" alt="" class="header__logo">  </div>
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
       <li class="menu__item"><a href="" >Home</a></li>
       <li class="menu__item"><a href="" >Info</a></li>
       <li class="menu__item"><a href="" >Blog</a></li>
       <li class="menu__item"><a href="" >Contatti</a></li>
       <li class="menu__item"><a href="" >Istruttori</a></li>
      </ul>
      <iframe class="map__navbar" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2988.0798275301395!2d12.578480814707708!3d41.502544879253776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1325bcfe63317385%3A0xdd62b9e62cb98ec2!2sA.S.D.+Centro+Velico+L&#39;Atollo!5e0!3m2!1sit!2sit!4v1565890033497!5m2!1sit!2sit" allowfullscreen></iframe>

    </div>

   </center>
   </div>
   <hr class="Header__Hr">
  </nav>
   <!--SideBar -->
  <div class="sidebar">
    <div class="sidebar__copy">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2988.0798275301395!2d12.578480814707708!3d41.502544879253776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1325bcfe63317385%3A0xdd62b9e62cb98ec2!2sA.S.D.+Centro+Velico+L&#39;Atollo!5e0!3m2!1sit!2sit!4v1565890033497!5m2!1sit!2sit" allowfullscreen></iframe>
    </div>
  </div>

{%if images%}
  <!-- Slideshow container -->
 <div class="slideshow-container">

   <!-- Full-width images with number and caption text -->
   {%for image in images%}
   <div class="mySlides fade">
     <div class="numbertext">{{forloop.counter}} / {{images|length}}</div>
     <img src="{{image.image.url}}" style="width:100%">
     <div class="text">{{image.image.title}}</div>
   </div>
   {%endfor%}

   <!-- Next and previous buttons -->
   <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
   <a class="next" onclick="plusSlides(1)">&#10095;</a>
 </div>
 <br>

 <!-- The dots/circles -->
 <div style="text-align:center">
   {%for image in images %}
   <span class="dot" onclick="currentSlide({{forloop.counter}})"></span>
   {%endfor%}
 </div>
 {%endif%}
  <!-- End slideshow -->

  <div class="content clearfix">

    {% if frontPage %}
      {% for post in frontPage %}
          <h2>{{post.title}}</h2>
          <p>{{post.body_text}}</p>
      {% endfor %}

  {% else %}
      <p>Nessuna pagina principale</p>
  {% endif %}


   <img src="{%static 'polls/img/LogoFIV_CMYK.jpg'%}" alt="">
  </div>
  <br>
  <div class="footer">
   <hr>
    <footer class="clearfix">
     <p >Copyright - Leonardo Basso 2019 &copy;</p>
    </footer>
  </div>
 </body>
</html>
