{% load static %} <!-- Load Statics -->
{% include 'polls/header.php' %} <!-- Header -->
{% include 'polls/sidebar.php' %} <!-- SideBar -->
  <!--Container -->

  <div class="content clearfix">
    <div class="singel__article">
    {% if article %}
    <!-- img -->
    {% if article.bannerImage %}
    <center>
    <img src="{{article.bannerImage.url}}"> </center>
    {% endif %} <br>
    <div class="article__text">
      <h2> {{article.title}} </h2>
      <p class="Desc"> {{article.body_text_1}} </p> <br> <br>
      <p class="Contenuto"> {{article.body_text_2}} </p>
    </div>
  {% else %}
      <p class="Contenuto">Nessuna pagina principale</p>
  {% endif %}
  </div>
  </div>
  <br>
{% include 'polls/footer.php' %} <!-- Footer -->
