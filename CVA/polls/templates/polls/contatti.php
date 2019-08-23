{% load static %} <!-- Load Statics -->
{% include 'polls/header.php' %} <!-- Header -->
{% include 'polls/sidebar.php' %} <!-- SideBar -->
  <!--Container -->

    <center>
    <!-- Contatti -->
<div class="contatti">
      <div class="contatti__copy">
          <h2>Contattaci</h2>
          <form method="post">
          {% csrf_token %}
          <p>Indirizzo Email: </p>
          <input type="email" name='email' class="email" placeholder="📨"> <br>
          <p>Messaggio: </p>
          <textarea type="text" name='body' class="messaggio"></textarea> <br>  <br>
          <input type="submit" value="Invia" / class="submit">
        </div>
      </div>
    </center>
  </form>
    <!-- Instagram -->

    <div class="social">
     <div class="instagram__conteiner">
      <a href="https://www.instagram.com/cvlatolloofficial/" >
      <img class="instaimg" src="{%static 'polls/img/instagram.jpg'%}" alt="">
      </a>  <p class="instatext"> @cvlatolloofficial</p>
     </div> <br> <br> <br> <br> <br>

     <div class="facebook__conteiner">
      <a href="https://www.instagram.com/cvlatolloofficial/" >
      <img class="faceimg" src="{%static 'polls/img/facebook.png'%}" alt="">
      </a>  <p class="facetext"> Centro Velico L'Atollo</p>
     </div>
    </div>
   </div>
