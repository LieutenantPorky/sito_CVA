{% load static %} <!-- Load Statics -->
{% include 'polls/header.php' %} <!-- Header -->
{% include 'polls/sidebar.php' %} <!-- SideBar -->
  <!--Container -->

  <div class="content clearfix">
    <h2>Contattaci</h2>
    <form method="post">
        {% csrf_token %}
        Indirizzo Email: <input type="email"><br>
        Messaggio: <input type="text"><br>
        <input type="submit" value="Invia" />
    </form>
  </div>
  <br>

{% include 'polls/footer.php' %} <!-- Footer -->
