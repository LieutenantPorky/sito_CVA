{% load static %} <!-- Load Statics -->
{% include 'polls/header.php' %} <!-- Header -->
{% include 'polls/sidebar.php' %} <!-- SideBar -->
  <!--Container -->

  <div class="content clearfix">
    {% if insts %}
    {% for inst in insts %}
    <center>
    <img src="{{inst.image.url}}"> </center>} <br>
    <div class="article__text">
      <h2> {{inst.name}} </h2>
      <p class="Desc"> {{inst.description}} </p> <br> <br>

    </div>
    {% endfor %}
  {% else %}
      <p class="Contenuto">Nessuna pagina principale</p>
  {% endif %}
  </div>
  <br>

{% include 'polls/footer.php' %} <!-- Footer -->
