{% load static %} <!-- Load Statics -->
{% include 'polls/header.php' %} <!-- Header -->
{% include 'polls/sidebar.php' %} <!-- SideBar -->
  <!--Container -->

  <div class="content clearfix">
    <center>
    <!-- Contatti -->
<div class="contatti">
      <div class="contatti__copy">
          <h2>Contattaci</h2>
          <form method="post">
          {% csrf_token %}
          <p>Indirizzo Email: </p>
          <input type="email" class="email" placeholder="📨"> <br>
          <p>Messaggio: </p>
          <textarea type="text" class="messaggio"></textarea> <br>  <br>
          <input type="submit" value="Invia" / class="submit">
        </div>
      </div>
    </center>
  </form>
    <!-- Instagram -->
</div>
  <br>



{% include 'polls/footer.php' %} <!-- Footer -->
