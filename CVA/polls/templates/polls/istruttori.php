{% load static %} <!-- Load Statics -->
{% include 'polls/header.php' %} <!-- Header -->
{% include 'polls/sidebar.php' %} <!-- SideBar -->
  <!--Container -->

  <div class="content clearfix">
    {%if insts%}
    {%for inst in insts%}
    <center>
    <h3>{{inst.name}}</h3> <br>
    <img src='{{inst.image.url}}' height="100" width="100"> <br>
    <p>{{inst.description}}</p>
  </center>
    {%endfor%}
    {%endif%}

  </div>
  <br>

{% include 'polls/footer.php' %} <!-- Footer -->
