{% load static %} <!-- Load Statics -->
{% include 'polls/header.php' %} <!-- Header -->
{% include 'polls/sidebar.php' %} <!-- SideBar -->
  <!--Container -->

  <div class="content clearfix">
    <div class="articles">
    {% if article %}
    <h2> {{article.title}} </h2>
    <p class="Desc"> {{article.body_text_1}} </p>
    {% for image in article.articleimage_set.all%}
    <img src="{{image.image.url}}" alt="">
    <p>{{image.caption}}</p>
    {% endfor %}
  {% else %}
      <p class="Contenuto">Nessuna pagina principale</p>
  {% endif %}
  </div>
  </div>
  <br>
