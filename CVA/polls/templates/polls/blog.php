{% load static %} <!-- Load Statics -->
{% include 'polls/header.php' %} <!-- Header -->
{% include 'polls/sidebar.php' %} <!-- SideBar -->
  <!--Container -->

  <div class="content clearfix">
    <div class="articles">
    {% if articles %}
    {% for article in articles %}
    <h2> {{article.title}} </h2>
    <p class="Desc"> {{article.body_text_1}} </p>
    {% for image in article.articleimage_set%}
    <img src="{{image.url}}" alt="">
    {% endfor %}
  {% else %}
      <p class="Contenuto">Nessuna pagina principale</p>
  {% endif %}
  </div>
  </div>
  <br>

{% include 'polls/footer.php' %} <!-- Footer -->
