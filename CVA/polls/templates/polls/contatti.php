{% load static %} <!-- Load Statics -->
{% include 'polls/header.php' %} <!-- Header -->
{% include 'polls/sidebar.php' %} <!-- SideBar -->
  <!--Container -->

  <div class="content clearfix">
    <h2>Contact Us</h2>
    <form method="post">
        {% csrf_token %}
        {{ form.as_p }}
        <input type="submit" value="Submit" />
    </form>
  </div>
  <br>

{% include 'polls/footer.php' %} <!-- Footer -->
