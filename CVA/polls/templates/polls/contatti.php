{% load static %} <!-- Load Statics -->
{% include 'polls/header.php' %} <!-- Header -->
{% include 'polls/sidebar.php' %} <!-- SideBar -->
  <!--Container -->

  <div class="content clearfix">
    <h2>Contattaci</h2>
    <form action="contatti" method="post">
        {% csrf_token %}
        Indirizzo Email: <input type="email" name="email"><br>
        Messaggio: <input type="text" name="body"><br>
        <input type="submit" value="Invia" />
    </form>
    {% if debug %}
    <p>{{debug}}</p>
    {% endif%}
  </div>
  <br>

{% include 'polls/footer.php' %} <!-- Footer -->
