{% load static %} <!-- Load Statics -->
{% include 'polls/header.php' %} <!-- Header -->
{% include 'polls/sidebar.php' %} <!-- SideBar -->
  <!--Container -->

  <div class="content clearfix">
    <div class="articles">
    {% if articles %}
    {% for article in articles %}
    <centering>
    <h2> <a href="/polls/blog/{{article.slug}}"> {{article.title}} </a></h2> <br>
    {% if article.bannerImage %}
    <img src="{{article.bannerImage.url}}">
    {% endif %}
    <hr>
    <br>
  </centering>
    {% endfor %}
  {% else %}
      <p class="Contenuto">Nessuna pagina principale</p>
  {% endif %}
  </div>
  </div>
  <br>

{% include 'polls/footer.php' %} <!-- Footer -->
