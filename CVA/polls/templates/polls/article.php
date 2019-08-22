<!DOCTYPE html>
<html lang="en">
<head>
  {% load static %}
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <div class="content">
    {% if article %}
    <h2> {{article.title}} </h2>
    <p> {{article.body_text_1}} </p>

    {%for image in images%}
    <img src="{{image.image.url}}">
    {%endfor%}
  {% else %}
      <p>Nessuna pagina principale</p>
  {% endif %}

</body>
</html>
