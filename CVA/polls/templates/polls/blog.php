{% load static %} <!-- Load Statics -->
{% include 'polls/header.php' %} <!-- Header -->
{% include 'polls/sidebar.php' %} <!-- SideBar -->
  <!--Container -->

  <div class="content clearfix">
    <div class="articles">
      <div class="article">
        {% if articles %}
        {% for article in articles %}
        <!-- img -->
        {% if article.bannerImage %}
        <img src="{{article.bannerImage.url}}">
        {% endif %}
        <h2> <a href="/polls/blog/{{article.slug}}"> {{article.title}} </a></h2>
        <p>{{article.body_text_1}}</p>

    <br> <br> <br> <br>
 <hr>
          {% endfor %}
      </div>
  {% else %}
      <p class="Contenuto">Nessuna pagina principale</p>
  {% endif %}
  </div>
  </div>
  <br>
