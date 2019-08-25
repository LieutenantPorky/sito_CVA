{% load static %} <!-- Load Statics -->
{% include 'polls/header.php' %} <!-- Header -->
 <!-- Cover -->

<style>
.cover{
  {% if images %}
  background-image: url({{images.image.url}});
  {% else %}
    background-image: url(https://bit.ly/2ZqdurA);
  {% endif %}
}
</style>

<div class="cover">
  <div class="cover__text">

    <h1>Centro Velico L'Atollo</h1>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    <center> <div class="cover__botton"><a href="#">Info</a></div> </center>
  </div>
</div>
{% include 'polls/sidebar.php' %} <!-- SideBar -->
  <!--Container -->
  <div class="content clearfix">



  </div>

{% include 'polls/footer.php' %} <!-- Footer -->
