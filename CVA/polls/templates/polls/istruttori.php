{% load static %} <!-- Load Statics -->
{% include 'polls/header.php' %} <!-- Header -->
{% include 'polls/sidebar.php' %} <!-- SideBar -->
  <!--Container -->

  <div class="content clearfix">
    {% if Istrutctor %}
    <!-- img -->
    {% if Istruttori.image %}
    <center>
    <img src="{{istruttori.bannerImage.url}}"> </center>
    {% endif %} <br>
    <div class="article__text">
      <h2> {{Istruttori.title}} </h2>
      <p class="Desc"> {{Istruttori.desc} </p> <br> <br>

    </div>
  {% else %}
      <p class="Contenuto">Nessuna pagina principale</p>
  {% endif %}
  </div>
  <br>

{% include 'polls/footer.php' %} <!-- Footer -->
